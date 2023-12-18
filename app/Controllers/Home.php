<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Home extends BaseController
{
    public function index(): string
    {
        $GuestModel = new GuestModel();
        $input = $this->request->getGet('invitationid');

        if (isset($input)) {
            $guest = $GuestModel->where('tamu_id', $input)->first();
            $gallerydir = 'images/gallery';
            $files = glob($gallerydir . "/*");
            $data = $this->data;
            $data['title'] = 'Wedding of Dinda & Lilo';
            $data['desc'] = 'Dinda & Lillo akan segera menikah pada 11 November 2023.';
            $data['galleries'] = $files;
            $data['guest'] = $guest;
            return view('home', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function guestlist()
    {
        $GuestModel = new GuestModel();
        $pager = \Config\Services::pager();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://restcountries.com/v3.1/all?fields=name,idd");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $country = json_decode(curl_exec($curl), true);
        $countrysort = array_column($country, 'name');
        array_multisort($countrysort, SORT_ASC, $country);
        curl_close($curl);

        $data = $this->data;
        $data['title'] = 'Tamu Undangan';
        $data['description'] = '';
        $data['guests'] = $GuestModel->paginate(20, 'guests');
        $data['pager'] = $GuestModel->pager;
        $data['countries'] = $country;
        return view('guestlist', $data);
    }

    public function send() {
        $GuestModel = new GuestModel();
        
        $input = $this->request->getPost('id');
        $status = [
            'id'        => $input,
            'status'    => '1'
        ];
        $GuestModel->save($status);
        die($input);
    }

    public function addguest() {
        $GuestModel = new GuestModel();

        $input = $this->request->getPost();
        $data = [
            'name'          => $input['name'],
            'country_code'  => $input['country-code'],
            'phone'         => $input['phone'],
            'tamu_id'       => time(),
            'status'        => '0',
        ];
        $GuestModel->save($data);

        return redirect()->back()->with('message', 'Undangan berhasil ditambahkan.');
    }

    public function editguest() {
        $GuestModel = new GuestModel();

        $input = $this->request->getPost();
        $data = [
            'id'            => $input['id'],
            'name'          => $input['name'],
            'country_code'  => $input['country-code'],
            'phone'         => $input['phone'],
            'status'        => '0',
        ];
        $GuestModel->save($data);

        return redirect()->back()->with('message', 'Undangan berhasil dirubah.');
    }

    public function show404() {
        $data = $this->data;
        $data['title'] = '404';
        $data['description'] = lang('Errors.sorryCannotFind');
        return view('errors/404', $data);
    }
}

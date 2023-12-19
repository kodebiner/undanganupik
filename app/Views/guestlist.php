<?= $this->extend('layout') ?>

<?= $this->section('extraScripts') ?>
    <script src="js/jquery.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="uk-container uk-container-small">
    <?= view('Views/Auth/_message_block') ?>
    <div class="uk-h3 uk-text-uppercase uk-text-bold" style="color: #E92629;">Daftar Tamu Undangan</div>
    <div class="uk-text-right">
        <button class="uk-button uk-button-secondary" type="button" uk-toggle="target: #add-guest">Tambah Undangan</button>
    </div>
    <div class="uk-margin uk-overflow-auto">
        <table class="uk-table uk-table-divider uk-table-middle uk-table-small uk-table-hover uk-table-responsive">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guests as $guest) { ?>
                    <?php
                    if ($guest['status'] === '0') {
                        $status = 'Belum Dikirim';
                    } else {
                        $status = 'Sudah Dikirim';
                    }
                    ?>
                    <tr>
                        <td class="uk-width-medium"><?= $guest['name'] ?></td>
                        <td class="uk-table-shrink">+<?= $guest['country_code'].$guest['phone'] ?></td>
                        <?php if ($guest['status'] === '0') { ?>
                            <td id="status<?= $guest['id'] ?>" class="uk-width-small uk-text-center" style="background-color:#cf2317; color: #fff;">Belum Dikirim</td>
                        <?php } else { ?>
                            <td id="status<?= $guest['id'] ?>" class="uk-width-small uk-text-center" style="background-color:#1dcf17; color: #000;">Sudah Dikirim</td>
                        <?php } ?>
                        <td class="uk-width-small">
                            <div class="uk-child-width-auto uk-flex-center" uk-grid>
                                <div>
                                    <a href="#guest-<?= $guest['id'] ?>" uk-icon="file-edit" uk-toggle></a>
                                </div>
                                <?php //if ($guest['status'] === '0') { ?>
                                <div id="whatsapp<?= $guest['id'] ?>">
                                    <a id="send<?= $guest['id'] ?>" target="_blank" uk-icon="whatsapp"></a>
                                </div>
                                <?php //} ?>
                            </div>
                        </td>
                    </tr>
                    <?php if ($guest['status'] === '0') { ?>
                    <script>
                        document.getElementById('send<?= $guest['id'] ?>').addEventListener('click', function() {
                            $.ajax({
                                url: "guestlist/send",
                                type: 'POST',
                                data: {
                                    id: <?= $guest['id'] ?>
                                },
                                success: function(response) {
                                    console.log(response);
                                    window.open("https://wa.me/<?= $guest['country_code'].$guest['phone'] ?>?text=https%3A%2F%2Fupiksurabaya.binary111.com%2F%3Finvitationid%3D<?=$guest['tamu_id']?>");
                                    document.getElementById('status<?= $guest['id'] ?>').removeAttribute('style');
                                    document.getElementById('status<?= $guest['id'] ?>').setAttribute('style', 'background-color:#1dcf17; color: #000;');
                                    document.getElementById('status<?= $guest['id'] ?>').innerHTML = 'Sudah Dikirim';
                                }
                            });                            
                        });
                    </script>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?= $pager->links('guests', 'uikit_full') ?>
</div>
<div id="add-guest" class="uk-flex-top" uk-modal="esc-close: false; bg-close: false;">
    <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Tambah Undangan</h3>
        </div>
        <form action="guestlist/new" method="post">
            <div class="uk-modal-body">
                <div class="uk-margin uk-margin-remove-top">
                    <label class="uk-form-label" for="name">Nama Lengkap</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" required />
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="phone">No. HP</label>
                    <div class="uk-form-controls" uk-grid>
                        <div class="uk-width-1-3">
                            <select class="uk-select" id="country-code" name="country-code">
                            <?php                                
                            foreach ($countries as $country) {
                                if (!empty($country['idd']['root'])) {
                                    if ($country['name']['common'] === 'Indonesia') {
                                        echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).implode($country['idd']['suffixes']).'" selected>'.$country['idd']['root'].implode($country['idd']['suffixes']).' '.$country['name']['common'].'</option>';
                                    } elseif (count($country['idd']['suffixes']) > 1) {
                                        echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).'">'.$country['idd']['root'].' '.$country['name']['common'].'</option>';
                                    } else {
                                        echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).implode($country['idd']['suffixes']).'">'.$country['idd']['root'].implode($country['idd']['suffixes']).' '.$country['name']['common'].'</option>';
                                    }
                                }
                            }
                            ?>
                            </select>
                        </div>
                        <div class="uk-width-2-3">
                            <input class="uk-input" type="number" id="phone" name="phone" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-modal-footer uk-text-center">
                <button class="uk-button uk-button-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
<?php foreach ($guests as $guest) { ?>
    <div id="guest-<?=$guest['id']?>" class="uk-flex-top" uk-modal="esc-close: false; bg-close: false;">
        <div class="uk-modal-dialog uk-margin-auto-vertical">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">Ubah Undangan</h3>
            </div>
            <form action="guestlist/edit" method="post">
                <div class="uk-modal-body">
                    <div class="uk-margin uk-margin-remove-top">
                        <label class="uk-form-label" for="name">Nama Lengkap</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="name" name="name" value="<?=$guest['name']?>" required />
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="phone">No. HP</label>
                        <div class="uk-form-controls">
                            <div uk-grid>
                                <div class="uk-width-1-3">
                                    <select class="uk-select" id="country-code" name="country-code">
                                    <?php                                
                                    foreach ($countries as $country) {
                                        if (!empty($country['idd']['root'])) {
                                            if ($country['name']['common'] === 'Indonesia') {
                                                echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).implode($country['idd']['suffixes']).'" selected>'.$country['idd']['root'].implode($country['idd']['suffixes']).' '.$country['name']['common'].'</option>';
                                            } elseif (count($country['idd']['suffixes']) > 1) {
                                                echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).'">'.$country['idd']['root'].' '.$country['name']['common'].'</option>';
                                            } else {
                                                echo '<option value="'.ltrim($country['idd']['root'], $country['idd']['root'][0]).implode($country['idd']['suffixes']).'">'.$country['idd']['root'].implode($country['idd']['suffixes']).' '.$country['name']['common'].'</option>';
                                            }
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="uk-width-2-3">
                                    <input class="uk-input" type="number" id="phone" name="phone" />
                                </div>
                            </div>
                            <div class="uk-margin-small uk-text-meta">Nomor yang terdaftar adalah +<?=$guest['country_code'].$guest['phone']?></div>
                        </div>
                    </div>
                    <input id="id" name="id" value="<?=$guest['id']?>" hidden />
                </div>
                <div class="uk-modal-footer uk-text-center">
                    <button class="uk-button uk-button-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
<?= $this->endSection() ?>
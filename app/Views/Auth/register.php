<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="uk-width-1-1 uk-flex uk-flex-center">
    <?= view('Views/Auth/_message_block') ?>
</div class="uk-width-1-3@m">
<div class="uk-width-1-1 uk-card uk-card-default">
    <div class="uk-card-header">
        <h3 class="uk-text-uppercase uk-text-center"><?=lang('Auth.register')?></h3>
    </div>
    <form action="<?= url_to('register') ?>" method="post">
        <div class="uk-card-body">
            <?= csrf_field() ?>
            <div class="uk-margin uk-margin-remove-top">
                <label class="uk-form-label" for="email"><?=lang('Auth.email')?></label>
                <div class="uk-form-controls">
                    <input type="email" class="uk-input<?php if (session('errors.email')) : ?> uk-form-danger<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" required>
                </div>
                <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="username"><?=lang('Auth.username')?></label>
                <div class="uk-form-controls">
                    <input type="text" class="uk-input<?php if (session('errors.username')) : ?> uk-form-danger<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="password"><?=lang('Auth.password')?></label>
                <div class="uk-form-controls">
                    <input type="password" name="password" class="uk-input<?php if (session('errors.password')) : ?> uk-form-danger<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                <div class="uk-form-controls">
                    <input type="password" name="pass_confirm" class="uk-input<?php if (session('errors.pass_confirm')) : ?> uk-form-danger<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" required>
                </div>
            </div>
        </div>
        <div class="uk-card-footer">
            <div class="uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary" type="submit"><?=lang('Auth.register')?></button>
            </div>
            <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
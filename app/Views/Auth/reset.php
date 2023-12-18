<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="uk-width-1-1 uk-flex uk-flex-center">
    <?= view('Views/Auth/_message_block') ?>
</div>
<div class="uk-width-1-1 uk-card uk-card-default">
    <form action="<?= url_to('reset-password') ?>" method="post">
        <div class="uk-card-body">
            <?= csrf_field() ?>
            <div class="uk-margin uk-margin-remove-top">
                <label class="uk-form-label" for="token"><?=lang('Auth.token')?></label>
                <div class="uk-form-controls">
                    <input type="text" class="uk-input<?php if (session('errors.token')) : ?> uk-form-danger<?php endif ?>" name="token" placeholder="<?=lang('Auth.token')?>" value="<?= old('token', $token ?? '') ?>" required>
                </div>
                <div class="uk-text-small uk-text-italic uk-text-danger">
                    <?= session('errors.token') ?>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="email"><?=lang('Auth.email')?></label>
                <div class="uk-form-controls">
                    <input type="text" class="uk-input<?php if (session('errors.email')) : ?> uk-form-danger<?php endif ?>" name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" required>
                </div>
                <div class="uk-text-small uk-text-italic uk-text-danger">
                    <?= session('errors.email') ?>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="password"><?=lang('Auth.newPassword')?></label>
                <div class="uk-form-controls">
                    <input type="password" class="uk-input<?php if (session('errors.password')) : ?> uk-form-danger<?php endif ?>" name="password" required>
                </div>
                <div class="uk-text-small uk-text-italic uk-text-danger">
                    <?= session('errors.password') ?>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="pass_confirm"><?=lang('Auth.newPasswordRepeat')?></label>
                <div class="uk-form-controls">
                    <input type="password" class="uk-input<?php if (session('errors.pass_confirm')) : ?> uk-form-danger<?php endif ?>" name="pass_confirm" required>
                </div>
                <div class="uk-text-small uk-text-italic uk-text-danger">
                    <?= session('errors.pass_confirm') ?>
                </div>
            </div>
        </div>
        <div class="uk-card-footer">
            <div class="uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary" type="submit"><?=lang('Auth.resetPassword')?></button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
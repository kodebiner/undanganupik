<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="uk-width-1-1 uk-flex uk-flex-center">
    <?= view('Views/Auth/_message_block') ?>
</div>
<div class="uk-width-1-1 uk-card uk-card-default">
    <div class="uk-card-header">
        <h3 class="uk-text-uppercase uk-text-center"><?=lang('Auth.loginTitle')?></h3>
    </div>
    <form action="<?= url_to('login') ?>" method="post">
        <div class="uk-card-body">
            <?= csrf_field() ?>
            <div class="uk-margin uk-margin-remove-top">
                <?php if ($config->validFields === ['email']): ?>
                    <label class="uk-form-label" for="login"><?=lang('Auth.email')?></label>
                    <div class="uk-form-controls">
                        <input type="email" class="uk-input<?php if (session('errors.login')) : ?> uk-form-danger<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>" value="<?= old('login') ?>" required>
                    </div>
                    <div class="uk-text-small uk-text-italic uk-text-danger">
                        <?= session('errors.login') ?>
                    </div>
                <?php else: ?>
                    <label class="uk-form-label" for="login"><?=lang('Auth.emailOrUsername')?></label>
                    <div class="uk-form-controls">
                        <input type="text" class="uk-input<?php if (session('errors.login')) : ?> uk-form-danger<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>" value="<?= old('login') ?>" required>
                    </div>
                    <div class="uk-text-small uk-text-italic uk-text-danger">
                        <?= session('errors.login') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="password"><?=lang('Auth.password')?></label>
                <div class="uk-form-controls">
                    <input type="password" name="password" class="uk-input  <?php if (session('errors.password')) : ?> uk-form-danger<?php endif ?>" placeholder="<?=lang('Auth.password')?>" required>
                </div>
            </div>
            <?php if ($config->allowRemembering): ?>
                <div class="uk-margin">
                    <label>
                        <input type="checkbox" name="remember" class="uk-checkbox" <?php if (old('remember')) : ?> checked <?php endif ?>> <?=lang('Auth.rememberMe')?>
                    </label>
                </div>
            <?php endif; ?>
        </div>
        <div class="uk-card-footer">
            <div class="uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary" type="submit"><?=lang('Auth.loginTitle')?></button>
            </div>
            <?php if (($config->allowRegistration) || ($config->activeResetter)) : ?>
                <?php if ($config->allowRegistration) : ?>
                    <div class="uk-margin-small"><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></div>
                <?php endif; ?>
                <?php if ($config->activeResetter): ?>
                    <div class="uk-margin-small"><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
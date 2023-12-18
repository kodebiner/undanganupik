<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<div class="uk-width-1-1 uk-flex uk-flex-center">
    <?= view('Views/Auth/_message_block') ?>
</div>
<div class="uk-width-1-1 uk-card uk-card-default">
    <form action="<?= url_to('forgot') ?>" method="post">
        <div class="uk-card-body">
            <p><?=lang('Auth.enterEmailForInstructions')?></p>
            <?= csrf_field() ?>
            <div class="uk-margin uk-margin-remove-top">
                <label class="uk-form-label" for="email"><?=lang('Auth.emailAddress')?></label>
                <div class="uk-form-controls">
                    <input type="email" class="uk-input<?php if (session('errors.email')) : ?> uk-form-danger<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" required>
                </div>
                <div class="uk-text-small uk-text-italic uk-text-danger">
                    <?= session('errors.email') ?>
                </div>
            </div>
        </div>
        <div class="uk-card-footer">
            <div class="uk-flex uk-flex-center">
                <button class="uk-button uk-button-primary" type="submit"><?=lang('Auth.sendInstructions')?></button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav class="uk-width-1-1 uk-flex uk-flex-right">
    <ul class="uk-pagination">
        <?php if ($pager->hasPrevious()) { ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" uk-icon="chevron-double-left"></a>
            </li>
            <li>
                <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" uk-icon="chevron-left"></a>
            </li>
        <?php } ?>

        <?php
        foreach ($pager->links() as $link) {
            if ($link['active']) {
                echo '<li class="uk-active">';
                echo '<span>'.$link['title'].'</span>';
                echo '</li>';
            } else {
                echo '<li>';
                echo '<a href="'.$link['uri'].'">'.$link['title'].'</a>';
                echo '</li>';
            }
        }
        ?>
        
        <?php if ($pager->hasNext()) { ?>
            <li>
                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" uk-icon="chevron-right"></a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" uk-icon="chevron-double-right"></a>
            </li>
        <?php } ?>
    </ul>
</nav>
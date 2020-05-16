<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StoresProduct $storesProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Stores Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="storesProducts form content">
            <?= $this->Form->create($storesProduct) ?>
            <fieldset>
                <legend><?= __('Add Stores Product') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

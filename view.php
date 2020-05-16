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
            <?= $this->Html->link(__('Edit Stores Product'), ['action' => 'edit', $storesProduct->id_products], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stores Product'), ['action' => 'delete', $storesProduct->id_products], ['confirm' => __('Are you sure you want to delete # {0}?', $storesProduct->id_products), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stores Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stores Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="storesProducts view content">
            <h3><?= h($storesProduct->id_products) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Stores') ?></th>
                    <td><?= $this->Number->format($storesProduct->id_stores) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Products') ?></th>
                    <td><?= $this->Number->format($storesProduct->id_products) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

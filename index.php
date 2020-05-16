<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StoresProduct[]|\Cake\Collection\CollectionInterface $storesProducts
 */
?>
<div class="storesProducts index content">
    <?= $this->Html->link(__('New Stores Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Stores Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_stores') ?></th>
                    <th><?= $this->Paginator->sort('id_products') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($storesProducts as $storesProduct): ?>
                <tr>
                    <td><?= $this->Number->format($storesProduct->id_stores) ?></td>
                    <td><?= $this->Number->format($storesProduct->id_products) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $storesProduct->id_products]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $storesProduct->id_products]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $storesProduct->id_products], ['confirm' => __('Are you sure you want to delete # {0}?', $storesProduct->id_products)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

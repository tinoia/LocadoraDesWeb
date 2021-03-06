<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sale'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sales index large-9 medium-8 columns content">
    <h3><?= __('Sales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_sale') ?></th>
                <th><?= $this->Paginator->sort('data_compra') ?></th>
                <th><?= $this->Paginator->sort('total_pagar') ?></th>
                <th><?= $this->Paginator->sort('dvds_id_dvd') ?></th>
                <th><?= $this->Paginator->sort('users_id_user') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= $this->Number->format($sale->id_sale) ?></td>
                <td><?= h($sale->data_compra) ?></td>
                <td><?= $this->Number->format($sale->total_pagar) ?></td>
                <td><?= $this->Number->format($sale->dvds_id_dvd) ?></td>
                <td><?= $this->Number->format($sale->users_id_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sale->id_sale]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->id_sale]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->id_sale], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id_sale)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

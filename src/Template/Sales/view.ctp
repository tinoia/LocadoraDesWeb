<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->id_sale]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->id_sale], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id_sale)]) ?> </li>
        <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sales view large-9 medium-8 columns content">
    <h3><?= h($sale->id_sale) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Sale') ?></th>
            <td><?= $this->Number->format($sale->id_sale) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Pagar') ?></th>
            <td><?= $this->Number->format($sale->total_pagar) ?></td>
        </tr>
        <tr>
            <th><?= __('Dvds Id Dvd') ?></th>
            <td><?= $this->Number->format($sale->dvds_id_dvd) ?></td>
        </tr>
        <tr>
            <th><?= __('Users Id User') ?></th>
            <td><?= $this->Number->format($sale->users_id_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Compra') ?></th>
            <td><?= h($sale->data_compra) ?></tr>
        </tr>
    </table>
</div>

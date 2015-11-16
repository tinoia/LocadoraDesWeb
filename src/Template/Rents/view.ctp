<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rent'), ['action' => 'edit', $rent->id_rent]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rent'), ['action' => 'delete', $rent->id_rent], ['confirm' => __('Are you sure you want to delete # {0}?', $rent->id_rent)]) ?> </li>
        <li><?= $this->Html->link(__('List Rents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rent'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rents view large-9 medium-8 columns content">
    <h3><?= h($rent->id_rent) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Rent') ?></th>
            <td><?= $this->Number->format($rent->id_rent) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Pagar') ?></th>
            <td><?= $this->Number->format($rent->total_pagar) ?></td>
        </tr>
        <tr>
            <th><?= __('Dvds Id Dvd') ?></th>
            <td><?= $this->Number->format($rent->dvds_id_dvd) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Retirada') ?></th>
            <td><?= h($rent->data_retirada) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Devolucao') ?></th>
            <td><?= h($rent->data_devolucao) ?></td>
        </tr>
    </table>
</div>

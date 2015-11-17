<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rent'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rents index large-9 medium-8 columns content">
    <h3><?= __('Rents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_rent') ?></th>
                <th><?= $this->Paginator->sort('data_retirada') ?></th>
                <th><?= $this->Paginator->sort('data_devolucao') ?></th>
                <th><?= $this->Paginator->sort('total_pagar') ?></th>
                <th><?= $this->Paginator->sort('dvds_id_dvd') ?></th>
                <th><?= $this->Paginator->sort('users_id_user') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rents as $rent): ?>
            <tr>
                <td><?= $this->Number->format($rent->id_rent) ?></td>
                <td><?= h($rent->data_retirada) ?></td>
                <td><?= h($rent->data_devolucao) ?></td>
                <td><?= $this->Number->format($rent->total_pagar) ?></td>
                <td><?= $this->Number->format($rent->dvds_id_dvd) ?></td>
                <td><?= $this->Number->format($rent->users_id_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rent->id_rent]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rent->id_rent]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rent->id_rent], ['confirm' => __('Are you sure you want to delete # {0}?', $rent->id_rent)]) ?>
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

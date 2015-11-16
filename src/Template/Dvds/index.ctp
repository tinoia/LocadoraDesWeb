<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dvd'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dvds index large-9 medium-8 columns content">
    <h3><?= __('Dvds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_dvd') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('genero') ?></th>
                <th><?= $this->Paginator->sort('ano') ?></th>
                <th><?= $this->Paginator->sort('duracao') ?></th>
                <th><?= $this->Paginator->sort('disponivel') ?></th>
                <th><?= $this->Paginator->sort('num_copias') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dvds as $dvd): ?>
            <tr>
                <td><?= $this->Number->format($dvd->id_dvd) ?></td>
                <td><?= h($dvd->nome) ?></td>
                <td><?= h($dvd->genero) ?></td>
                <td><?= h($dvd->ano) ?></td>
                <td><?= $this->Number->format($dvd->duracao) ?></td>
                <td><?= h($dvd->disponivel) ?></td>
                <td><?= $this->Number->format($dvd->num_copias) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dvd->id_dvd]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dvd->id_dvd]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dvd->id_dvd], ['confirm' => __('Are you sure you want to delete # {0}?', $dvd->id_dvd)]) ?>
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

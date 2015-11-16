<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dvd'), ['action' => 'edit', $dvd->id_dvd]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dvd'), ['action' => 'delete', $dvd->id_dvd], ['confirm' => __('Are you sure you want to delete # {0}?', $dvd->id_dvd)]) ?> </li>
        <li><?= $this->Html->link(__('List Dvds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dvd'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dvds view large-9 medium-8 columns content">
    <h3><?= h($dvd->id_dvd) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($dvd->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Genero') ?></th>
            <td><?= h($dvd->genero) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Dvd') ?></th>
            <td><?= $this->Number->format($dvd->id_dvd) ?></td>
        </tr>
        <tr>
            <th><?= __('Duracao') ?></th>
            <td><?= $this->Number->format($dvd->duracao) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Copias') ?></th>
            <td><?= $this->Number->format($dvd->num_copias) ?></td>
        </tr>
        <tr>
            <th><?= __('Preco') ?></th>
            <td><?= $this->Number->format($dvd->preco) ?></td>
        </tr>
        <tr>
            <th><?= __('Ano') ?></th>
            <td><?= h($dvd->ano) ?></td>
        </tr>
        <tr>
            <th><?= __('Disponivel') ?></th>
            <td><?= $dvd->disponivel ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

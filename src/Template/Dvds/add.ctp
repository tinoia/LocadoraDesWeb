<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dvds'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dvds form large-9 medium-8 columns content">
    <?= $this->Form->create($dvd) ?>
    <fieldset>
        <legend><?= __('Add Dvd') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('genero');
            echo $this->Form->input('ano');
            echo $this->Form->input('duracao');
            echo $this->Form->input('disponivel');
            echo $this->Form->input('num_copias');
            echo $this->Form->input('preco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

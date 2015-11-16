<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rent->id_rent],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rent->id_rent)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rents form large-9 medium-8 columns content">
    <?= $this->Form->create($rent) ?>
    <fieldset>
        <legend><?= __('Edit Rent') ?></legend>
        <?php
            echo $this->Form->input('data_retirada');
            echo $this->Form->input('data_devolucao');
            echo $this->Form->input('total_pagar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

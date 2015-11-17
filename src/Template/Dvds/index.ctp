<div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo __('DVDs'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('ID'); ?></th>
                        <th><?php echo $this->Paginator->sort('Nome'); ?></th>
                        <th><?php echo $this->Paginator->sort('Genero'); ?></th>
                        <th><?php echo $this->Paginator->sort('Ano'); ?></th>
                        <th><?php echo $this->Paginator->sort('Duração'); ?></th>
                        <th><?php echo $this->Paginator->sort('Disponivel'); ?></th>
                        <th><?php echo $this->Paginator->sort('Preço'); ?></th>
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
                        <?= $this->Html->link(__('Comprar'), ['action' => 'view', $dvd->id_dvd]) ?>
                      
                   </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<div class="panel-footer">
    <a href="/Locadora/dvds/add" class="btn btn-info" role="button">Adicionar Novo</a>
    <a href="/Locadora/pages/display/home" class="btn btn-info" role="button">Voltar</a>
</div>

<div>   



</div>  

</div>
</div>




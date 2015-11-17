<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"><?= h($dvd->nome) ?></h1>
    </div>
    <!--End Page Header -->
</div>



<div class="panel panel-primary">
    <div class="panel-heading">
        <?= h($dvd->id_dvd) ?>
    </div>
    <div class="panel-body">
            <label class="control-label"> ID <?= $this->Number->format($dvd->id_dvd) ?> </label><br>
            <label class="control-label"> Genero: <?= h($dvd->genero) ?> </label><br>
            <label class="control-label"> Duração: <?= $this->Number->format($dvd->duracao) ?> </label><br>
            <label class="control-label"> Numero de copias: <?= $this->Number->format($dvd->num_copias) ?> </label><br>
            <label class="control-label"> Preco: <?= $this->Number->format($dvd->preco) ?> </label><br>
            <label class="control-label"> Ano: <?= h($dvd->ano) ?> </label><br>
            <label class="control-label"> Disponível: <?= $dvd->disponivel ? __('Sim') : __('Não'); ?> </label><br>
            <div class="panel-footer">
                    <a href="http://localhost/Locadora/sales/add" class="btn btn-info" role="button">Comprar</a>
                    <a href="http://localhost/Locadora/rents/add" class="btn btn-info" role="button">Reservar</a>
                    <a href="http://localhost/Locadora/dvds" class="btn btn-info" role="button">Voltar</a>
                    <?php echo $this->Form->end(); ?> 
                </div>
    </div>
</div>



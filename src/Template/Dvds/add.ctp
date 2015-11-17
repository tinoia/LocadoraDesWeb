<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de DVD</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Entre com os dados para cadastro:
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <?php echo $this->Form->create('Dvds'); ?>
                <div class="form-group">
                    <?php echo $this->Form->input('nome',array('label'=>'Nome','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('genero',array('label'=>'Genero','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php   echo $this->Form->input('ano',array('label'=>'Ano','class'=>'form-control','type' => 'date')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('duracao',array('label'=>'Duração','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('num_copias',array('label'=>'Numero de copias','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('preco',array('label'=>'Preço','class'=>'form-control')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->label('disponivel');?>
                    <?php  echo $this->Form->checkbox('disponivel'); ?>
                </div>


                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-success">Limpar</button>
                    <a href="http://localhost/Locadora/dvds" class="btn btn-info" role="button">Voltar</a>
                    <?php echo $this->Form->end(); ?> 
                </div>
            </div>
        </div>
    </div>
</div>







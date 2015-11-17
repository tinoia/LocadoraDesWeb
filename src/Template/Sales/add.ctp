<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Venda de DVDs</h1>
    </div>
    <!--End Page Header -->
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Entre com os dados para a venda:
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <?php echo $this->Form->create('Sales'); ?>
                <div class="form-group">
                    <?php   echo $this->Form->input('data_compra',array('label'=>'Data','class'=>'form-control','type' => 'date')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('total_pagar',array('label'=>'Valor','class'=>'form-control')); ?>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Efetuar Compra</button>
                    <button type="reset" class="btn btn-success">Limpar</button>
                    <a href="http://localhost/Locadora/dvds" class="btn btn-info" role="button">Voltar</a>
                    <?php echo $this->Form->end(); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
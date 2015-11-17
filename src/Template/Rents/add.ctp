<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Reserva de DVDs</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Entre com os dados para efetuar uma reserva:
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <?php echo $this->Form->create('Rents'); ?>
                <div class="form-group">
                    <?php   echo $this->Form->input('data_retirada',array('label'=>'Data de Retirada','class'=>'form-control','type' => 'date')); ?>
                </div>
                <div class="form-group">
                    <?php   echo $this->Form->input('data_devolucao',array('label'=>'Data de Devolução','class'=>'form-control','type' => 'date')); ?>
                </div>
                <div class="form-group">
                    <?php  echo $this->Form->input('total_pagar',array('label'=>'Total a Pagar','class'=>'form-control')); ?>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary">Efetuar reserva</button>
                    <button type="reset" class="btn btn-success">Limpar</button>
                    <a href="http://localhost/Locadora/rents" class="btn btn-info" role="button">Voltar</a>
                    <?php echo $this->Form->end(); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'Locadora de DVDs';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset("UTF-8") ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-responsive.css') ?>
</head>
<body>

    <!--    CORPO DO SITE   -->
    <div class="container">
        <!-- CABEÇALHO -->
        <div >
            <header class="row">
                <figure class="col-md-2">
                    <img src="img/logoVL.png" class="img-responsive img-circle" alt="logo da locadora">
                </figure>
                <hgroup class="col-md-8">
                    <h1> Video Locadora </h1>
                    <h4> Locadora de DVDs </h4>
                </hgroup>
                <?php 
                $session = $this->request->session();
                $usuarioLogado = $session->read('Auth.User.name');
                echo 'Você está logado como: '.$usuarioLogado;
                
                ?>
                <a href=<?php echo $this->Url->build('/Users/logout') ?>><i class="fa fa-sign-out fa-fw"></i>Logout</a>
            </header>
        </div>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer class="row">
            <p> Developed by Tiago Mohnschmidt & Christian Gebert - 2015 </p>
        </footer>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>

</html>

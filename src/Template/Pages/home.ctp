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
                <form class="form-horizontal col-md-2">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputPassword">Senha</label>
                    <div class="controls">
                      <input type="password" id="inputPassword" placeholder="Senha">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <label class="checkbox">
                        <input type="checkbox"> Lembre-se de mim
                      </label>
                      <button type="" class="btn">Cadastrar</button>
                      <button type="submit" class="btn">Entrar</button>
                    </div>
                  </div>
                </form>
            </header>
        </div>
        <!-- CONTEÚDO PRINCIPAL -->
        <div class="row container-fuid">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <p class="navbar-brand">MENU</p>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filmes<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Ação</a></li>
                        <li><a href="#">Drama</a></li>
                        <li><a href="#">Ficção</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="src/contato.php">Contato</a></li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Pesquisar Filmes">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                  </form>
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div role="main" class="col-md-12">
                <h1> Conteúdo Principal do HOME</h1>
                <p> A seção principal de HOME apresentará a lista de filmes disponibilizados pela locadora!</p>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                </br>
                
            <ul class="pager">
                <li><a href="#">Anterior</a></li>
                <li><a href="#">Próximo</a></li>
            </ul>
            </div>
        </div>
        <footer class="row">
            <p> Developed by Tiago Mohnschmidt & Christian Gebert - 2015 </p>
        </footer>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

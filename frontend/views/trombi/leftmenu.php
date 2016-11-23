<?php
use yii\helpers\Html; 
?>
<aside class="main-sidebar control-sidebar control-sidebar-dark">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>O</b>H</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Oise</b>Habitat</span>
            </a>

        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Nom / Direction /N° poste ...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">OISE HABITAT</li>

      <!--  menu 1 dg-->
      <li class="treeview">
        <a href="../index2"><i class="fa fa-dashboard"></i> <span>Direction Générale</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="fiches.php"><i class="fa fa-circle-o"></i> Communication</a></li>
          <li><?= Html::a('<i class="fa fa-circle-o"></i> Communication</a>', ['fiches']) ?></li>
          <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Qualité de service</a></li>
        </ul>
      </li>
<!--  menu 1 dg-->
      <li class="treeview">
          <li>
             <?= Html::a('<a href="../index2"><i class="fa fa-dashboard"></i> <span>Direction Générale</span>
                       <span class="pull-right-container">
                       <i class="fa fa-angle-left pull-right"></i>
                       </span>
                       </a>') ?>
          </li>
          <ul class="treeview-menu">
              <li><?= Html::a('<i class="fa fa-circle-o"></i> Communication</a>', ['fiches']) ?></li>
              <li><?= Html::a('<i class="fa fa-circle-o"></i> Qualité de service</a>', ['fiches']) ?></li>
          </ul>
      </li>

      
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>CNIL</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Comment ça marche</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Autre</span></a></li>
    </ul>
    </ul>
    </li>

  </ul>
</li>
</section>
</aside>
<?php require'head.php'; 
      require'config/conexao.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Dashboard<small>Informações Complementares</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Conteudo -->

            <!-- Small boxes (Stat box) -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">

                <?php 
                $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM usuario");
                $row = $result->fetch_assoc();
                $result->close();
                ?>

              <h3><?php echo $row['qtd']; ?></h3>
              <p>USUÁRIOS CADASTRADOS</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="usuarios.php" class="small-box-footer">Mais informações</a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">

                <?php 
                $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM advogado");
                $row = $result->fetch_assoc();
                $result->close();
                ?>

              <h3><?php echo $row['qtd']; ?></h3>
              <p>ADVOGADOS CADASTRADOS</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="advogado.php" class="small-box-footer">Mais informações</a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">

                <?php 
                $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM documento_detento");
                $row = $result->fetch_assoc();
                $result->close();
                ?>

              <h3><?php echo $row['qtd']; ?></h3>
              <p>DOCUMENTOS CADASTRADOS</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-text"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações</a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">

                <?php 
                $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM detento");
                $row = $result->fetch_assoc();
                $result->close();
                ?>

              <h3><?php echo $row['qtd']; ?></h3>
              <p>DETENTOS CADASTRADOS</p>
            </div>
            <div class="icon">
              <i class="fa fa-lock"></i>
            </div>
            <a href="detentos.php" class="small-box-footer">Mais informações</a>
          </div>
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-unlock"></i></span>
            <?php 
            $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM detento WHERE regime = 'aberto'");
            $row = $result->fetch_assoc();
            $result->close();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">REGIME ABERTO</span>
              <span class="info-box-number"><?php echo $row['qtd']; ?><small> DETENTOS</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-unlock-alt"></i></span>
            <?php 
            $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM detento WHERE regime = 's_aberto'");
            $row = $result->fetch_assoc();
            $result->close();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">REGIME SEMIABERTO</span>
              <span class="info-box-number"><?php echo $row['qtd']; ?><small> DETENTOS</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-lock"></i></span>
            <?php 
            $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM detento WHERE regime = 'fechado'");
            $row = $result->fetch_assoc();
            $result->close();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">REGIME FECHADO</span>
              <span class="info-box-number"><?php echo $row['qtd']; ?><small> DETENTOS</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-thumbs-down"></i></span>
            <?php 
            $result = $mysqli->query("SELECT COUNT(*) AS qtd FROM detento WHERE status = '0'");
            $row = $result->fetch_assoc();
            $result->close();
            ?>
            <div class="info-box-content">
              <span class="info-box-text">INATIVO</span>
              <span class="info-box-number"><?php echo $row['qtd']; ?><small> DETENTOS</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require 'footer.php'; ?>
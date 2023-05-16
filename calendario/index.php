<?php include '../../web/seguranca.php';

$title = "AdminPFC - Calendários Acadêmicos";

include '../head.php';
?>

<body id="corpo" class="hold-transition skin-black sidebar-mini fixed">

    <div class="wrapper">

    <?php include '../menu.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <?php if(!isset($p)): ?>
                    <a href="<?php echo $root_html ?>sistema/" class="btn btn-default"><i class="fa fa-arrow-left"></i>&ensp;Voltar</a>                

                <?php endif; ?>
              <ol class="breadcrumb">
                <li><a href="<?php echo $root_html ?>sistema/"><i class="fa fa-dashboard"></i> Home</a></li>
                <?php if(!isset($p)): ?>
                <li class="active">Calendários Acadêmicos</li>     
                <?php endif; ?>           
              </ol> 
            </section>
            <br>  <br>  

             <div class="col-md-9">
                  <!-- Line chart -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <i class="fa fa-paperclip text-danger"></i>

                      <h1 class="box-title">Calendários 2023</h1>

                    </div>
                    <div class="box-body">
						
              <ul>

							<li>27/02/2023</li>
							<ul>
              <a href="https://www.futurocientista.net/sistema/calendario/Calendario_PFC_2023.pdf" type="application/pdf" data-toggle="tooltip">			
								<li><i class='fa fa-file-pdf-o'></i> Calendário Acadêmico 2022/2023.</li> 
                </a>
							</ul>
							
              <li>27/02/2023</li>
							<ul>
              <a href="https://www.futurocientista.net/sistema/calendario/Cronograma_ERFC_2022.pdf" type="application/pdf" data-toggle="tooltip">			
								<li><i class='fa fa-file-pdf-o'></i> ERFC - Encontro Regional Futuro Cientista 2022.</li> 
                </a>
							</ul>
											
					
						</ul>

                    </div>
                    <!-- /.box-body-->
                        
                  </div>
                  <!-- /.box -->

                </div>
                <!-- /.col -->




</div>




    <?php include '../footer.php'; ?>
</div>

<script>

</script>
</body> 
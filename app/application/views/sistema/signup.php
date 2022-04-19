<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $this->config->item('app_name'); ?> v<?php echo $this->config->item('app_version'); ?></title>

        <link href="<?php echo base_url();?>elements/template/css/style.default.css" rel="stylesheet">
        <link rel="icon" type="imagem/png" href="<?php echo base_url();?>img/icon.png">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signup">
                <div class="panel-body">
                <div class="logo text-center">
                    <h4 class="text-center mb5"><a href="#"><b> <?php echo $this->config->item('app_name'); ?> </b><?php echo $this->config->item('app_version'); ?></a></h4>

                </div>
                    <br />
                    <h4 class="text-center mb5">Criar uma nova conta</h4>
                   <!-- <p class="text-center">Please enter your credentials below</p> -->
                   <?php echo $custom_error; ?>

                   <?php if($this->session->flashdata('error') != null){?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('error');?>
                    </div>
                <?php }?>

                <?php if($this->session->flashdata('success') != null){?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('success');?>
                    </div>
                <?php }?>

                    <div class="mb30"></div>
                    
                    <form action="<?php echo current_url(); ?>" id="formUsuario" enctype="multipart/form-data" method="post" onsubmit="return checkForm(this);" class="form-horizontal" >
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control" name="nome" value="<?php echo set_value('nome'); ?>" placeholder="Nome">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control" name="sobrenome" value="<?php echo set_value('sobrenome'); ?>" placeholder="Sobrenome">
                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    
                                    <input type="text" name="cpf"  class="form-control" id="cpf" placeholder="CPF">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                                    <input type="text" class="form-control" name="codigo" placeholder="Código Verificador">
                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input type="text" name="telefone" class="form-control cel-sp-mask" id="celular" placeholder="Ex.: (00) 00000-0000">

                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                  <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirma Senha"> -->
                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="ckbox ckbox-primary mt5">
                                    <input type="checkbox" id="agree" name="terms" value="1" id="terms">
                                    <label for="agree">I agree with <a href="terms">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success">Criar nova conta <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>
                    </form>
                    
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="login" class="btn btn-primary btn-block">Já é um membro? Entrar</a>
                </div><!-- panel-footer -->
            </div><!-- panel -->
            
        </section>


        <script src="<?php echo base_url();?>elements/template/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>elements/template/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>elements/template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/pace.min.js"></script>
<script src="<?php echo base_url();?>elements/template/js/retina.min.js"></script>
<script src="<?php echo base_url();?>elements/template/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>elements/template/js/custom.js"></script>



<script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
    $("#cpf").mask("000.000.000-00");


</script>
<script>

  function checkForm(form)
  {
    
    if(!form.terms.checked) {
      alert("Por favor, indique que você aceita os Termos e Condições");
      form.terms.focus();
      return false;
    }
    return true;
  }



</script>



    </body>
</html>

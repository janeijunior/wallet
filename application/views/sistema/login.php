<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Access v1.0</title>

    <link href="<?php echo base_url();?>template/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin">


<section>

    <div class="panel panel-signin">
        <div class="panel-body">

            <div class="logo text-center">
                <h4 class="text-center mb5"><a href="#"><b>Control Access </b>1.0</a></h4>

            </div>




            <div class="mb30"></div>

            <form role="form" id="formLogin" method="post" action="<?php echo base_url()?>index.php/sistema/verificarLogin">
                <?php if($this->session->flashdata('error') != null){?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('error');?>
                    </div>
                <?php }?>
                <div class="input-group mb15">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Username">
                </div><!-- input-group -->
                <div class="input-group mb15">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password"  name="senha" class="form-control" placeholder="Password">
                </div><!-- input-group -->

                <div class="clearfix">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" id="rememberMe" value="1">
                            <label for="rememberMe">Remember Me</label>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
                    </div>
                </div>
            </form>

        </div><!-- panel-body -->

    </div><!-- panel -->

</section>


<script src="<?php echo base_url();?>elements/template/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>template/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>template/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/pace.min.js"></script>
<script src="<?php echo base_url();?>template/js/retina.min.js"></script>
<script src="<?php echo base_url();?>template/js/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>template/js/custom.js"></script>


<script type="text/javascript">
    $(document).ready(function(){

        $('#email').focus();
        $("#formLogin").validate({
            rules :{
                email: { required: true, email: true},
                senha: { required: true}
            },
            messages:{
                email: { required: 'Campo Requerido.', email: 'Insira Email válido'},
                senha: {required: 'Campo Requerido.'}
            },
            submitHandler: function( form ){
                var dados = $( form ).serialize();


                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>index.php/sistema/verificarLogin?ajax=true",
                    data: dados,
                    dataType: 'json',
                    success: function(data)
                    {
                        if(data.result == true){
                            window.location.href = "<?php echo base_url();?>index.php/sistema/";
                        }
                        else{
                            $('#call-modal').trigger('click');
                        }
                    }
                });

                return false;
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });

    });

</script>



<a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>

<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Control Access | 1.0</</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
            <div class="modal-body">

                <h5 style="text-align: center">Os dados de acesso estão incorretos, por favor tente novamente!</h5>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>
            </div>
        </div>
    </div>

</div>




</body>
</html>

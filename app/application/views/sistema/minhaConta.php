<!--
/**
 * Created by:
 * User:    Janei araujo de Moura Junior
 * Email:   janei.junior@gmail.com
 * Date: 15/10/2018
 * Time: 00:47
 */
-->

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Minha conta
            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- left column -->
                    <div class="col-lg-6">
                        <!-- general form elements -->
                        <div class="box ">
                            <div class="box-header ">

                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <div align="center">
                                    <img align="center" width="60%" height="60%" src="<?php if($usuario->url_logo == null){$no_img = 'http://10.0.0.113/dev_source/assets/uploads/b26a1da5963669b44710a6fb66a70b39.png'; $url_img ='';} else {$url_img = $usuario->url_logo; $no_img = ''; } ?> <?php echo $url_img; ?><?php echo $no_img; ?>"  >
                                    <br>
                                </div>
                                <br>
                                <a href="#modal-alterarImgperfil" data-toggle="modal" role="button" class="btn btn-primary">Alterar Foto</a>
                            </div>
                        </div>
                        <!-- /.box -->

                        <!-- general fo m elements -->
                        <div class="box ">
                            <div class="box-header with-border">
                                <h3 class="box-title">Assinatura</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">

                                <div align="center">
                                    <img align="center" width="80%" src="<?php if($usuario->url_ass == null){$no_img = 'http://10.0.0.113/dev_source/assets/uploads/b26a1da5963669b44710a6fb66a70b39.png'; $url_img ='';} else {$url_img = $usuario->url_ass; $no_img = ''; } ?> <?php echo $url_img; ?><?php echo $no_img; ?>"  >
                                </div>
                                <br>
                                <a href="#modal-alterarAssinatura" data-toggle="modal" role="button" class="btn btn-primary">Alterar Assinatura</a>
                            </div>
                        </div>


                        <!-- /.box -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Senha</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <fieldset disabled>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa  fa-unlock"></i></span>
                                    <input type="password" name="senha"  class="form-control" placeholder="Senha">
                                </div>
                                </fieldset>
                                <br>
                                <a href="#modal-alterarSenha" data-toggle="modal" role="button" class="btn btn-primary">Alterar Senha</a>

                            </div>



                        </div>

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Informações pessoais</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">
                                <fieldset disabled>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                        <input type="text" name="nome" id="disabledInput" class="form-control" value="<?php echo $usuario->nome; ?>" >
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="rg" class="form-control" placeholder="<?php echo  $usuario->rg; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                        <input type="text" name="cpf" class="form-control" placeholder="<?php echo  $usuario->cpf; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email" id="disabledInput" class="form-control" placeholder="<?php echo  $usuario->email; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-fax"></i></span>
                                        <input type="text" name="telefone" id="disabledInput" class="form-control  phone-mask" placeholder="<?php echo  $usuario->telefone; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="celular"  id="disabledInput" class="form-control" placeholder="<?php echo  $usuario->celular; ?>">
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="rua" class="form-control" placeholder="<?php echo  $usuario->rua; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="numero" class="form-control" placeholder="<?php echo  $usuario->numero; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="bairro" class="form-control" placeholder="<?php echo  $usuario->bairro; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="cidade" class="form-control" placeholder="<?php echo  $usuario->cidade; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="estado" class="form-control" placeholder="<?php echo  $usuario->estado; ?>">
                                    </div>
                                    <br>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="nascido_em" class="form-control pull-right" placeholder="<?php echo  $usuario->nascido_em; ?>"  >
                                    </div>
                                    <span class="help-block">Permissões que o colaborador irá assumir dentro do sistema.</span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" name=""  id="disabledInput" class="form-control" placeholder="<?php echo  $usuario->permissao; ?>">
                                    </div>
                                    <br>
                                </fieldset>

                                <a href="#modal-alterarDados" data-toggle="modal" role="button" class="btn btn-primary">Alterar Dados</a>
                                <br>
                            </div>



                        </div>



                    </div>
                    <!--/.col (right) -->

                    <div class="col-md-6">
                        <a href="<?php echo base_url() ?>index.php/usuarios" class="btn btn-info"> <i class="icon-plus icon-white"> </i> Voltar</a>


                    </div>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- modal-alterarImgperfil-->
<div class="modal fade" id="modal-alterarImgperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="<?php echo base_url(); ?>index.php/sistema/editarImgperfil" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EASY - Alterar Assinatura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="control-group">

                        <div class="controls">
                            <input type="file" name="userfile" value="" />
                            <input id="nome" type="hidden" name="id" value="<?php echo $usuario->idUsuarios; ?>"  />
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- modal-alterarAssinatura-->
<div class="modal fade" id="modal-alterarAssinatura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="<?php echo base_url(); ?>index.php/sistema/editarAssinatura" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EASY - Alterar Assinatura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="control-group">

                        <div class="controls">
                            <input type="file" name="userfile" value="" />
                            <input id="nome" type="hidden" name="id" value="<?php echo $usuario->idUsuarios; ?>"  />
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- modal-alterarSenha-->
<div class="modal fade" id="modal-alterarSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="formSenha" action="<?php echo base_url();?>index.php/sistema/alterarSenha" method="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EASY - Alterar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Alterar Senha</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <div class="box-body">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-unlock"></i></span>
                                <input type="password" id="oldSenha" name="oldSenha"  class="form-control" placeholder="Senha Atual">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-unlock"></i></span>
                                <input type="password" id="novaSenha" name="novaSenha"  class="form-control" placeholder="Nova Senha">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-unlock"></i></span>
                                <input type="password" name="confirmarSenha"   class="form-control" placeholder="Repita Nova Senha">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- modal-alterarDados-->
<div class="modal fade" id="modal-alterarDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="<?php echo base_url(); ?>index.php/sistema/editarUsuario" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EASY - Alterar Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Informações pessoais</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <div class="box-body">

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                        <input type="text" name="nome" id="disabledInput" class="form-control" placeholder="" value="<?php echo $usuario->nome; ?>" >
                                        <input id="nome" type="hidden" name="id" value="<?php echo $usuario->idUsuarios; ?>"  />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="rg" class="form-control" placeholder="" value="<?php echo  $usuario->rg; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                        <input type="text" name="cpf" class="form-control cpf-mask" id="cpf" placeholder="Ex.: 000.000.000-00" value="<?php echo  $usuario->cpf; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa  fa-fax"></i></span>
                                        <input type="text" name="telefone" id="telefone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" value="<?php echo  $usuario->telefone; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="celular"  id="celular" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000" value="<?php echo  $usuario->celular; ?>">
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="rua" class="form-control"  placeholder="" value="<?php echo  $usuario->rua; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="numero" class="form-control"  placeholder="" value="<?php echo  $usuario->numero; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="bairro" class="form-control"  placeholder="" value="<?php echo  $usuario->bairro; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="cidade" class="form-control"  placeholder="" value="<?php echo  $usuario->cidade; ?>">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                        <input type="text" name="estado" class="form-control"  placeholder="" value="<?php echo  $usuario->estado; ?>">
                                    </div>
                                    <br>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="nascido_em" class="form-control pull-right"  placeholder="" value="<?php echo  $usuario->nascido_em; ?>" >
                                    </div>




                            </div>



                        </div>






                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    <button class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#formSenha').validate({
            rules :{
                oldSenha: {required: true},
                novaSenha: { required: true},
                confirmarSenha: { equalTo: "#novaSenha"}
            },
            messages:{
                oldSenha: {required: 'Campo Requerido'},
                novaSenha: { required: 'Campo Requerido.'},
                confirmarSenha: {equalTo: 'As senhas não combinam.'}
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


<script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
    $("#cpf").mask("000.000.000-00");


</script>
<script type="text/javascript">
    $(document).ready(function(){


        $(document).on('click', 'a', function(event) {

            var motores = $(this).attr('motores');
            $('#id').val(motores);

        });

    });

</script>




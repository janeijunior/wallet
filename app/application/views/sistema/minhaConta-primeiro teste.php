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
                                    <img align="center" src="<?php if($this->session->userdata('url_logo') == null){$no_img = 'http://10.0.0.113/dev_source/assets/uploads/6fc78a7fdcd8f3e4b0e165d0c75f93fd.png'; $url_img ='';} else {$url_img = $this->session->userdata('url_logo'); $no_img = ''; } ?> <?php echo $url_img; ?><?php echo $no_img; ?>" class="img-circle" alt="User Image">
                                    <br>
                                </div>
                                <a href="#modalLogo" data-toggle="modal" role="button" class="btn btn-primary">Alterar Foto</a>
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
                                    <img align="center" width="80%" src="<?php if($usuario->url_ass == null){$no_img = 'http://10.0.0.113/dev_source/assets/uploads/6fc78a7fdcd8f3e4b0e165d0c75f93fd.png'; $url_img ='';} else {$url_img = $usuario->url_ass; $no_img = ''; } ?> <?php echo $url_img; ?><?php echo $no_img; ?>"  >
                                </div>
                                <br>
                                <a href="#modal-alterarAssinatura" data-toggle="modal" role="button" class="btn btn-primary">Alterar Assinatura</a>
                            </div>
                        </div>
                        <!-- /.box -->

                        <!-- /.box -->

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
                                    <input type="text" name="nome" id="disabledInput" class="form-control" value="<?php echo $usuario->nome?>" >
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="rg" class="form-control" placeholder="<?php echo $usuario->rg?>">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                    <input type="text" name="cpf" class="form-control" placeholder="<?php echo $usuario->cpf?>">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" id="disabledInput" class="form-control" placeholder="<?php echo $usuario->email?>">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa  fa-fax"></i></span>
                                    <input type="text" name="telefone" id="disabledInput" class="form-control" placeholder="<?php echo $usuario->telefone?>">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="celular"  id="disabledInput" class="form-control" placeholder="<?php echo $usuario->celular?>">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                    <input type="text" name="rua" class="form-control" placeholder="Rua">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                    <input type="text" name="numero" class="form-control" placeholder="Numero">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                    <input type="text" name="bairro" class="form-control" placeholder="Bairro">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-o"></i></span>
                                    <input type="text" name="estado" class="form-control" placeholder="Estado">
                                </div>
                                <br>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="nascido_em" class="form-control pull-right" placeholder="Data de nascimento"   id="datepicker">
                                </div>
                                <span class="help-block">Permissões que o colaborador irá assumir dentro do sistema.</span>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="text" name=""  id="disabledInput" class="form-control" placeholder="<?php echo $usuario->permissao; ?>">
                                </div>
                                <br>
                                </fieldset>

                                <a href="#modalLogo" data-toggle="modal" role="button" class="btn btn-primary">Alterar Dados</a>
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
                    <div class="span12 alert alert-info">Selecione uma nova imagem da logomarca. Tamanho indicado (130 X 130).</div>
                    <div class="control-group">
                        <label for="logo" class="control-label"><span class="required">Logomarca*</span></label>
                        <div class="controls">
                            <input type="file" name="userfile" value="" />
                            <input id="nome" type="hidden" name="id" value="<?php echo $dados[0]->id; ?>"  />
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

<script type="text/javascript">
    $(document).ready(function(){


        $(document).on('click', 'a', function(event) {

            var motores = $(this).attr('motores');
            $('#id').val(motores);

        });

    });

</script>





<?php if(!isset($dados) || $dados == null) {?>


<?php } else { ?>
    <!--
        /******************************************
         * Created by PhpStorm.                   *
         * User:  Janei Araujo de Moura Junior    *
         * Email: jaraujo.php@gmail.com           *
         * Function:  Web Developer               *
         * Date:  15/10/2018                      *
         * Time:  00:47                           *
         * Copyright © 2018 All rights reserved.  *
         ******************************************/
-->

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                    Dados do Emitente
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-box">
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="icon-align-justify"></i>
                                    </span>
                                </div>
                                <div class="widget-content ">
                                    <div class="alert alert-info">Os dados abaixo serão utilizados no cabeçalho das telas de impressão.</div>
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td style="width: 20%"><img style="width: 100%" src="<?php if($dados[0]->url_logo == null){$no_img = 'https://crivoeditorial.com.br/wp-content/uploads/2016/07/no-image.jpg'; $url_img ='';} else {$url_img = $dados[0]->url_logo; $no_img = ''; } ?> <?php echo $url_img; ?><?php echo $no_img; ?>"></td>
                                            <td> <span style="font-size: 20px; "> <?php echo $dados[0]->nome; ?> </span> </br><span><?php echo $dados[0]->cnpj; ?> </br> <?php echo $dados[0]->rua.', nº:'.$dados[0]->numero.', '.$dados[0]->bairro.' - '.$dados[0]->cidade.' - '.$dados[0]->uf; ?> </span> </br> <span> E-mail: <?php echo $dados[0]->email.' - Fone: '.$dados[0]->telefone; ?></span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <a href="#modal-alterarDados" data-toggle="modal" role="button" class="btn btn-success">Alterar Dados</a>
                                    <a href="#modal-alterarLogomarca" data-toggle="modal" role="button" class="btn btn-success">Alterar Logo</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

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

    <!-- modal-alterarDados -->
    <div class="modal fade" id="modal-alterarDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="<?php echo base_url(); ?>index.php/sistema/editarEmitente" id="formAlterar" enctype="multipart/form-data" method="post" class="form-horizontal" >

      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Control Access - Alterar Logomarca</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="box-body">

                          <div class="box-body">


                              <div class="form-group">
                                  <label for="nome" >Razão Social<span class="required">*</span></label>
                                  <div class="controls">
                                      <input class="form-control" id="nome" type="text" name="nome" value="<?php echo $dados[0]->nome; ?>"  />
                                      <input id="nome" type="hidden" name="id" value="<?php echo $dados[0]->id; ?>"  />
                                  </div>


                              </div>
                              <div class="form-group">
                                  <label for="cnpj" ><span class="required">CNPJ*</span></label>
                                  <div class="controls">
                                      <input  class="form-control"  type="text" name="cnpj" value="<?php echo $dados[0]->cnpj; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">IE*</span></label>
                                  <div class="controls">
                                      <input class="form-control" type="text" name="ie" value="<?php echo $dados[0]->ie; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">Logradouro*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="logradouro" value="<?php echo $dados[0]->rua; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">Número*</span></label>
                                  <div class="controls">
                                      <input class="form-control"  type="text" name="numero" value="<?php echo $dados[0]->numero; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">Bairro*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="bairro" value="<?php echo $dados[0]->bairro; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">Cidade*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="cidade" value="<?php echo $dados[0]->cidade; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">UF*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="uf" value="<?php echo $dados[0]->uf; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">Telefone*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="telefone" value="<?php echo $dados[0]->telefone; ?>"  />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="descricao"><span class="required">E-mail*</span></label>
                                  <div class="controls">
                                      <input  class="form-control" type="text" name="email" value="<?php echo $dados[0]->email; ?>" />
                                  </div>
                              </div>


                          </div>
                          <!-- /.box-body -->






              </div>
              <div class="modal-footer">
                  <button class="btn btn-success">Salvar</button>
                  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>

              </div>
          </div>
      </div>
  </form>
</div>
     <!-- modal-alterarLogo -->
    <div class="modal fade" id="modal-alterarLogomarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?php echo base_url(); ?>index.php/sistema/editarLogo" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Control Access - Alterar Logomarca</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="box-body">
                            <div class="span12 alert alert-info">Selecione uma nova imagem da logomarca. Tamanho indicado (130 X 130).</div>
                            <br>
                            <div class="input-group">
                                <label for="exampleInputFile">Logomarca*</label>
                                <input type="file" name="userfile" value="" />
                                <input id="nome" type="hidden" name="id" value="<?php echo $dados[0]->id; ?>"  />
                                <p class="help-block"></p>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Salvar</button>
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>

                    </div>
                </div>
            </div>
        </form>
    </div>

<?php } ?>


<script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>
<script type="text/javascript">
    
$(document).ready(function(){

    $("#formLogo").validate({
      rules:{
         userfile: {required:true}
      },
      messages:{
         userfile: {required: 'Campo Requerido.'}
      },

        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
            $(element).parents('.control-group').removeClass('success');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
   });


    $("#formCadastrar").validate({
      rules:{
         userfile: {required:true},
         nome: {required:true},
         cnpj: {required:true},
         ie: {required:true},
         logradouro: {required:true},
         numero: {required:true},
         bairro: {required:true},
         cidade: {required:true},
         uf: {required:true},
         telefone: {required:true},
         email: {required:true}
      },
      messages:{
         userfile: {required: 'Campo Requerido.'},
         nome: {required: 'Campo Requerido.'},
         cnpj: {required: 'Campo Requerido.'},
         ie: {required: 'Campo Requerido.'},
         logradouro: {required: 'Campo Requerido.'},
         numero: {required:'Campo Requerido.'},
         bairro: {required:'Campo Requerido.'},
         cidade: {required:'Campo Requerido.'},
         uf: {required:'Campo Requerido.'},
         telefone: {required:'Campo Requerido.'},
         email: {required:'Campo Requerido.'}
      },

        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
            $(element).parents('.control-group').removeClass('success');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
   });


    $("#formAlterar").validate({
      rules:{
         userfile: {required:true},
         nome: {required:true},
         cnpj: {required:true},
         ie: {required:true},
         logradouro: {required:true},
         numero: {required:true},
         bairro: {required:true},
         cidade: {required:true},
         uf: {required:true},
         telefone: {required:true},
         email: {required:true}
      },
      messages:{
         userfile: {required: 'Campo Requerido.'},
         nome: {required: 'Campo Requerido.'},
         cnpj: {required: 'Campo Requerido.'},
         ie: {required: 'Campo Requerido.'},
         logradouro: {required: 'Campo Requerido.'},
         numero: {required:'Campo Requerido.'},
         bairro: {required:'Campo Requerido.'},
         cidade: {required:'Campo Requerido.'},
         uf: {required:'Campo Requerido.'},
         telefone: {required:'Campo Requerido.'},
         email: {required:'Campo Requerido.'}
      },

        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
            $(element).parents('.control-group').removeClass('success');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
   });

});
    
</script>
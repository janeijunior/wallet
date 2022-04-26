<div class="contentpanel">

    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div class="text-center">
                <img src="<?php if ($usuario->url_logo == null) {
                                $no_img = 'http://10.0.0.113/dev_source/assets/uploads/b26a1da5963669b44710a6fb66a70b39.png';
                                $url_img = '';
                            } else {
                                $url_img = $usuario->url_logo;
                                $no_img = '';
                            } ?> <?php echo $url_img; ?><?php echo $no_img; ?>" class="img-circle img-offline img-responsive img-profile" alt="" />
                <h4 class="profile-name mb5"><?php echo $this->session->userdata('username'); ?></h4>

            </div><!-- text-center -->

            <br />
            <!--
            <h5 class="md-title">About</h5>
            <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat... <a href="">Show More</a></p>

            <h5 class="md-title">Connect</h5>
            <ul class="list-unstyled social-list">
                <li><i class="fa fa-twitter"></i> <a href="">twitter.com/eileensideways</a></li>
                <li><i class="fa fa-facebook"></i> <a href="">facebook.com/eileen</a></li>
                <li><i class="fa fa-youtube"></i> <a href="">youtube.com/eileen22</a></li>
                <li><i class="fa fa-linkedin"></i> <a href="">linkedin.com/4ever-eileen</a></li>
                <li><i class="fa fa-pinterest"></i> <a href="">pinterest.com/eileen</a></li>
                <li><i class="fa fa-instagram"></i> <a href="">instagram.com/eiside</a></li>
            </ul>

            <div class="mb30"></div>

            <h5 class="md-title">Address</h5>
            <address>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
-->
        </div><!-- col-sm-4 col-md-3 -->

        <div class="col-sm-8 col-md-9">


            <!-- Tab panes -->
            <div class="tab-content nopadding noborder">
                <div class="col-md-06">
                    <h5 class="lg-title mb10"></h5>
                    <p class="mb20"></p>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Dados pessoais
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <div class="jr-tabs-content jr-task-list">
                                        <div class="row">
                                            <div data-testid="main-snapshot" class="row">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-holder">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-account-box jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-user"></i>
                                                            <span>Nome</span></span>
                                                            <p class="mb-0"><?php echo $usuario->nome; ?></p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-holder_email">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"></div>
                                                        <div class="media-body"><i class="fa fa-envelope"></i> Email</span> <a id="order-status-link" target="_blank" href="" rel="noopener noreferrer" class=""><i class="fa fa-question " aria-hidden="true"></i></a></span>
                                                            <p class="mb-0"><?php echo $usuario->email; ?></p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-created_at">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-calendar jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-calendar"></i><span> Cliente desde</span></span>
                                                            <p class="mb-0"><time datetime="1621987606000"><?php echo $usuario->data_cadastro; ?></time></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-account-box-mail jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body" data-testid="main-document"><i class="fa fa-credit-card"></i><span> CPF</span></span>
                                                            <p class="mb-0 doc-pos"><?php echo $usuario->cpf; ?><i class="flag flag-24 flag-br flag-pos"></i></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-google-maps jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body" data-testid="main-address"><i class="fa fa-map-marker"></i><span> Endereço Principal</span></span>
                                                            <p class="mb-0"><span><?php echo $usuario->endereco; ?> - <?php echo $usuario->endereco_numero; ?> - a <?php echo $usuario->endereco_bairro; ?> - <?php echo $usuario->endereco_municipio; ?> - <?php echo $usuario->endereco_numero; ?> - <?php echo $usuario->endereco_cep; ?> </span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-phone">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-phone jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-phone"></i><span> Telefone</span></span>
                                                            <p class="mb-0">(<?php echo $usuario->ddd; ?>) <?php echo $usuario->fone1; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-birthday">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-calendar jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-calendar"></i><span> Data de Nascimento</span></span>
                                                            <p class="mb-0"><time datetime="845863200000"><?php echo $usuario->data_nascimento; ?></time></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-phone">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-phone jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-user"></i><span> Estado civil</span></span>
                                                            <p class="mb-0"><?php echo $usuario->id_pessoa_estadocivil; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-birthday">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-calendar jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-user"></i><span> Sexo</span></span>
                                                            <p class="mb-0"><?php echo $usuario->id_pessoa_sexo; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-phone">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-phone jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body"><i class="fa fa-user"></i><span> Escolaridade</span></span>
                                                            <p class="mb-0"><?php echo $usuario->id_pessoa_escolaridade; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#modal-alterarDados" data-toggle="modal" role="button" class="btn btn-primary">Alterar Dados</a>
                                    <br>
                                </div>
                            </div>
                        </div><!-- panel -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                        Endereços
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <div class="jr-tabs-content jr-task-list">
                                        <div class="row">
                                            <div data-testid="main-snapshot" class="row">

                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                        <div class="mr-3"><i class="zmdi zmdi-google-maps jr-fs-xxl text-grey"></i></div>
                                                        <div class="media-body" data-testid="main-address"><i class="fa fa-map-marker"></i><span> Endereço Principal</span></span>
                                                            <p class="mb-0"><span><?php echo $usuario->endereco; ?> - <?php echo $usuario->endereco_numero; ?> - a <?php echo $usuario->endereco_bairro; ?> - <?php echo $usuario->endereco_municipio; ?> - <?php echo $usuario->endereco_numero; ?> - <?php echo $usuario->endereco_cep; ?> </span> </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="#modal-alterarDados" data-toggle="modal" role="button" class="btn btn-primary">Alterar Dados</a>
                                    <br>
                                </div>
                            </div>
                        </div><!-- panel -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                        Bancos
                                    </a>
                                </h4>
                            </div>
                            
                        </div><!-- panel -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                                        Documentos
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                </div>
                            </div>
                        </div><!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFive">
                                        Segurança
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Troca de Senha</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->

                                        <div class="box-body">

                                            <br>
                                            <a href="#modal-alterarSenha" data-toggle="modal" role="button" class="btn btn-primary">Alterar Senha</a>

                                        </div>



                                    </div>
                                    <div class="box box-danger">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Palavra Secreta Anti-Phishing</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->

                                        <div class="box-body">

                                            <br>
                                            <a href="#modal-alterarSenha" data-toggle="modal" role="button" class="btn btn-primary">Anti-Phishing</a>

                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div><!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseSix">
                                        Renda e Patrimônio
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="row col-12">
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-occupation">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-case jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-briefcase"></i><span> Profissão</span></span>
                                                        <p class="mb-0">Analista de desenvolvimento de sistemas</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-monthly_income">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-balance-wallet jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-money"></i><span> Renda mensal declarada</span></span>
                                                        <p class="mb-0"><span>R$ 10.000,00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-net_worth">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-balance jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-bank"></i><span> Patrimônio</span></span>
                                                        <p class="mb-0"><span>R$ 10.000,00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-12">
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-occupation">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-case jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-briefcase"></i><span> Profissão</span></span>
                                                        <p class="mb-0">Analista de desenvolvimento de sistemas</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-monthly_income">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-balance-wallet jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-money"></i><span> Renda mensal declarada</span></span>
                                                        <p class="mb-0"><span>R$ 10.000,00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12" data-testid="main-net_worth">
                                                <div class="media flex-nowrap mt-3 mt-lg-4 mb-2">
                                                    <div class="mr-3"><i class="zmdi zmdi-balance jr-fs-xxl text-grey"></i></div>
                                                    <div class="media-body"><i class="fa fa-bank"></i><span> Patrimônio</span></span>
                                                        <p class="mb-0"><span>R$ 10.000,00</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- panel -->

                    </div><!-- panel-group -->

                </div><!-- col-md-6 -->

            </div><!-- tab-content -->

        </div><!-- col-sm-9 -->
    </div><!-- row -->

</div><!-- contentpanel -->


<!-- modal-alterarDados-->
<div class="modal fade" id="modal-alterarDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="<?php echo base_url(); ?>index.php/sistema/editarUsuario" id="formLogo" enctype="multipart/form-data" method="post" class="form-horizontal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->config->item('app_name'); ?> - Alterar Dados Dados pessoais</h5>
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
                                <input type="text" name="nome" id="disabledInput" class="form-control" placeholder="" value="<?php echo $usuario->nome; ?>">
                                <input id="nome" type="hidden" name="id" value="<?php echo $usuario->idUsuarios; ?>" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                <input type="text" name="nome" id="disabledInput" class="form-control" placeholder="" value="<?php echo $usuario->username; ?>">
                                <input id="nome" type="hidden" name="id" value="<?php echo $usuario->idUsuarios; ?>" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="rg" class="form-control" placeholder="" value="<?php echo  $usuario->identidade; ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                <input type="text" name="cpf" class="form-control cpf-mask" id="cpf" placeholder="Ex.: 000.000.000-00" value="<?php echo  $usuario->cpf; ?>">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-fax"></i></span>
                                <input type="text" name="telefone" id="telefone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" value="<?php echo  $usuario->fone1; ?>">
                            </div>
                            <br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa  fa-envelope"></i></span>
                                <input type="text" name="email" id="telefone" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" value="<?php echo  $usuario->email; ?>">
                            </div>
                            <br>
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                <select class="form-control" name="id_pessoa_sexo" id="paisid_id select-basic">
                                    <?php foreach ($pessoa_sexo as $pessoa_sexo) {
                                        if ($pessoa_sexo->id == $result->id_pessoa_sexo) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        echo '<option value="' . $pessoa_sexo->id . '"' . $selected . '>' . $pessoa_sexo->descricao . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <br>

                            <div class="input-group ">
                                <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                <select class="form-control" name="id_pessoa_escolaridade" id="paisid_id select-basic">
                                    <?php foreach ($pessoa_escolaridade as $pessoa_escolaridade) {
                                        if ($pessoa_escolaridade->id == $result->id_pessoa_escolaridade) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        echo '<option value="' . $pessoa_escolaridade->id . '"' . $selected . '>' . $pessoa_escolaridade->descricao . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <br>
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="fa  fa-user"></i></span>
                                <select class="form-control" name="id_pessoa_estadocivil" id="paisid_id select-basic">
                                    <?php foreach ($pessoa_estadocivil as $pessoa_estadocivil) {
                                        if ($pessoa_estadocivil->id == $result->id_pessoa_estadocivil) {
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }
                                        echo '<option value="' . $pessoa_estadocivil->id . '"' . $selected . '>' . $pessoa_estadocivil->descricao . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <br>

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

<script src="<?php echo base_url() ?>js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#formSenha').validate({
            rules: {
                oldSenha: {
                    required: true
                },
                novaSenha: {
                    required: true
                },
                confirmarSenha: {
                    equalTo: "#novaSenha"
                }
            },
            messages: {
                oldSenha: {
                    required: 'Campo Requerido'
                },
                novaSenha: {
                    required: 'Campo Requerido.'
                },
                confirmarSenha: {
                    equalTo: 'As senhas não combinam.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
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
    $(document).ready(function() {


        $(document).on('click', 'a', function(event) {

            var motores = $(this).attr('motores');
            $('#id').val(motores);

        });

    });
</script>
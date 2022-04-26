<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->config->item('app_name'); ?> v<?php echo $this->config->item('app_version'); ?></title>

    <link href="<?php echo base_url(); ?>elements/template/css/style.default.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>elements/template/css/select2.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>elements/template/css/style.datatables.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>elements/template/js/jquery-1.11.1.min.js"></script>

    <link href="//cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <header>
        <div class="headerwrapper">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="images/logo.png" alt="" />
                </a>
                <div class="pull-right">
                    <a href="" class="menu-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div><!-- header-left -->

            <div class="header-right">
                <?php
                #Informamos as datas e horários de início e fim no formato Y-m-d H:i:s.
                $hora_login_db = $this->session->userdata('hora_login');
                $date_login_db = $this->session->userdata('date_login');
                $end_session = strtotime('+30 minute', strtotime($date_login_db));
                $dia_hora_atual = strtotime(date("Y-m-d H:i:s"));
                #Achamos a diferença entre as datas.
                $diferenca = $end_session - $dia_hora_atual;
                #Fazemos a contagem.
                $dias = intval($diferenca / 86400);
                $marcador = $diferenca % 86400;
                $hora = intval($marcador / 3600);
                $marcador = $marcador % 3600;
                $minuto = intval($marcador / 60);
                $segundos = $marcador % 60;
                // $minutes = $minutes < 10 ? "0" + $minutes : $minutes;
                //$segundos = $segundos < 10 ? "0" + $segundos : $segundos;
                ?>
                <div class="pull-right">

                    <form class="form form-search" action="search-results.html">
                        <input type="search" class="form-control" placeholder="Search" />
                    </form>
                    <div class="btn-group btn-group-list btn-group-messages">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-eye"></i>
                            <span class="badge"><?php echo "$minuto:$segundos"; ?></span>
                        </button>
                    </div><!-- btn-group -->
                    <div class="btn-group btn-group-list btn-group-notification">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge"></span>
                        </button>
                        <div class="dropdown-menu pull-right">
                            <a href="" class="link-right"><i class="fa fa-search"></i></a>
                            <h5>Notification</h5>
                            <ul class="media-list dropdown-list">
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                    <div class="media-body">
                                        <strong>Nusja Nawancali</strong> likes a photo of you
                                        <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                    <div class="media-body">
                                        <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                        <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                    <div class="media-body">
                                        <strong>Venro Leonga</strong> likes a photo of you
                                        <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                    <div class="media-body">
                                        <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                        <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                    <div class="media-body">
                                        <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                        <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="" class="link">See All Notifications</a>
                            </div>
                        </div><!-- dropdown-menu -->
                    </div><!-- btn-group -->

                    <div class="btn-group btn-group-list btn-group-messages">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge"></span>
                        </button>
                        <div class="dropdown-menu pull-right">
                            <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                            <h5>New Messages</h5>
                            <ul class="media-list dropdown-list">
                                <li class="media">
                                    <span class="badge badge-success">New</span>
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                    <div class="media-body">
                                        <strong>Nusja Nawancali</strong>
                                        <p>Hi! How are you?...</p>
                                        <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="badge badge-success">New</span>
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                    <div class="media-body">
                                        <strong>Weno Carasbong</strong>
                                        <p>Lorem ipsum dolor sit amet...</p>
                                        <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                    <div class="media-body">
                                        <strong>Venro Leonga</strong>
                                        <p>Do you have the time to listen to me...</p>
                                        <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                    <div class="media-body">
                                        <strong>Nanterey Reslaba</strong>
                                        <p>It might seem crazy what I'm about to say...</p>
                                        <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                    <div class="media-body">
                                        <strong>Nusja Nawancali</strong>
                                        <p>Hey I just met you and this is crazy...</p>
                                        <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="" class="link">See All Messages</a>
                            </div>
                        </div><!-- dropdown-menu -->
                    </div><!-- btn-group -->

                    <div class="btn-group btn-group-option">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="<?php echo base_url(); ?>index.php/sistema/minhaConta"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Ajuda</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>index.php/sistema/sair"><i class="glyphicon glyphicon-log-out"></i>Sair</a></li>
                        </ul>
                    </div><!-- btn-group -->

                </div><!-- pull-right -->

            </div><!-- header-right -->

        </div><!-- headerwrapper -->
    </header>

    <section>
        <div class="mainwrapper">
            <div class="leftpanel">
                <div class="media profile-left">
                    <a class="pull-left profile-thumb" href="profile.html">
                        <img class="img-circle" src="<?php if ($this->session->userdata('url_logo') == null) {
                                                            $no_img = 'http://10.0.0.113/dev_source/assets/uploads/b26a1da5963669b44710a6fb66a70b39.png';
                                                            $url_img = '';
                                                        } else {
                                                            $url_img = $this->session->userdata('url_logo');
                                                            $no_img = '';
                                                        } ?> <?php echo $url_img; ?><?php echo $no_img; ?>" class="user-image" alt="User Image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $this->session->userdata('nome'); ?></h4>
                        <!--<small class="text-muted"><?php echo $this->session->userdata('permissao'); ?></small>-->










                    </div>
                </div><!-- media -->

                <h5 class="leftpanel-title">MENU</h5>
                <ul class="nav nav-pills nav-stacked">

                    <li class="<?php if (isset($menuDashboard)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/dashboard"><i class="fa fa-fw fa-home"></i> <span> Painel Principal</span></a></li>

                    <li class="<?php if (isset($menuPerfil)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/perfil"><i class="fa fa-fw fa-user"></i> <span> Perfil</span></a></li>

                    <li class="<?php if (isset($menuDeposito)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-arrow-up"></i> <span> Depósitos</span></a></li>

                    <li class="<?php if (isset($menuSaques)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-arrow-down"></i> <span> Saques</span></a></li>


                    <li class="<?php if (isset($menuTransferir)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-exchange"></i> <span> Transferir</span></a></li>

                    <li class="<?php if (isset($menuCarteira)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-money"></i> <span> Carteira</span></a></li>

                    <li class="<?php if (isset($menuHistorico)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-history"></i> <span> Histórico</span></a></li>

                    <li class="<?php if (isset($menuCashback)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-star"></i> <span> Cashback / Rewards</span></a></li>

                    <li class="<?php if (isset($menuAjuda)) {
                                    echo 'active';
                                }; ?>"><a href="<?php echo base_url() ?>index.php/sistema/"><i class="fa fa-fw fa-question-circle"></i> <span> Ajuda</span></a></li>



                    <li><a href="<?php echo base_url(); ?>index.php/sistema/sair"><i class="fa fa-fw fa-sign-out"></i> <span> Sair</span></a></li>


                </ul>

            </div><!-- leftpanel -->

            <div class="mainpanel">
                <div class="pageheader">
                    <div class="media">

                        <div class="media-body">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>index.php/dashboard">
                                        <em class="fa fa-home"></em>
                                    </a></li>

                                <li class="active"><a href="<?php echo base_url() ?>" title="Dashboard" class="tip-bottom"><i class="icon-home"></i></a> <?php if ($this->uri->segment(1) != null) {
                                                                                                                                                            ?><a href="<?php echo base_url() . 'index.php/' . $this->uri->segment(1) ?>" class="tip-bottom" title="<?php echo ucfirst($this->uri->segment(1)); ?>"><?php echo ucfirst($this->uri->segment(1)); ?></a> <?php if ($this->uri->segment(2) != null) {
                                                                                                                                                                                                                                                                                                                                                                        ?>/ <a href="<?php echo base_url() . 'index.php/' . $this->uri->segment(1) . '>' . $this->uri->segment(2) . '/' . $this->uri->segment(3) ?>" class="current tip-bottom" title="<?php echo ucfirst($this->uri->segment(2)); ?>"><?php echo ucfirst($this->uri->segment(2));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } ?></a> <?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } ?></li>

                            </ol>
                        </div>
                    </div><!-- media -->
                </div><!-- pageheader -->

                <div class="contentpanel">



                    <?php if ($this->session->flashdata('error') != null) { ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success') != null) { ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php } ?>


                    <div class="row">
                        <?php if (isset($view)) {
                            echo $this->load->view($view);
                        } ?>
                    </div><!-- row -->

                </div><!-- contentpanel -->
            </div>
        </div><!-- mainwrapper -->
    </section>


    <script src="<?php echo base_url(); ?>elements/template/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/modernizr.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/retina.min.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/jquery.cookies.js"></script>

    <script src="<?php echo base_url(); ?>elements/template/js/custom.js"></script>


    <script src="<?php echo base_url(); ?>elements/template/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="//cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>elements/template/js/select2.min.js"></script>


    <script>
        jQuery(document).ready(function() {

            jQuery('#basicTable').DataTable({
                responsive: true
            });

            var shTable = jQuery('#shTable').DataTable({
                "fnDrawCallback": function(oSettings) {
                    jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                },
                responsive: true
            });


        });
    </script>



</body>

</html>
<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>H2O Contabilidade | Servi&ccedil;os</title>
        <meta name="description" content="H2oContabilidade Sorocaba">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/faviconx57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/faviconx72.png">
    </head>
    <body class="push-menu">
        @include('includes.topo-responsivo')
        
        <div id="mobile-menu-overlay"></div><!-- End #mobile-menu-overlay -->
        <div id="wrapper">
            <header class="header">   
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <ul class="top-menu">
                               <!-- <li class="active"><a href="#">Registrar</a></li> -->
                                
                            </ul>
                        </div><!-- End .header-left -->
                        <div class="header-right">
                            <div class="header-infos">
                                <span><i class="fa fa-mobile"></i>+55 15 3211-5312 </span>
                                <span class="separator">|</span>
                                <a href="mailto:contato@h2ocontabilidade.com.br" title="Contato"><i class="fa fa-envelope-o"></i>contato@h2ocontabilidade.com.br</a>
                                <span class="separator">|</span>
                                <a href="suporte.html" title="Contato"><i class="fa fa-cog"></i>Suporte</a>
                                
                            </div><!-- End .header-info -->
                        </div><!-- End. container -->
                    </div><!-- End. header-right -->
                </div><!-- End.header-top -->
                <div class="header-inner sticky-menu">
                    <div class="container">
                        <div class="header-left">
                            <a href="home/index.html" class="site-logo" title="H2O Contabilidade">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div><!-- End .header-left -->
                        <div class="header-right">
                            <a href="#" class="navbar-toggle">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                            </a>
                          <!--  <div class="dropdown search-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Pesquisa...">
                                        <button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
                                    </form> 
                                </div><!-- End. dropdown-menu -->
                          <!--  </div> --> <!-- End. dropdown -->

                            @include('includes.topo')
                            
                        </div><!-- End .header-right -->
                    </div><!-- End. container -->
                </div><!-- End .header-inner -->
            </header><!-- End .header -->
            
            <div class="main">
                <div class="page-header">
                    <div class="container">
                        <h1>Servi&ccedil;os</h1>
                        <p>H2O Contabilidade há 25 prestando serviços Transparentes, Essenciais e Confiáveis aos seus clientes.</p>
                    </div><!-- End .container -->
                </div><!-- End .page-header -->
                <div class="breadcrumb-container mb95">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Inicio</a></li>
                            <li class="active">Servi&ccedil;os</li>
                        </ol>
                    </div><!-- End .container -->
                </div><!-- End .breadcrumb-container -->
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-briefcase"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Contabilidade</h3>
                                    <p>Nosso departamento contábil conta com modernas instalações com a softwares e hardwares de ponta somados a uma equipe técnica de competentes profissionais . . .</p>
                                    <a href="{{ url('serv-contabil') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-briefcase"></i>
                                    </div>
                                    <h3 class="service-title">Fiscal e Tributário</h3>
                                    <p>O Departamento de assessoria Fiscal e Tributária de nossa empresa, tem sido um dos nossos diferenciais, que tem por objetivo, apresentar aos nossos clientes, soluções de . . . </p>
                                    <a href="{{ url('serv-fisc') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-balance-scale"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Trabalhista e Previdenciário</h3>
                                    <p>A assessoria Trabalhista e Previdenciária, através de profissionais treinados para este tipo de atendimento, conta com soluções de tecnologia da informação que simplificam e tornam .</p>
                                    <a href="{{ url('serv-trab') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-gray2 -->

                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-users"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Societário</h3>
                                    <p>Serviços de assessoria na elaboração e registro de contratos para Empresários Individuais, Todos os tipos de Sociedades, EIRELI, Cooperativas e Associações nos processos de. . .</p>
                                    <a href="{{ url('serv-socie') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-desktop"></i>
                                    </div>
                                    <h3 class="service-title">Soluções de T.I.</h3>
                                    <p>Contamos uma equipe de profissionais e de empresas parceiras de negócios preparados para atender às necessidades de nossos clientes na área de T.I. (Tecnologia da Informação . . .</p>
                                    <a href="{{ url('serv-ti') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-server"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Treinamentos e Palestras</h3>
                                    <p>A H2O dispõe de um auditório para 42 pessoas, equipado com modernas instalações, visando o Treinamento e Capacitação do Capital do Humano de seus clientes e parceiros . . .</p>
                                    <a href="{{ url('serv-treina') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-gray2 -->
                
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-bar-chart"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Planejamento Financeiro </h3>
                                    <p>Por ser o principal responsável pelo insucesso de muitos gestores, acreditamos que a elaboração e utilização correta de um planejamento financeiro adequado, seja um dos . . .</p>
                                    <a href="{{ url('serv-plane') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-line-chart"></i>
                                    </div>
                                    <h3 class="service-title">Gestão Estratégica</h3>
                                    <p>A H2O juntamente com o empenho de profissionais e empresas parceiras, está preparada para lhe oferecer ferramentas dar-lhe suporte em projetos de gestão para. . .</p>
                                    <a href="{{ url('serv-gest') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-building-o"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Diagnóstico Empresarial</h3>
                                    <p>Utilizando-se de minucioso processo investigativo das áreas financeira, contábil, fiscal e trabalhista, os profissionais e empresas parceiras da H2O, elaboram um . . .</p>
                                    <a href="{{ url('serv-diag') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-gray2 -->
                
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="service-box hover-bg">
                                    <div class="service-icon-container">
                                        <i class="service-icon fa fa-users"></i>
                                    </div><!-- End .service-icon-container -->
                                    <h3 class="service-title">Legalização de Empresas</h3>
                                    <p>Através de experientes profissionais, dispomos de soluções eficazes para os procedimentos de: Abertura, Regularização, Alteração, Transformação e Encerramento de . . .</p>
                                    <a href="{{ url('serv-lega') }}" class="btn btn-custom btn-border btn-rounded btn-sm">Leia mais
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><!-- End .service-box -->
                            </div><!-- End .col-sm-4 -->

                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-gray2 -->
                
                
                
                
                
                


                <div class="mb60"></div><!--margin -->

                <div class="bg-gray border pt100 pb100">
                    <div class="container">
                        <h2 class="title text-center"><span>NOSSOS CLIENTES</span></h2>
                        <p class="text-center"></p>

                        <div class="mb60"></div><!-- margin -->

                        <div class="clients-carousel owl-carousel">
                            <a href="#"  class="client" title="Client Name">
                                <img src="assets/images/clients/stockguard.png" alt="Yelp">
                            </a>
                            <a href="#" target="_blank" class="client" title="Client Name">
                                <img src="assets/images/clients/toca-do-leao.png" alt="Microsoft">
                            </a>
                            <a href="#"  class="client" title="Client Name">
                                <img src="assets/images/clients/stockguard.png" alt="Yelp">
                            </a>
                            <a href="#" target="_blank" class="client" title="Client Name">
                                <img src="assets/images/clients/toca-do-leao.png" alt="Microsoft">
                            </a>
                            <a href="#"  class="client" title="Client Name">
                                <img src="assets/images/clients/stockguard.png" alt="Yelp">
                            </a>
                            <a href="#" target="_blank" class="client" title="Client Name">
                                <img src="assets/images/clients/toca-do-leao.png" alt="Microsoft">
                            </a>
                            <a href="#"  class="client" title="Client Name">
                                <img src="assets/images/clients/stockguard.png" alt="Yelp">
                            </a>
                            <a href="#" target="_blank" class="client" title="Client Name">
                                <img src="assets/images/clients/toca-do-leao.png" alt="Microsoft">
                            </a>
                        </div><!-- End .clients-carousel -->

                    </div><!-- End .container -->
                </div><!-- End .bg-gray -->
            </div><!-- End .main -->

              @include('includes.footer')
    </body>
</html>
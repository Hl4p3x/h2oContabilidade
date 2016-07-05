<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>H2oContabilidade | Erro 404</title>
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
                        <h1>Erro 404</h1>
                        <p>Opa! Algo de errado</p>
                    </div><!-- End .container -->
                </div><!-- End .page-header -->
                <div class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Inicio</a></li>
                            <li class="active">404</li>
                        </ol>
                    </div><!-- End .container -->
                </div><!-- End .breadcrumb-container -->

                <div class="error-page text-center">
                    <div class="container">
                        <h1>404</h1>
                        <h2>PÁGINA NÃO ENCONTRADA!</h2>
                        <p>Lamentamos, a página solicitada não pode ser encontrada. Ja estamos trabalhando para resolver este Problema! Enquanto isso</p>
                        <a href="{{ url('home') }}" class="btn btn-custom btn-sm min-width">Volte ao inicio :)</a>
                    </div><!-- End .container -->
                </div><!-- End .error-page -->
            </div><!-- End .main -->

            @include('includes.footer')
    </body>
</html>
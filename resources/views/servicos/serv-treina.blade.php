<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>H2oContabilidade | Treinamentos e Palestras</title>
        <meta name="description" content="Treinamentos e Palestras H2O">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/icons/faviconx57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icons/faviconx72.png">
    </head>
    <body class="single push-menu">
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
                            <a href="{{ url('home') }}" class="site-logo" title="H2O Contabilidade">
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
                        <h1>Treinamentos e Palestras</h1>
                        <p>Conheça Nossos Serviços</p>
                    </div><!-- End .container -->
                </div><!-- End .page-header -->
                <div class="breadcrumb-container mb100">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li><a href="{{ url('servicos') }}">Serviços</a></li>
                            <li class="active">Treinamentos e Palestras</li>
                        </ol>
                    </div><!-- End .container -->
                </div><!-- End .breadcrumb-container -->

                <div class="container">
                    <article class="entry">
                        <h2 class="entry-title">Serviço Treinamentos e Palestras H2O.</h2>
                        <div class="entry-meta">
                            <span><i class="fa fa-edit"></i>Por <a>Ronaldo Carvalho</a></span>
                        </div><!-- End .entry-meta -->
                        <div class="entry-content">
                            <div class="mb20"></div>
                            <p>A H2O dispõe de um auditório para 42 pessoas, equipado com modernas instalações, visando o Treinamento e Capacitação do Capital do Humano de seus clientes e parceiros com os mais diversos temas, porque acredita que, no processo de aumento da lucratividade e solidez, este é o principal fator de vantagem competitiva para as empresas alcançarem produtos e serviços de qualidade, boa penetração de mercado e clientes satisfeitos e fidelizados, visto que, estes treinamentos contribuem, de forma significativa, para pessoas  discutirem problemas, criar  soluções e melhorias; tendo como conseqüência, inúmeros benefícios, dos quais, destacamos o desenvolvimento profissional, pessoal e interpessoal.</p>


                            <blockquote>
                               <h4>O Exemplo da Água </h4>
                                <p>Para que a água seja pura, cristalina, cheia de minerais e nutrientes, refrescante, gerando e mantendo vidas, ela tem que estar sempre fluindo, não pode parar, deve seguir sempre em frente, acumulando cada vez mais, força e qualidade. Água parada fica suja e apodrece. Da mesma forma, a H2O Contabilidade, acredita que sua empresa, assim como você, não pode parar, não pode desistir antes de completar sua jornada, sua razão de existir, sua missão. Esta é a razão de nossa empresa existir, termos a certeza que os nossos serviços farão toda a diferença na solução de problemas, superação de dificuldades e sucesso da sua empresa..</p>
                                <cite>Ronaldo Carvalho</cite>
                            </blockquote>
                        </div><!-- End .entry-content -->
                    </article>
                </div><!-- End .container -->
            </div><!-- End .main -->

            @include('includes.footer')
    </body>
</html>
<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>H2O Contabilidade | Home</title>
        <meta name="description" content="H2oContabilidade Sorocaba">

        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/layerslider.css">
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
                            <a href="index.html" class="site-logo" title="H2O Contabilidade">
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
                <div id="layerslider" style="width: 100%; height: 700px;">
                   <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 15;">
                       
                        <img src="assets/images/blank.gif" data-src="assets/images/homesliders/index2/bg1.png" class="ls-bg" alt="Slide background">

                    </div><!-- End .ls-slide -->
                    <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 15;">
                       
                        <img src="assets/images/blank.gif" data-src="assets/images/homesliders/index2/bg2.jpg" class="ls-bg" alt="Slide background">

                        <h2 class="slider-title text-custom ls-l" data-ls="scaleyin: 0; scalexout: 0; durationin:800; delayin:200" style="top:200px; left:600px text-shadow: 0px 1px 2px #000; left: 50%; text-align:center;">H2O CONTABILIDADE</h2>

                        <h6 class="slider-title ls-l" data-ls="scaleyin: 0; scalexout: 0; durationin:800; delayin:500" style="top:262px;  color:#fff; text-shadow: 2px 2px 4px #000; left: 50%; text-align:center;">Soluções contábeis para a sua empresa</h6>

                        <h3 class="slider-desc ls-l" data-ls="offsetxin:200; offsetxout:200; durationin:1000; delayin:800" style="top:328px;color:#fff; text-shadow: 2px 2px 4px #000; left: 50%; text-align:center;">Serviços com Transparência, Essenciais e Confiáveis.</h3> 


                    </div><!-- End .ls-slide -->
                    <div class="ls-slide" data-ls="slidedelay: 4000; transition2d: 16;">
                        <img src="assets/images/blank.gif" data-src="assets/images/homesliders/index2/bg3.jpg" class="ls-bg" alt="Slide background">

                        <img src="assets/images/blank.gif" data-src="assets/images/homesliders/index2/item2.png" class="ls-l" data-ls="offsetxin: 0; offsetxout:0; offsetyin: 250; offsetyout:250; durationin:1200" style="top: 80px; left:65%;" alt="Image layer">

                        <h2 class="slider-title text-custom ls-l" data-ls="scaleyin: 0; scalexout: 0; durationin:800; delayin:200" style="top:200px; left:15px">H2O CONTABILIDADE</h2>

                        <h3 class="slider-title ls-l" data-ls="scaleyin: 0; scalexout: 0; durationin:800; delayin:500" style="top:262px; left:15px;color:#fff">Soluções tecnológicas</h3>


                        <p class="slider-desc ls-l" data-ls="offsetxin:200; offsetxout:200; durationin:1000; delayin:800" style="top:328px; left:15px; color:#fff; text-shadow: 2px 2px 4px #000;">Através de nossa equipe de profissionais e empresas parceiras.</p>

                    </div><!-- End .ls-slide -->
                </div><!-- End #layerslider -->
                <div class="pt95 pb70">
                    <div class="container">
                        <div class="row">
                            <div class="col-xss-12 col-xs-6 col-md-3">
                                <div class="service text-center">
                                    <i class="service-icon fa fa-briefcase "></i>
                                    <h3 class="service-title">Contábil</h3>
                                    <p>Nosso departamento contábil conta com modernas instalações com a softwares e hardwares . . .</p>
                                    <a href="{{ url('serv-contabil') }}" class="read-more">Leia mais<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .service-->
                            </div><!-- End .col-md-3 -->

                            <div class="col-xss-12 col-xs-6 col-md-3">
                                <div class="service text-center">
                                    <i class="service-icon fa fa-university"></i>
                                    <h3 class="service-title">Fiscal e Tributário</h3>
                                    <p>O Departamento de assessoria Fiscal e Tributária de nossa empresa, tem sido um dos . . .</p>
                                    <a href="{{ url('serv-fisc') }}" class="read-more">Leia mais<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .service-->
                            </div><!-- End .col-md-3 -->

                            <div class="clearfix visible-sm visible-xs"></div><!-- clearfix -->

                            <div class="col-xss-12 col-xs-6 col-md-3">
                                <div class="service text-center">
                                    <i class="service-icon fa fa-balance-scale"></i>
                                    <h3 class="service-title">Trabalhista e Previdenciário</h3>
                                    <p>A assessoria Trabalhista e Previdenciária, através de profissionais treinados para . . .</p>
                                    <a href="{{ url('serv-trab') }}" class="read-more">Leia mais<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .service-->
                            </div><!-- End .col-md-3 -->

                            <div class="col-xss-12 col-xs-6 col-md-3">
                                <div class="service text-center">
                                    <i class="service-icon fa fa-server"></i>
                                    <h3 class="service-title">Legalização de Empresas</h3>
                                    <p>Através de experientes profissionais, dispomos de soluções eficazes para os . . .</p>
                                    <a href="{{ url('serv-lega') }}" class="read-more">Leia mais<i class="fa fa-angle-right"></i></a>
                                </div><!-- End .service-->
                            </div><!-- End .col-md-3 -->   
                        </div><!-- End .row -->
                        <div class="row">
                            <div class="tagline-action" style="text-align: center; padding: 30px 0px 0px 0px;">
                                <a href="{{ url('servicos') }}" class="btn btn-custom btn-sm min-width">
                                    <i class="fa fa-hdd-o"></i> Veja mais Serviços
                                </a>
                            </div><!-- End .tagline-action -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->                
                </div><!-- End .pt95 pb50 -->
                <div class="bg-gray border pt100 pb75">
                    <div class="container">
                        <h2 class="title"><span>Por que nos escolher</span></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <p>A H2O Contabilidade tem a solução que você precisa para tornar mais prático e seguro o seu dia a dia na gestão de sua empresa, através de suas assessorias contábeis, tributárias e trabalhistas, precisas e inovadoras, que lhe proporcionarão segurança de informações, regularização e prevenção de passivos tributários e trabalhistas, além do conseqüente aumento da margem de lucro através de assessorias no planejamento tributário e orçamentário.</p>
                                <div class="mb5"></div><!-- margin -->
                                <ul class="fa-ul semibold">
                                    <li><i class="fa-li fa fa-arrow-circle-right"></i> Relação transparente com os nossos clientes.</li>
                                    <li><i class="fa-li fa fa-arrow-circle-right"></i>Serviços essenciais à vida e longevidade das empresas de nossos clientes.</li>
                                    <li><i class="fa-li fa fa-arrow-circle-right"></i>Relatórios contábeis confiáveis necessários à boa gestão dos negócios de nossos clientes.</li>
                                </ul>
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-gray -->
                
                <div class="clearfix visible-sm visible-xs"></div><!-- clearfix -->
                <div class="mb40"></div><!-- margin -->
                
                <div class="container">
                    <h2 class="title"><span>Nossos Clientes e Parceiros</span></h2> 
                    <p></p>
                    <div class="mb40"></div><!-- margin -->
                    <ul id="portfolio-filter">
                        <li class="active"><a href="#" data-filter="*">Todos</a></li>
                        <li><a href="#" data-filter=".cliente">Clientes</a></li>
                        <li><a href="#" data-filter=".parceiro">Parceiros</a></li>
                    </ul>
                    
                    <div class="row">
                        <div id="portfolio-item-container" class="max-col-4 popup-gallery" data-layoutmode="fitRows">
                            <div class="portfolio-item hover-anim cliente">
                                <figure>
                                    <a href="assets/images/page-cliente/toca-do-leao.png" target="_blank" class="zoom-item" title="Toca do Leao"><img src="assets/images/page-cliente/toca-do-leao.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://www.tocadoleao.com.br/">Toca do Leão</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://www.tocadoleao.com.br/" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            <div class="portfolio-item hover-anim parceiro ">
                                <figure>
                                    <a href="assets/images/page-cliente/frigatto.png" class="zoom-item" title="J.C. Frigatto Advogados"><img src="assets/images/page-cliente/frigatto.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://www.jcfrigattoadvogados.com.br/">J.C. Frigatto Advogados</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://www.jcfrigattoadvogados.com.br/" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            <div class="portfolio-item hover-anim cliente ">
                                <figure>
                                    <a href="assets/images/page-cliente/stock-guard.png" class="zoom-item" title="StockGuard"><img src="assets/images/page-cliente/stock-guard.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://www.stockguard.com.br/">StockGuard</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://www.stockguard.com.br/" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            <div class="portfolio-item hover-anim parceiro">
                                <figure>
                                    <a href="assets/images/page-cliente/dalmazzoecastro.png" class="zoom-item" title="Dalmazzo & castro Advogados"><img src="assets/images/page-cliente/dalmazzoecastro.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://dalmazzoecastro.com.br/">Dalmazzo & castro Advogados</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://dalmazzoecastro.com.br/" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            <div class="portfolio-item hover-anim parceiro">
                                <figure>
                                    <a href="assets/images/page-cliente/sky-ambiental.png" class="zoom-item" title="Sky Ambiental"><img src="assets/images/page-cliente/sky-ambiental.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://skyambiental.com.br/br">Sky Ambiental</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://skyambiental.com.br/br" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            <div class="portfolio-item hover-anim parceiro cliente">
                                <figure>
                                    <a href="assets/images/page-cliente/prev-life.png" class="zoom-item" title="Prev Life"><img src="assets/images/page-cliente/prev-life.png" alt="portfolio item"></a>
                                </figure>
                                <div class="portfolio-meta">
                                    <h3 class="portfolio-title"><a target="_blank" href="http://www.prevlife.com/">Prev Life</a></h3>
                                    <a target="_blank" class="portfolio-like" href="http://www.prevlife.com/" title="Web Site">
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </div><!-- End .portfolio-meta -->                     
                            </div><!-- End .portfolio-item -->
                            
                            
                            
                            
                            
                           
                            
                            
                            
                        </div><!-- End #portfolio-item-container -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                
                <div class="clearfix visible-sm visible-xs"></div><!-- clearfix -->
                <div class="mb40"></div><!-- margin -->
                
               <div class="container" style="padding-top: 60px;">
                    <div class="tagline-box tagline-box-table center-shadow">
                 		<div class="tagline-left">
                    		<h4>Quer nos dizer algo?</h4>
                     		<p>Parceria? nosso cliente? trabalhar conosco? Reclamações? Sugestões?</p>
                		</div><!-- End .tagline-left -->
                   		<div class="tagline-right">
                      		<a href="../contato.html" class="btn btn-custom min-width">Clique Aqui!</a>
                   		</div><!-- End .tagline-right -->
               		</div><!-- End .tagline-box -->
                </div><!-- End .container -->
            </div><!-- End .main -->
            
            @include('includes.footer')

        <!-- End -->
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/twitter/jquery.tweet.min.js"></script>

        <!-- LayerSlider script files -->
        <script src="assets/js/greensock.js"></script>
        <script src="assets/js/layerslider.transitions.js"></script>
        <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
        <!-- LayerSlider script files -->

        <script src="assets/js/main.js"></script>

        <script>
            $(function() {
                'use strict';
                $('#layerslider').layerSlider({
                    responsiveUnder : 1200,
                    layersContainer : 1200,
                    skinsPath: 'assets/css/skins/',
                    navButtons: true,
                    navStartStop:false,
                    showCircleTimer: true,
                    thumbnailNavigation:'disabled',
                    skin: 'thelegend' // assets/css/skins folder
                });
            });
        </script>
    </body>
</html>
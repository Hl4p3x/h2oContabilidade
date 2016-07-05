<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>H2O Contabilidade | Contato</title>
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
                        <h1>Contato</h1>
                        <p>Entre em contato Conosco</p>
                    </div><!-- End .container -->
                </div><!-- End .page-header -->
                <div class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('home') }}">Home</a></li>
                            <li class="active">Contato</li>
                        </ol>
                    </div><!-- End .container -->
                </div><!-- End .breadcrumb-container -->


                <div class="mb100 mb80-sm mb60-xs"></div><!-- margin -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-text">
                                <h2 class="title no-line"><span>ENTRAR EM CONTATO</span></h2>
                                <p>Alguma dúvida? Sugestões? Reclamações? Utilize os campos ao lado e entre em contato conosco.</p>
                                
                                <div class="mb20"></div><!-- margin -->

                                <h3 class="text-custom">Informa&ccedil;&atilde;o de contato</h3>
                                <h4>Email para envio de currículos</h4>
                                <p><a href="mailto:rh@h2ocontabilidade.com.br">rh@h2ocontabilidade.com.br</a></p>
                                <h4>Email</h4>
                                <p><a href="mailto:contato@h2ocontabilidade.com.br">contato@h2ocontabilidade.com.br</a></p>
                                <h4>Telefone</h4>
                                <p><a href="tel:015 3211-5312">015 3211-5312</a></p>
                            </div><!-- End .contact-text -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-8">
                            {!! Form::open(['route' => 'admin.contato.store']) !!}
                            <!--<form action="#" method="post" id="contact-form">-->
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'contactname', 'placeholder' => 'Nome *', 'required' => 'required'])!!}
                                        <!--<input type="text" class="form-control" id="contactname" name="nome" placeholder="Nome *" required>-->
                                    </div><!-- End .col-md-6 -->
                                    <div class="col-md-6">
                                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'contactemail', 'placeholder' => 'Email *', 'required' => 'required'])!!}
                                        <!--<input type="email" class="form-control" id="contactemail" name="email" placeholder="Email *" required>-->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder' => 'Telefone *', 'required' => 'required'])!!}
                                        <!--<input type="text" class="form-control" id="number" name="telefone" placeholder="Telefone *" required>-->
                                    </div><!-- End .col-md-6 -->
                                    <div class="col-md-6">                                      
                                        <select class="form-control" name="assunto" id="">
                                            <option value="">Selecione</option>
                                            <option value="Seja nosso cliente">Seja nosso cliente</option>
                                            <option value="Seja nosso parceiro">Seja nosso parceiro</option>
                                            <option value="Trabalhe conosco">Trabalhe conosco</option>
                                            <option value="Reclamações">Reclamações</option>
                                            <option value="Elogios">Elogios</option>
                                            <option value="Sugestões">Sugestões</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        {!! Form::textarea('mensagem', null, ['class' => 'form-control', 'rows' => "6", 'placeholder'=>"Mensagem *", 'required' => 'required']) !!}
                                    </div><!-- End .col-md-12 -->
                                </div><!-- End .row -->

                                {!! Form::submit('Enviar', ['class' => 'btn btn-custom btn-sm btn-rounded min-width-md', 'data-loading-text' => 'Enviando ......']) !!}
                                <!--<input type="submit" class="btn btn-custom btn-sm btn-rounded min-width-md" data-loading-text="Enviando Contato......" value="Enviar">-->
                            <!--</form>-->
                            {!! Form::close() !!}
                        </div><!-- End .col-md-8 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb90"></div><!-- margin -->

            </div><!-- End .main -->

        @include('includes.footer')
    </body>
</html>
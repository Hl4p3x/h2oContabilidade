<div id="mobile-menu-container">
    <div class="mobile-menu-title">Menu <a href="" id="mobile-menu-close">&times;</a></div>
    <ul class="mobile-menu">
        <li>
            <a href="{{ url('/') }}">Home<span class="arrow"></span></a>
        </li>
        <li>
            <a href="{{ url('servicos') }}">Servi&ccedil;os<span class="arrow"></span></a>
        </li>
        <li>
            <a href="">{{ url('parceiros') }}<span class="arrow"></span></a>
        </li>
        <!-- <li>
             <a href="blog.html">Blog<span class="arrow"></span></a>
         </li> -->
        <li class="reverse">
            <a href="{{ url('quem-somos') }}">Quem Somos<span class="arrow"></span></a>
        </li>
        <li class="reverse">
            <a href="{{ url('localizacao') }}">Localiza&ccedil;&atilde;o<span class="arrow"></span></a>
        </li>
        <li class="reverse">
            <a href="{{ url('contato') }}">Fale Conosco<span class="arrow"></span></a>
        </li>

    </ul>
</div><!-- End #mobile-menu-container -->
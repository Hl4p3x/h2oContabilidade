<nav class="menu-container">
    <ul class="menu hover-line">
        <li >
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ url('servicos') }}">Servi&ccedil;os</a>
        </li>
        <li>
            <a href="{{ url('parceiros') }}">Parceiros</a>
        </li>
        <!-- <li>
            <a href="blog.html">Blog</a>
        </li>  -->
        <li>
            <a href="{{ url('quem-somos') }}">Quem somos</a>
        </li>
        <li class="reverse">
            <a href="{{ url('localizacao') }}">Localização</a>
        </li>
        <li class="active">
            <a href="{{ url('contato') }}">Fale Conosco</a>
        </li>
    </ul>
</nav>
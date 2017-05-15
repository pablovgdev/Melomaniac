<header>
    <nav>
        <ul>
            <li id="inicio"><a href="inicio.php"><i class="fa fa-home"></i><span class="nav-text">Inicio</span></a></li>
            <li id="mensajes"><a href="mensajes.php"><i class="fa fa-comments-o"></i><span class="nav-text">Mensajes</span></a></li>
            <img src="img/Logo/logo.png" id="logo"/>
            <li id="perfil"><a href="perfil.php"><i class="fa fa-user-circle"></i><span class="nav-text">Perfil</span></a></li>
        </ul>
    </nav>
</header>

<script>

    if (currentPage == "inicio") {
        $("header nav ul li#inicio").addClass("active");
    }

    else if (currentPage == "mensajes") {
        $("header nav ul li#mensajes").addClass("active");
    }

    else if (currentPage == "perfil") {
        $("header nav ul li#perfil").addClass("active");
    }

</script>

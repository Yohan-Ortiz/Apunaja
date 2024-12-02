<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ICONOS -->
    <script src="https://kit.fontawesome.com/3140323153.js" crossorigin="anonymous"></script>
    
  <!-- Enlaces a css  -->
<link rel="stylesheet" href="/css/Styles_admin_page/0.Styles_global/1.Styles_global_admin_page.css">
<link rel="stylesheet" href="/css/Styles_admin_page/1.Styles_home/Styles_1.home_page.css">

 <!-- Favicons para diferentes dispositivos y tamaños -->
 <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicons/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
 <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">

    <title>Home</title>
</head>
<body>
    
    <!-- ===================== HEADER ===================== -->

<!-- Barra de navegación-->
<header>
    <div class="logo-admin">
        <a href="/html/Admin_panel/1.Home/home_panel.html">
            <img src="/assets/logos_of_the_site/logo_color.png" alt="logo">
        </a>
    </div>
    <div class="menu-icon">&#9776;</div>
    <nav>
        <ul class="Menu-horizontal">
            <li>
                <a href="#"> <i class="fa-solid fa-users"></i> BENEFICIARIOS</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/2.Beneficiaries/1.Create_new_community.html">CREAR COMUNIDAD</a></li>
                    <li><a href="/html/Admin_panel/2.Beneficiaries/2.Create_new_beneficiary.html">CREAR BENEFICIARIO</a></li>
                    <li><a href="/html/Admin_panel/2.Beneficiaries/3.Create_new_Schols.html">CENTROS EDUCATIVOS</a></li>
                    <li><a href="/html/Admin_panel/2.Beneficiaries/4.Create_new_studens.html">CREAR ESTUDIANTES</a></li>
                </ul>
            </li>
            <li>
                <a href="#"> <i class="fa-regular fa-folder-open"></i> PROYECTOS</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/3.Projects/1.New_project.html">CREAR PROYECTO</a></li>
                    <li><a href="/html/Admin_panel/3.Projects/2.load_format.html">CARGAR FORMATO</a></li>
                    <li><a href="/html/Admin_panel/3.Projects/3.connect_project.html">CONECTAR PROYECTO</a></li>
                    <li><a href="/html/Admin_panel/3.Projects/4.project_information.html">INFORMACION</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-newspaper"></i> PANEL DE NOTICIAS</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/4.News_panel/admin.html">ADMINISTRADOR</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-database"></i> BASE DE DATOS</a>
                <ul class="Menu-vertical">
                    <li><a href="#">INFORMACION</a></li>
                    <li><a href="#">FOTOGRAFIAS</a></li>
                    <li><a href="#">DOCUMENTOS</a></li>
                    <li><a href="#">GEOREFERENCIA</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-user-shield"></i> ROLES Y PERMISOS</a>
                <ul class="Menu-vertical">
                    <li><a href="#">ASIGNAR ROLES</a></li>
                    <li><a href="#">CREAR NUEVOS ROLES</a></li>
                    <li><a href="#">MODIFICAR ROLES</a></li>
                    <li><a href="#">ELIMINAR ROLES</a></li>
                    <li><a href="#">VER PERMISOS</a></li>
                    <li><a href="#">ASIGNAR PERMISOS</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-gears"></i> CONFIGURACION</a>
                <ul class="Menu-vertical">
                    <li><a href="#">consigurar parametros</a></li>
                    <li><a href="#">consigurar opciones de acceso</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-right-from-bracket"></i> CERRAR SESION</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/home_page/6.login.php">CERRAR SESION</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>


    <!-- ===================== MAIN CONTENT ===================== -->

<main>
    <div class="main-content">
        <h1 class="main-title">Bienvenido al Panel de Administración</h1>
        <div class="button-container">
            <a href="/html/Admin_panel/2.Beneficiaries/2.Create_new_beneficiary.html"><div class="upload-item">
                <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
                <input type="button" value="CREAR BENEFICIARIO">
            </div></a>
            <a href="/html/Admin_panel/2.Beneficiaries/1.Create_new_community.html"><div class="upload-item">
                <div class="icon"><i class="fa-solid fa-users"></i></div>
                <input type="button" value="CREAR COMUNIDAD">
            </div></a>
            <a href="/html/Admin_panel/3.Projects/1.New_project.html"><div class="upload-item">
                <div class="icon"><i class="fa-solid fa-folder-plus"></i></div>
                <input type="button" value="CREAR PROYECTO">
            </div></a>
            <a href="/html/Admin_panel/5.Roles/assign_roles.html"><div class="upload-item">
                <div class="icon"><i class="fa-solid fa-user-shield"></i></div>
                <input type="button" value="ASIGNAR ROLES">
            </div></a>
            <a href="/html/Admin_panel/4.News_panel/admin.html"><div class="upload-item">
                <div class="icon"><i class="fa-solid fa-newspaper"></i></div>
                <input type="button" value="PUBLICAR NOTICIA">
            </div></a>
        </div>
    </div>
</main>

<script>
    // JavaScript para el menú desplegable
    const menuIcon = document.querySelector('.menu-icon');
    const nav = document.querySelector('nav');

    menuIcon.addEventListener('click', () => {
      nav.classList.toggle('show');
    });
  </script>

</body>
</html>


<?php
session_start();

// Verificar si el usuario está conectado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirigir al login si no está autenticado
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ICONOS -->
    <script src="https://kit.fontawesome.com/3140323153.js" crossorigin="anonymous"></script>
    
  <!-- Enlaces a css  -->
<link rel="stylesheet" href="/css/Styles_admin_page/1.Styles_global/1.Styles_global.css">
<link rel="stylesheet" href="/css/Styles_admin_page/2.Styles_pages/1.Styles_home.css">
<link rel="stylesheet" href="/css/Styles_admin_page/3.Styles_responsive/Styles_responsive-home.css">

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

    <title>PANEL ADMINISTRADOR</title>
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
                    <li><a href="/html/Admin_panel/4.News_panel/1.admin.html">ADMINISTRADOR</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-database"></i> BASE DE DATOS</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/5.Database/1.information.html">INFORMACION GENERAL</a></li>
                    <li><a href="/html/Admin_panel/5.Database/2.photography.html">FOTOGRAFIAS</a></li>
                    <li><a href="/html/Admin_panel/5.Database/3.documents.html">DOCUMENTOS</a></li>
                    <li><a href="/html/Admin_panel/5.Database/4.georeference.html">GEOREFERENCIA</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-user-shield"></i> ROLES Y PERMISOS</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/6.Roles/1.assign_roles.html">ASIGNAR ROLES</a></li>
                    <li><a href="/html/Admin_panel/6.Roles/2.create_newroles.html">CREAR ROLES</a></li>
                    <li><a href="/html/Admin_panel/6.Roles/3.modify_roles.html">MODIFICAR ROLES</a></li>
                    <li><a href="/html/Admin_panel/6.Roles/4remove_roles.html">ELIMINAR ROLES</a></li>
                    <li><a href="/html/Admin_panel/6.Roles/5.create_permits.html">CREAR PERMISOS</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-gears"></i>AJUSTES</a>
                <ul class="Menu-vertical">
                    <li><a href="/html/Admin_panel/7.Settings/1.settings_beneficiary.html">CONFI. BENEFICIARIOS</a></li>
                    <li><a href="/html/Admin_panel/7.Settings/2.settings_Projects.html">CONFI. PROYECTOS ASOCIADOS</a></li>
                    <li><a href="/html/Admin_panel/7.Settings/3.settings_news.html">CONFI. PANEL DE NOTICIAS</a></li>
                    <li><a href="/html/Admin_panel/7.Settings/4.settings_databases.html">CONFI. BASE DE DATOS</a></li>
                    <li><a href="/html/Admin_panel/7.Settings/5.settings_roles.html">CONFI. ROLES Y PERMISOS</a></li>
                </ul>
            </li>
            <li>
                <a href="/php/Admin_panel/9.Php_Sign-out/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
        </ul>
    </nav>
</header>


    <!-- ===================== MAIN CONTENT ===================== -->

    <main>
        <!-- Contenedor principal del contenido del panel -->
        <div class="Contenedor">
            <!-- Título principal del panel -->
            <h1 class="title"><?php echo htmlspecialchars($_SESSION['email']); ?>PANEL ADMINISTRADOR</h1>
            
            <!-- Contenedor para los botones de acción -->
            <div class="button-contenedor">
                
                <!-- Botón para crear un nuevo beneficiario -->
                <a href="/html/Admin_panel/2.Beneficiaries/2.Create_new_beneficiary.html">
                    <div class="boton">
                        <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
                        <input type="button" value="CREAR BENEFICIARIO">
                    </div>
                </a>
    
                <!-- Botón para crear una nueva comunidad -->
                <a href="/html/Admin_panel/2.Beneficiaries/1.Create_new_community.html">
                    <div class="boton">
                        <div class="icon"><i class="fa-solid fa-users"></i></div>
                        <input type="button" value="CREAR COMUNIDAD">
                    </div>
                </a>
    
                <!-- Botón para crear un nuevo proyecto -->
                <a href="/html/Admin_panel/3.Projects/1.New_project.html">
                    <div class="boton">
                        <div class="icon"><i class="fa-solid fa-folder-plus"></i></div>
                        <input type="button" value="CREAR PROYECTO">
                    </div>
                </a>
    
                <!-- Botón para asignar roles -->
                <a href="/html/Admin_panel/5.Roles/assign_roles.html">
                    <div class="boton">
                        <div class="icon"><i class="fa-solid fa-user-shield"></i></div>
                        <input type="button" value="ASIGNAR ROLES">
                    </div>
                </a>
    
                <!-- Botón para publicar una noticia -->
                <a href="/html/Admin_panel/4.News_panel/admin.html">
                    <div class="boton">
                        <div class="icon"><i class="fa-solid fa-newspaper"></i></div>
                        <input type="button" value="PUBLICAR NOTICIA">
                    </div>
                </a>
            </div>
        </div>
    </main>

    <!--Script responsive-->
<script src="/javascript/Script_Admin_panel/1.Script_Responsive/1.responsive.js"></script>

</body>
</html>


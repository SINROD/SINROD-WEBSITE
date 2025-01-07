<?php
$rutaInicio = __DIR__;
$rutaFunciones = "/"; //EDITAR RUTA

//Ruta Pages
define("uPages", $rutaFunciones."pages/");

//Ruta Assets
define("uAssets", $rutaFunciones."assets/");

//Ruta Assets
define("uPai", $rutaFunciones."pai/");

//Ruta projects
define("uProjects", $rutaFunciones."projects/");

//Ruta blog
define("uPosts", $rutaFunciones."posts/");

define("uRaiz", "http://sinrod/");

//PAGINAS
define("pBlog", uPages."blog");
define("pContact", uPages."contact");
define("pProjects", uPages."projects");
define("pWhoiam", uPages."whoiam");
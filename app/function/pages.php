<?php

// function load(){
//     $page = filter_input(INPUT_GET, strip_tags($_GET['page']));

//     $page = (!$page)? "pages/home.php" : "pages/{$page}.php";
//     print_r($_GET);

//     if(!file_exists($page)){
//         throw new \Exception("Alguma coisa errada aconteceu", 1);        
//     }

//     return $page;
// }

function load(): string
{
    if (isset($_GET['page'])) {
        $page = strip_tags($_GET['page']);
        $page = "pages/$page.php";
    } else {
        $page = 'pages/home.php';
    }

    if (!file_exists($page)) {
        throw new Exception("Error Processing Request", 1);
    }

    return $page;
}
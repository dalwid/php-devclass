<?php
/**
 * @throws Exception
 */


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
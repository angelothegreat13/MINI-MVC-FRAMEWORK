<?php 

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function sanitize($dirty)
{
    return htmlentities($dirty,ENT_QUOTES,'UTF-8');
}

function pretty_date($date)
{
    return date("M d, Y h:i A",strtotime($date));
}

function dateNow()
{
    return  date("F j, Y, h:i:s a");
}

function refresh()
{
    header("Refresh:0");
}

function varDumpJson($string)
{
    var_dump(json_encode($string));
}

function exitJson($data)
{
    exit(json_encode($data));
}

?>
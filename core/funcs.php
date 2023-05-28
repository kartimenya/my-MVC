<?php 

function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404)
{
    http_response_code($code); 
    require_once VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load(array $fillable): array
{
    $data = [];
    foreach ($_POST as $key => $value) {
        if (in_array($key, $fillable)) {
            $data[$key] = $value;
        }
    }
    
    return $data;
}
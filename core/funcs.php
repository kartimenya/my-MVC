<?php 

function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}

function print_arr($data)
{
    echo '<pre>';
    print_r($data);
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
            $data[$key] = trim($value);
        }
    }
    
    return $data;
}

function old(string $fieldname)
{
    return isset($_POST[$fieldname]) ? h($_POST[$fieldname]) : '';
}

function h(string $str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '')
{
    if ($url) {
        $redirect = $url;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: {$redirect}");
    die;
}

function get_alerts()
{
    if (!empty($_SESSION['success'])) {
        require_once VIEWS . '/incs/alert_success.php';
        unset($_SESSION['success']);
    }
    if (!empty($_SESSION['error'])) {
        require_once VIEWS . '/incs/alert_error.php';
        unset($_SESSION['error']);
    }
}
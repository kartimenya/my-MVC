<?php 
use core\Validator;

$db = \core\App::get(\core\Db::class);

$fillable = ['name', 'email', 'password'];
$data = load($fillable);

$validator = new Validator();

$validation = $validator->validate($data, [
    'name' => [
        'required' => true,
        'max' => 100,
    ],
    'email' => [
        'email' => true,
        'max' => 100,
        'unique' => 'users:email'
    ],
    'password' => [
        'required' => true,
        'min' => 6,
    ],
]);

if(!$validation->hasErrors()) {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    if (db()->query("INSERT INTO users (`name`, `email`, `password`) VALUES (:name, :email, :password)",$data)) {
        $_SESSION['success'] ='OK';
    } else {
        $_SESSION['error'] = 'DB Error';
    }
    redirect('/');
} else {
    require VIEWS . '/users/register.tpl.php';
}
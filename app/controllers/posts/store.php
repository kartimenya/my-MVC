<?php

global $db;

use core\Validator;

/**
* @var \core\Db $db
**/

$fillable = ['title', 'content', 'excert'];
    $data = load($fillable);

    //validation

    $validator = new Validator();
    $validation = $validator->validate($data, [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190,
        ],
        'excert' => [
            'required' => true,
            'min' => 10,
            'max' => 190,
        ],
        'content' => [
            'required' => true,
            'min' => 100,
        ],
    ]);

    if(!$validation->hasErrors()) {
        if ($db->query("INSERT INTO post (`title`, `content`, `excert`, `slug`) VALUES (:title, :content, :excert, :title)",$data)) {
            $_SESSION['success'] ='OK';
        } else {
            $_SESSION['error'] = 'DB Error';
        }
        redirect('/');
    } else {
        require VIEWS . '/posts/create.tpl.php';
    }
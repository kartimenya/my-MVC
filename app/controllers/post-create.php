<?php 

require_once CORE . '/classes/Validator.php';
/**
* @var Db $db
**/

$title = 'New post';

$recent_posts = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT 3")->findAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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

    if($validation->hasErrors()) {
        print_arr($validation->getErrors());
    } else {
        echo 'SUCCESS';
    }

    die;

    // $rules = [
    //     'title' => [
    //         'required' => true,
    //         'min' => 5,
    //         'max' => 190,
    //     ],
    //     'excert' => [
    //         'required' => true,
    //         'min' => 10,
    //         'max' => 190,
    //     ],
    //     'content' => [
    //         'required' => true,
    //         'min' => 100,
    //     ],
    // ];

    // if (empty($data['title'])){
    //     $errors['title'] = 'Title is required';
    // }
    // if (empty($data['content'])){
    //     $errors['content'] = 'Content is required';
    // }
    // if (empty($data['excert'])){
    //     $errors['excert'] = 'Excert is required';
    // }


    if (empty($errors)) {
        if ($db->query("INSERT INTO post (`title`, `content`, `excert`, `slug`) VALUES (:title, :content, :excert, :title)",$data)) {
            echo 'ok';
        } else {
            echo 'DB_ERROR';
        }
        
        // redirect('/posts/create');
    }  
}

require_once VIEWS . '/post-create.tpl.php';
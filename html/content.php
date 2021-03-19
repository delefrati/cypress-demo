<?php
$page = $_GET['page'] ?? 'home';

function getContent($page) {
    $file_path = '/var/www/src/pgs/' . $page . '.php';
    if (!is_file($file_path)) {
        return 'File not found ' . $page;
    }
    $content = file_get_contents($file_path);
    return $content;
}

$pages = [
    'home' => ['title' => 'Using Cypress for Front-End Testing', 'contents' => getContent('home')],
    'what' => ['title' => 'What is Cypress?', 'contents' => getContent('what')],
    'why' => ['title' => 'Why should you use it?', 'contents' => getContent('why')],
    'who' => ['title' => 'Who uses it?', 'contents' => getContent('who')],
    'install' => ['title' => 'How to install it', 'contents' => getContent('install')],
    'about' => ['title' => 'About this project', 'contents' => getContent('about')],
    'form' => ['title' => 'Hidden form', 'contents' => getContent('form')],
];
$allowed_pages = array_keys($pages);

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

echo(json_encode($pages[$page], JSON_PRETTY_PRINT));
<?php
$page = $_GET['page'] ?? 'home';


$pages = [
    'home' => ['title' => 'Using Cypress for Front-End Testing', 'contents' => file_get_contents('../src/pgs/home.php')],
    'what' => ['title' => 'What is Cypress?', 'contents' => file_get_contents('../src/pgs/what.php')],
    'why' => ['title' => 'Why should you use it?', 'contents' => file_get_contents('../src/pgs/why.php')],
    'who' => ['title' => 'Who uses it?', 'contents' => file_get_contents('../src/pgs/who.php')],
    'install' => ['title' => 'How to install it', 'contents' => file_get_contents('../src/pgs/install.php')],

];
$allowed_pages = array_keys($pages);

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

echo(json_encode($pages[$page], JSON_PRETTY_PRINT));
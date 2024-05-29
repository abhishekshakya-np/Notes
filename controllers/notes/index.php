<?php

use core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('select * from notes WHERE user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
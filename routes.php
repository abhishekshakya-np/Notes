<?php


/* if ($uri === '/') { 
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {  
    require 'controllers/contact.php';
} else {
    echo "No route found";    
}  
shortcut for above code or refactor */
return [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/note/create' => 'controllers/note-create.php',
    '/contact' => 'controllers/contact.php',
];
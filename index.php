<?php 

# setting config
$config = [
    'structure.framework' => 'karepe',
    'structure.curl' => '',
    'structure.launching' => 'development'
];

#database setting
$database = [
    'database.hostname' => 'localhost',
    'database.database' => 'karepe',
    'database.username' => 'root',
    'database.password' => 'root',
    'database.DBDriver' => 'MySQL',
    'database.DBPrefix' => ''
];

# api config 
$api = [
    'api.url' => '',  
    'api.header' => '', 
    'api.key' => '', 
    'api.method' => [] 

];


# route to apps framework
header('Location:framework/'.ucfirst($config['structure.framework']));


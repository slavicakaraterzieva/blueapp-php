<?php
//echo "Loaded";
require_once ('./config/config.php');
require_once ('./lib/Database.php');
require_once ('./models/Post.php');

$post = new Post();

$user_id=102;
$results = $post->getPosts($user_id);
//print_r($results);
foreach($results as $result){
echo $result->title .'<br>';
};
?>
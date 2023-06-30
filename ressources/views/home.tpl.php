<?php


if(empty($value = lastBlogPosts($pdo))) : 
    echo 'Il y a Rien';
else :
    foreach ($value as $key){
        echo '<pre>';
        print_r($key);
        echo '</pre>';
    }
endif;

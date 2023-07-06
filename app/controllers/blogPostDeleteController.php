<?php

include 'app/persistences/blogPostData.php';
blogPostDelete($pdo, $id);
include 'ressources/views/blogPostDelete.tpl.php';
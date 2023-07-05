<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$firstname= filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$degres = filter_input(INPUT_POST, 'degres', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

include 'app/persistences/blogPostData.php';
//condition pour utiliser la fct de postdata avec le bouton envoyer
if(!empty($_POST['envoyer'])) {
    //fonction pour verifier si un auhtor est present ou pas
$id = searchAuthor($pdo, $pseudo, $firstname, $name);
//fonction pour la creation d'un article
blogPostCreate($pdo, $title, $text, $start_date, $end_date, $degres, $id);
}
include 'ressources/views/blogPostCreate.tpl.php';



<?php ?>
<?php

//       $nom = filter_input(INPUT_POST, 'nom');
//        $prenom = filter_input(INPUT_POST, 'prenom');
//        $mail = filter_input(INPUT_POST, 'email');
//        $genre = filter_input(INPUT_POST, 'sexe' );
//        $reason = filter_input(INPUT_POST, 'selection');
//        $message = filter_input(INPUT_POST, 'message');
//       filtre pour le tous les champs POST;

$form_filtered = filter_input_array(INPUT_POST);


?>

<div class="container-contact">
    <div class="container-left">
    </div>
    <form action="?action=update" class="form" method="POST">
        <div class="container-right">
            <fieldset class="fieldsetmecontacter">
                <legend class="entete-contact">Modifier un article</legend>
                <div>
                    <label for="nameinput">Title</label>
                    <input type="text" name="title" id="" placeholder="Titre" value="<?=$article['title']?>">
                </div>
                <br>
                <div>
                    <label for="text"></label>
                    <textarea name="text" id="message" cols="60" rows="20" placeholder="Ecrivez votre article" class="fieldtextarea"><?= $article['text']?></textarea><br>
                </div>
                <div>
                    <label for="firstname">Votre prenom</label>
                    <input type="text" name="first_name" id="nameinput" placeholder="Marc" value="<?= $article['first_name']?>">
                </div>
                <div>
                    <label for="nameinput">Votre nom</label>
                    <input type="text" name="last_name" id="nameinput" placeholder="jean" value="<?= $article['last_name']?>">
                </div>
                <div>
                    <label for="start_date">date de debut</label>
                    <input type="datetime-local" name="start_date" id="nameinput" placeholder="2023-07-05" value="<?= $article['start_date']?>">
                </div>
                <div>
                    <label for="end_date">date de fin</label>
                    <input type="datetime-local" name="end_date" id="nameinput" placeholder="2023-07-30" value="<?= $article['end_date']?>">
                </div>
                <div>
                    <select name="degres" id="pet-select" >
                        <option value=""><?= $article['degres']?></option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="modifier l'article" name="modifier">
                </div>
            </fieldset>
        </div>
    </form>

</div>


</body>
</html>

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
    <form action="?action=update" class="form" method="post">
        <div class="container-right">
            <fieldset class="fieldsetmecontacter">
                <legend class="entete-contact">Modifier un article</legend>
                <div>
                    <label for="nameinput">Title</label>
                    <input type="text" name="title" id="" placeholder="Titre" value='<?= $_GET['title']?>' >
                </div>
                <br>
                <div>
                    <label for="text"></label>
                    <textarea name="text" id="message" cols="60" rows="20" placeholder="Ecrivez votre article" class="fieldtextarea" value='<?= $_GET['text']?>'></textarea><br>
                </div>
                <div>
                    <label for="firstname">Votre prenom</label>
                    <input type="text" name="first_name" id="nameinput" placeholder="Marc" value='<?= $_GET['first_name']?>'>
                </div>
                <div>
                    <label for="nameinput">Votre nom</label>
                    <input type="text" name="last_name" id="nameinput" placeholder="jean" value='<?= $_GET['last_name']?>'>
                </div>
                <div>
                    <label for="start_date">date de debut</label>
                    <input type="datetime-local" name="start_date" id="nameinput" placeholder="2023-07-05" value='<?= $_GET['start_date']?>' >
                </div>
                <div>
                    <label for="end_date">date de fin</label>
                    <input type="datetime-local" name="end_date" id="nameinput" placeholder="2023-07-30" value='<?= $_GET['end_date']?>' >
                </div>
                <div>
                    <select name="degres" id="pet-select" >
                        <option value="">--choisir un degre--</option>
                        <option value="<?= $_GET['degres']?>"></option>
                        <option value="<?= $_GET['degres']?>"></option>
                        <option value="<?= $_GET['degres']?>"></option>
                        <option value="<?= $_GET['degres']?>"></option>
                        <option value="<?= $_GET['degres']?>"></option>
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

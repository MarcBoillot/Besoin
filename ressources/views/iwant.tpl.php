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
<html>
<body>
<div class="container-contact">
    <div class="container-left">
    </div>
    <form action="?action=create" class="form" method="post">
        <div class="container-right">
            <fieldset class="fieldsetmecontacter">
                <legend class="entete-contact">Ce dont j'ai besoin</legend>
                <div>
                    <label for="nameinput">Title</label>
                    <input type="text" name="title" id="" placeholder="Titre" value='' >
                </div>
                <br>
                <div>
                    <label for="text"></label>
                    <textarea name="text" id="message" cols="60" rows="20" placeholder="Ecrivez votre article" class="fieldtextarea" ></textarea><br>
                </div>
                <div>
                    <label for="firstname">Votre prenom</label>
                    <input type="text" name="firstname" id="nameinput" placeholder="Marc" value=''>
                </div>
                <div>
                    <label for="nameinput">Votre nom</label>
                    <input type="text" name="name" id="nameinput" placeholder="jean" value=''>
                </div>
                <div>
                    <label for="start_date">date de debut</label>
                    <input type="datetime-local" name="start_date" id="nameinput" placeholder="2023-07-05" value='' >
                </div>
                <div>
                    <label for="end_date">date de fin</label>
                    <input type="datetime-local" name="end_date" id="nameinput" placeholder="2023-07-30" value='' >
                </div>
                <div>
                    <label for="nameinput">Votre pseudo</label>
                    <input type="text" name="pseudo" id="nameinput" placeholder="twitch" value='' >
                </div>
                <div>
                    <select name="degres" id="pet-select">
                        <option value="">--choisir un degres--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Ajouter un article" name="envoyer">
                </div>
            </fieldset>
        </div>
    </form>

</div>

</body>
</html>
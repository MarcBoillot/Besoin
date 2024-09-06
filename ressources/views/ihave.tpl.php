<html>
    <body>
        <div class="container-contact">
            <div class="container-left">
            </div>
            <form action="?action=update" class="form" method="POST">
                <div class="container-right">
                    <fieldset class="fieldsetmecontacter">
                        <legend class="entete-contact">Vous répondez à la demande?</legend>
                        <br>
                        <div>
                            <label for="text">J'ai: </label>
                            <br>
                            <textarea name="text" id="message" cols="60" rows="2" placeholder="Ecrivez votre article" class="fieldtextarea">J'ai de l'ail de Corse</textarea><br>
                        </div>
                        <div>
                            <label for="author"> Author_id </label>
                            <input type="text" name="author_id" id="author" placeholder="" >
                        </div>
                        <div>
                            <input type="submit" value="répondre au besoin" name="envoyer">
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>

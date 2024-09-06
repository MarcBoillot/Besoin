<article>
    <?php $statement_articles = blogPostById($pdo, $_GET ['id']); ?>

        <h3><?= $statement_articles['title']?></h3>
        <p><?= $statement_articles['text']?></p>
    <p><i>Ecrit par <?= $statement_articles['pseudo']?></i></p>
        <p>Du <?= $statement_articles['date_fr']?></p>




    <?php $statement_comments = commentsByBlogPost($pdo, $_GET ['id']);?>
    <?php
    if(empty($statement_comments = commentsByBlogPost($pdo, $_GET['id']))) :
        echo 'No comments';
    else :
    foreach ($statement_comments as $value){
        ?>
            <div>comment :  <?=$value ['text'];?> </div>
            <div>pseudo : <?=$value ['pseudo'];?></div>

    <?php
    }endif;
    ?>
    <br>
    <a href="http://blog.local/index.php?action=">Retour aux articles</a>
</article>
<artcile>
     <?php $statement = lastBlogPosts($pdo);?>
    <?php
    if(empty($statement = lastBlogPosts($pdo))) :
        echo 'Il y a aucuns articles';
    else :
    foreach ($statement as $value){
        ?>
            <h3><?=$value ['title'];?> </h3>
            <div><i>by <?=$value ['pseudo'];?></i></div>
        <a href = "http://blog.local/index.php?action=blogpost&id=<?=$value ['id'];?>">Voir l'article</a>
    <?php
    }endif;
    ?>
</artcile>
<article>
    <h1>De quoi avez vous besoin ?</h1>
    <span class="form-btn">
        <a href="?action=create">J'AI BESOIN DE ...'</a>
    </span>

    <h1>Pouvez vous les aider ?</h1>
    <br>
    <br>
    <?php $statement = lastPosts($pdo); ?>

    <?php
    if (empty($statement = lastPosts($pdo))) :
        echo 'Own... pas de demandes pour l\'instant';
    else :
        foreach ($statement as $value) {
    ?>
            <div class="post-card">
                <h3><?= $value['text']; ?></h3>
                <div><i>by <?= $value['date']; ?></i></div>
                <div><i>by <?= $value['name']; ?></i></div>
                <a href="http://needit.local/index.php?action=post&id=<?= $value['id']; ?>">J'en ai !</a>
            </div>
            <br>
    <?php
        }
    endif;
    ?>
    <br>
    <br>

</article>
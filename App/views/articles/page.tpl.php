<div class="container is-flex-direction-column">
    <a href="<?= $router->generate('main-home') ?>">Revenir à la liste des articles</a>
    <section class="box is-10 my-5">
        <article class="content article">
            <h1 class="title is-1"><?= $article->getTitle() ?></h1>
            <p class="content"><?= $article->getContent() ?></p>
            <time class="time">Creation le : <?= $article->getCreatedAt() ?> <br></time>
            <?php if (!empty($article->getUpdatedAt())) : ?>
                <time class="time">Modification le : <?= $article->getUpdatedAt() ?></time>
            <?php endif ?>
        </article>
    </section>
    <div class="container p-5">
        <h2 class="title">Commentaires : </h2>
            <?php foreach ($comments as $currentComment) : ?>
        <section class="media">
                <article class="media-content">
                    <strong class="p-4"> <?= $currentComment->getAuthor() ?></strong>
                    <p><?= $currentComment->getContent() ?></p>
                    <small class="p-3">
                    <time>Creation le : <?= $currentComment->getCreatedAt() ?> <br></time>
                    <?php if (!empty($currentComment->getUpdatedAt())) : ?>
                        <time>Modification le : <?= $currentComment->getUpdatedAt() ?></time>
                    <?php endif ?>
                    </small>
                </article>
        </section>
            <?php endforeach; ?>
    </div>
</div>
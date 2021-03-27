<div class="container is-flex-direction-column">
    <a href="<?= $router->generate('main-home') ?>">Revenir à la liste des articles</a>
    <section class="section is-10">
        <article class="content article">
            <h1 class="title is-1"><?= $article->getTitle() ?></h1>
            <p class="content"><?= $article->getContent() ?></p>
            <time class="time">Creation le : <?= $article->getCreatedAt() ?> <br></time>
            <?php if (!empty($article->getUpdatedAt())) : ?>
                <time class="time">Modification le : <?= $article->getUpdatedAt() ?></time>
            <?php endif ?>
        </article>
    </section>
    <section class="section is-8">
        <h2 class="title is-3">Commentaires : </h2>
        <article class="content article">
            <span class="author">Paulo</span>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, voluptas.</p>
            <time class="time">20/02/21</time>
        </article>
    </section>
</div>
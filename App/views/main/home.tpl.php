<section class="section">
    <div class="tile is-flex-wrap-wrap is-justify-content-space-evenly">
        <?php foreach ($articlesToDisplay as $currentArticle) : ?>
            <div class="tile is-parent is-6">
                <article class="tile is-child box">
                    <p class="title"><?= $currentArticle->getTitle() ?></p>
                    <p class="subtitle"><?= $currentArticle->getSlug() ?></p>
                    <div class="content">
                        <p><?= $currentArticle->getIntroduction() ?></p>
                        <a href="<?php // TODO mettre le lien vers l'article avec l'id dynamique //?>">En lire plus</a>
                    </div>
                    <time> <?= $currentArticle->getCreatedAt() ?></time>
                </article>
            </div>
        <?php endforeach ?>
    </div>
</section>
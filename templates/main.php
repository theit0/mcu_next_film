<main>
    <section class="title">
        <h3>The next MARVEL's film is in </h3>
        <h1><?= $until_message ?></h1>
    </section>

    <section>
        <img src="<?= $poster_url ?>" width="200"/>
    </section>

    <section class="description">
        <h3><?= $title ?></h3>
        <p>Premieres on <?= $release_date ?></p>
    </section>

    <article>
        <p>The next movie is <b><?= $following_production["title"] ?> </b> and premieres on <?= $following_production["release_date"] ?>.</p>
    </article>
</main>
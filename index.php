

<?php
    const API_URL = 'https://whenisthenextmcufilm.com/api';

    # Inicializar sesión de curl; ch = curl handle
    $ch = curl_init(API_URL);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $data = json_decode($result, true);

    curl_close($ch);
?>


<?php
    $todayDate = new DateTime();
    $dateFilm = new DateTime($data["release_date"]);
    $daysTo = $todayDate -> diff($dateFilm) -> days;
?>

<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de MARVEL</title>
    <meta name="description" content="La proxima pelicula de MARVEL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<main>
    <section class="title">
        <h3>The next MARVEL's film is in </h3>
        <h1><?= $daysTo ?> days</h1>
    </section>

    <section>
        <img src="<?= $data["poster_url"] ?>" width="200"/>
    </section>

    <section class="description">
        <h3><?= $data["title"] ?></h3>
        <p>Premieres on <?= $data["release_date"] ?></p>
    </section>

    <article>
        <p>The next movie is <b><?= $data["following_production"]["title"]?> </b> and premieres on <?= $data["following_production"]["release_date"] ?>.</p>
    </article>
</main>

<style>
    * {
        margin: 0;
    }
    :root {
        color-scheme: light dark;
        font-family: system-ui;
    }
    body {
        display: grid;
        place-content: center;
        gap: 1rem;
    }
    img {
        border-radius: 24px;
    }
    main {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 1rem;
        height: 90vh;
    }

    .title {
        text-align: center;
    }
    .title h1 {
        font-size: 2rem;
    }
    .title h3,p {
        font-size: 1rem;
        font-weight: 400;
        color: #F5F5F5;
    }

    .description {
        text-align: center;
    }


    article p {
        font-size: .75rem ;
        color: #cccccc;
    }


</style>

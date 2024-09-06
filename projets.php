<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe</title>
    <link rel="stylesheet" href="css/style3.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <section id="section1">
            <div>
                <h2>Les Projets</h2>
                <p>Retrouvez ici tous les projets que j'ai réalisé</p>
            </div>
        </section>
        <section id="section4" class="max-width">
            <div id="div_section4">
            <?php include 'tableaux.php'; ?>
                <?php foreach ($projets as $projet){ ?>
                        <article>
                            <img src="<?=$projet['img'] ?>" alt="img">
                            <h3><?=$projet['title'] ?></h3>
                            <p><?=$projet['description'] ?></p>
                            <a href="projet.php?id=<?=$projet['id'] ?>" class="button_blue">Lire la suite</a>
                        </article>
                  <?php } ?>
            </div>
            <div id="pages">
                <a href="/projets.php" class="page-active">1</a>
                <a href="/projets2.php">2</a>
                <a href="/projets2.php">Suivant</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

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
    </header>
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
                <?php $compteur = 0; ?>
                <?php foreach ($projets as $projet){
                    if ($compteur < 5) { ?>
                        <article>
                            <img src="<?=$projet['img'] ?>" alt="img">
                            <h3><?=$projet['title'] ?></h3>
                            <p><?=$projet['description'] ?></p>
                            <a href="projet.php?id=<?=$projet['id']?>" class="button_blue">Lire la suite</a>
                        </article>
                        <?php $compteur++; 
                    }
                } ?>
            </div>
            <div id="pages">
                <a href="/projets.php">Precedent</a>
                <a href="/projets.php">1</a>
                <a href="/projets2.php" class="page-active">2</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>

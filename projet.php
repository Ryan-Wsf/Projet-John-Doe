<?php
$id_projet = $_GET['id'];

include 'tableaux.php';

$projet_actuel = null;
foreach ($projets as $projet) {
    if ($projet['id'] == $id_projet) {
        $projet_actuel = $projet;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <section id="section1">
            <div>
                <h2><?=$projet_actuel['shorttitle']?></h2>
                <p><?=$projet_actuel['type']?></p>
            </div>
        </section>
        <section id="section2">
            <div>
                <h2><?=$projet_actuel['shorttitle']?></h2>
                <p><?=$projet_actuel['description']?></p>
            </div>
            <img src="<?=$projet_actuel['img']?>" alt="img">
        </section>
        <section id="section3" class="max-width">
            <h2>Les compétences développées</h2>
            <div>
                <div>
                    <ul>
                        <li class="li_competences">
                            <a href="#sous_nav1">Langages de programmation</a>
                            <ul class="ul_competences" id="sous_nav1">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>TypeScript</li>
                                <li>PHP</li>
                                <li>Python</li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav2">Frameworks et bibliothèques</a>
                            <ul class="ul_competences" id="sous_nav2">
                                <li class="front-back-end">Front-end
                                    <ul>
                                        <li>React.js</li>
                                        <li>Angular</li>
                                        <li>Vue.js</li>
                                        <li>Jquery</li>
                                        <li>Boostrap</li>
                                    </ul>
                                </li>
                                <li class="front-back-end">Back-end
                                    <ul>
                                        <li>Node.js</li>
                                        <li>Express.js</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav3">Base de données</a>
                            <ul class="ul_competences" id="sous_nav3">
                                <li>MySQL</li>
                                <li>MongoDB</li>
                                <li>SQLite</li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav4">Outils de développement</a>
                            <ul class="ul_competences" id="sous_nav4">
                                <li>Git et GitHub</li>
                                <li>Babel</li>
                                <li>Visual Studio Code</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li class="li_competences">
                            <a href="#sous_nav5">Conception Web</a>
                            <ul class="ul_competences" id="sous_nav5">
                                <li>Responsive Web design</li>
                                <li>Connaissance des principes UX/UI</li>
                                <li>Adobe XD  / Figma / Sketch</li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav6">Services Web</a>
                            <ul class="ul_competences" id="sous_nav6">
                                <li>APIs Rest</li>
                                <li>GraphQL</li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav7">Sécurité</a>
                            <ul class="ul_competences" id="sous_nav7">
                                <li>Principes de sécurité Web</li>
                                <li>Gestions des sessions et des cookies</li>
                                <li>Authentification et autorisation</li>
                                <li>SSL/TLS</li>
                            </ul>
                        </li>
                        <li class="li_competences">
                            <a href="#sous_nav8">Autres compétences</a>
                            <ul class="ul_competences" id="sous_nav8">
                                <li>Testing et débogage</li>
                                <li>Performances et optimisations</li>
                                <li>SEO (Search Engine Optimisation)</li>
                                <li>Accesibilité Web (WCAG)</li>
                                <li>Gestion de projet et collaboration en équipe</li>
                                <li>Veille technologique et apprentissage continu</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="section4" class="max-width">
            <h2>Les projets réalisés</h2>
            <div id="div_section4">
                <?php $compteur = 0; ?>
                <?php foreach ($projets as $projet){
                    if ($compteur < 3) { ?>
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
            <div id="plus_projets">
                <a href="../projets.php" class="button_blue">Voir plus de projets</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
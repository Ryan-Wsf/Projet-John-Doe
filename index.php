<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <section id="section1" class="max-width">
            <article class="slide-down">
                <h2>John Doe - Developpeur Web et Web Mobile</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid modi, necessitatibus temporibus quae cupiditate optio. Maiores doloremque ea sapiente alias. Totam temporibus nulla maxime quisquam quisquam repellendus porro cumque distinctio facere!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid modi, necessitatibus temporibus quae cupiditate optio. Maiores doloremque ea sapiente alias. Totam temporibus nulla maxime nulla, quisquam repellendus porro cumque distinctio facere!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elitelit. Aliquid modi, necessitatibus temporibus quae cupiditate optio. Maiores doloremque ea sapiente alias. Totam temporibus nulla maxime, quisquam repellendus porro cumque distinctio facere!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid modi, necessitatibus temporibus quae cupiditate optio. Maiores doloremque ea sapiente alias. Totam temporibus nulla maxime, quisquam repellendus porro cumque distinctio facere!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elitnulla Aliquid modi, necessitatibus temporibus quae cupiditate optio. Maiores doloremque ea sapiente alias. Totam temporibus nulla maxime, quisquam repellendus porro cumque distinctio facere!</p>
                <a href="#contact2" class="button_yellow" >Contactez-moi</a>
                <div class="sub-menu" id="contact2">
                    <div>
                        <div>
                            <a href="#section1"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                        <form action="#">
                            <p>Me Contacter</p>
                            <label for="nom">Votre nom:</label>
                            <input type="text" name="nom" placeholder="Votre nom" required>
                        
                            <label for="email">Votre email:</label>
                            <input type="email" name="email" placeholder="Votre email" required>
                        
                            <label for="message">Votre message:</label>
                            <textarea name="message" placeholder="Votre message" required></textarea>
                        
                            <button type="submit">Envoyer la demande</button>
                        </div>
                    </form>
                </div>
            </article>
            <article class="grow-image">
                <img src="img/moi.png" alt="img">
            </article>
        </section>
        <section id="section2">
            <h2>Ma formation</h2>
            <div>
                <article>
                    <img src="img/dev-a-la-carte.png" alt="img">
                </article>
                <article>
                    <div>
                        <h3>Formation de développement à la carte</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, earum quaerat voluptates quas eos nam tempore aliquam ab consequatur provident nemo maxime praesentium libero voluptatum id nobis tenetur iste corrupti.</p>
                        <p>adipisicing elit. Illum, earum quaerat voluptates quas eos nam tempore aliquam ab adipisicing elit.</p>
                        <a href="/Carte.php" class="button_blue">En savoir plus</a>
                    </div>
                </article>
            </div>
        </section>
        <section id="section3">
            <div>
                <article>
                    <div>
                        <h3>Formation de développement à la carte</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, earum quaerat voluptates quas eos nam tempore aliquam ab consequatur provident nemo maxime praesentium libero voluptatum id nobis tenetur iste corrupti.</p>
                        <p>adipisicing elit. Illum, earum quaerat voluptates quas eos nam tempore aliquam ab adipisicing elit.</p>
                        <a href="#" class="button_blue">En savoir plus</a>
                    </div>
                </article>
                <article>
                    <img src="img/dwwm.png" alt="img">
                </article>
            </div>
        </section>
        <section id="section4" class="max-width">
            <h2>Mes compétences</h2>
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
        <section id="section5" class="max-width">
            <div>
                <h2>Mes Projets</h2>
                <a href="/projets.php" class="button_blue">Voir tout les projets</a>
            </div>
            <div id="div_section5">
                <?php include 'tableaux.php'; ?>
                <?php $compteur = 0; ?>
                <?php foreach ($projets as $projet){
                    if ($compteur < 3) { ?>
                        <article>
                            <img src="<?=$projet['img'] ?>" alt="img">
                            <h3><?=$projet['title'] ?></h3>
                            <p><?=$projet['description'] ?></p>
                            <a href="projet.php?id=<?=$projet['id'] ?>" class="button_blue">Lire la suite</a>
                        </article>
                        <?php $compteur++; 
                    }
                } ?>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="max-width">
        <div>
            <a href="/"><img src="img/Logo.png" alt="logo" width="180"></a>
            <h1>Developpeur Web et Web Mobile</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#" class="page-active">Accueil</a></li>
                <li><a href="/index.php">Qui suis-je ?</a></li>
                <li><a href="/Carte.php">Ma formation</a></li>
                <li><a href="#">Mes compétences</a></li>
                <li><a href="/projets.php">Mes projets</a></li>
                <li id="contactez-moi"><a href="#contact">Contactez Moi</a></li>
                <div class="sub-menu" id="contact">
                    <div>
                        <div>
                            <a href="#"><i class="fa-solid fa-xmark"></i></a>
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
            </ul>
        </nav>
        <i class="fa-solid fa-bars" id="burger"></i>
    </header>
</body>
</php>
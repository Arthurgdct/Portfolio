<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Marck+Script&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/72e8ccb00a.js" crossorigin="anonymous"></script>
    <title>Portfolio Agc</title>
</head>

<body>
    <header>
        <nav>
            <a id="logo" href="#">Agc</a>
            <i id="burger" class="fa-solid fa-bars"></i>
        </nav>
    </header>

    <main>
        <section id="home">
            <h1 id="portfoliotitle">Portfolio</h1>
            <h2 class="hometitle">Arthur<br>Grand-clement</h2>
            <h2 class="hometitle">Développeur<br>Web</h2>
        </section>
        <section>
            <h2 class="title">Présentation</h2>
            <img id="profilpicture" src="Assets/Img/1661325227976.jpg" alt="Photo de moi">
            <div id="presentation">
                <p class="paragraphpresentation">Je m’appel Arthur, j’ai 26 ans et je suis développeur web junior.</p>
                <p class="paragraphpresentation">Après avoir suivi une formation et obtenu un dipôme de développeur web, web mobile, j'ai développé un éventail de compétences et accumulé une grande quantité de connaissances en participant à divers projets qui impliquaient l'utilisation de différents langages de programmation.</p>
                <p class="paragraphpresentation">Conscient de la nécessité de continuer à progresser, je suis extrêmement déterminé à poursuivre mon apprentissage afin de me perfectionner.</p>
            </div>
        </section>
        <section id="softskill">
            <div class="skill">
                <i class="fa-regular fa-hourglass-half iconsize"></i>
                <p>Patience &<br>détermination</p>
            </div>
            <div class="skill">
                <i class="fa-solid fa-user iconsize"></i>
                <i class="fa-solid fa-user iconsize"></i>
                <p>Collaboration &<br>esprit d'équipe</p>
            </div>
            <div class="skill">
                <i class="fa-solid fa-book iconsize"></i>
                <p>Curiosité & soif<br> de connaissance</p>
            </div>
            <div class="skill">
                <i class="fa-solid fa-shuffle iconsize"></i>
                <p>Flexibilité & sens<br> de l'organisation</p>
            </div>
        </section>
        <section>
            <h2 class="title">Portfolio</h2>
        </section>
        <section id="cv">
            <a href="">Telécharger<br>mon cv<br><i id="cvicon" class="fa-solid fa-file-arrow-down iconsize"></i></a>
        </section>
        <section>
            <h2 class="title">Contact</h2>
            <form id="contactform" action="" method="post">
                <div class="inputform">
                    <input type="text" id="name" name="user_name" placeholder="Nom & prénom*">
                </div>
                <div class="inputform">
                    <input type="email" id="email" name="user_email" placeholder="Adresse email*">
                </div>
                <div class="inputform">
                    <input type="text" id="object" name="user_object" placeholder="Objet*">
                </div>
                <div class="inputform">
                    <textarea placeholder="Votre message*" name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <input id="formbutton" type="button" value="Envoyer mon message">
            </form>
        </section>
    </main>
    <footer>
        <p>© Grand-clement Arthur | 2023</p>
        <div id="linkfooter">
            <a href=""><i class="fa-brands fa-linkedin iconsize"></i></a>
            <a href=""><i class="fa-brands fa-github iconsize"></i></a>
        </div>
    </footer>
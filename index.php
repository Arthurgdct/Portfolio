<?php 
include 'Controllers/contactCtrl.php'
?>
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

        <nav id="navbar">
            <div id="sidebar">
                <i id="xmark" class="fa-solid fa-xmark"></i>
                <ul id="btnsidebar">
                    <li class="btnsidebar"><a class="btnmenu" href="#presentationsection">Présentation</a></li>
                    <li class="btnsidebar"><a class="btnmenu" href="#portfoliosection">Portfolio</a></li>
                    <li class="btnsidebar"><a class="btnmenu" href="#contactsection">Contact</a></li>
                </ul>
            </div>
            <div id="nav">
                <a id="logo" href="#">Agc</a>
                <ul id="btnnavbar">
                    <li><a class="btnnav" href="#presentationsection">Présentation</a></li>
                    <li><a class="btnnav" href="#portfoliosection">Portfolio</a></li>
                    <li><a class="btnnav" href="#contactsection">Contact</a></li>
                </ul>
                <i id="burger" class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <main>
        <section id="home">
            <h1 id="portfoliotitle">Portfolio</h1>
            <h2 class="hometitle">Arthur<br>Grand-clement</h2>
            <h2 class="hometitle">Développeur<br>Web</h2>
        </section>
        <section>
            <h2 id="presentationsection" class="title">Présentation</h2>
            <div id="aboutme">
                <img id="profilpicture" src="Assets/Img/1661325227976.jpg" alt="Photo de moi">
                <div id="presentation">
                    <p class="paragraphpresentation">Je m’appel Arthur, j’ai 26 ans et je suis développeur web junior.</p>
                    <p class="paragraphpresentation">Après avoir suivi une formation et obtenu un dipôme de développeur web, web mobile, j'ai développé un éventail de compétences et accumulé une grande quantité de connaissances en participant à divers projets qui impliquaient l'utilisation de différents langages de programmation.</p>
                    <p class="paragraphpresentation">Ayant pleinement conscience de l'importance cruciale de maintenir une progression constante dans le domaine du développement web, et conscient que le monde technologique évolue à un rythme effréné, je nourris une détermination inébranlable à persévérer dans mon incessant apprentissage, dans le but de perfectionner mes compétences et mes connaissances acquises.</p>
                </div>
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
        <section id="portfolio">
            <h2 id="portfoliosection" class="title">Portfolio</h2>
            <div id="firstline">
                <div>
                    <img class="screenportfolio" src="Assets/Img/screenuniversrp.jpg" alt="">
                    <p>UniversRp est le site qui ma permit de passer mon diplôme en octobre 2022, c’est un site qui permet de jouer à des jeux de rôle sans aucun matériel, tout est fourni sur le site.</p>
                </div>
                <div>
                    <img class="screenportfolio" src="Assets/Img/screenagc.jpg" alt="">
                    <p>Mon premier portfolio et site sur lequel j’essayais de développer des nouvelles fonctionallités et m’entrainais.</p>
                </div>
            </div>
            <div id="secondline">
                <div>
                    <img class="screenportfolio" src="Assets/Img/screenhopital.jpg" alt="">
                    <p>Site que j’ai réalisé lors de ma formation en 2022, c’est sur ce site que j’ai réalisé mon premier CRUD.</p>
                </div>
                <div>
                    <img class="screenportfolio" src="Assets/Img/screenportfolio" alt="">
                    <p>Le site sur lequel vous êtes actuellement et mon nouveau portfolio !</p>
                </div>
            </div>
        </section>
        <section id="cv">
            <!--VVV Rajouter le lien du cv VVV -->
            <a href="">Telécharger<br>mon cv<br><i id="cvicon" class="fa-solid fa-file-arrow-down iconsize"></i></a>
        </section>
        <section>
            <h2 id="contactsection" class="title">Contact</h2>
            <form id="contactform" action="#contactsection" method="POST">
                <div class="inputform">
                    <input type="text" id="lastname" name="lastname" placeholder="Nom*">
                    <?php if (isset($errors['lastname'])) { ?>
                    <p class="errors">⚠️<?= $errors['lastname'] ?>⚠️</p>
                <?php } ?>
                </div>
                <div class="inputform">
                    <input type="email" id="email" name="email" placeholder="Adresse email*">
                    <?php if (isset($errors['email'])) { ?>
                    <p class="errors">⚠️<?= $errors['email'] ?>⚠️</p>
                <?php } ?>
                </div>
                <div class="inputform">
                    <input type="text" id="object" name="object" placeholder="Objet*">
                    <?php if (isset($errors['object'])) { ?>
                    <p class="errors">⚠️<?= $errors['object'] ?>⚠️</p>
                <?php } ?>
                </div>
                <div class="inputform">
                    <textarea placeholder="Votre message*" name="message" id="message" cols="30" rows="10"></textarea>
                    <?php if (isset($errors['message'])) { ?>
                    <p class="errors">⚠️<?= $errors['message'] ?>⚠️</p>
                <?php } ?>
                </div>
                <?php if (isset($success)) { ?>
                    <p id="success"><?= $success ?></p>
                <?php } ?>
                <input id="formbutton" name="validform" type="submit" value="Envoyer mon message">
            </form>
        </section>
    </main>
    <footer>
        <p>© Grand-clement Arthur | 2023</p>
        <div id="linkfooter">
            <a target="_blank" href="https://www.linkedin.com/in/arthur-gdct/"><i class="fa-brands fa-linkedin iconsize"></i></a>
            <a target="_blank" href="https://github.com/Arthurgdct"><i class="fa-brands fa-github iconsize"></i></a>
        </div>
    </footer>
    <script src="Assets/Js/script.js"></script>
</body>
    
    
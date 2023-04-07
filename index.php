<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Iceberg Super Mario 64</title>
    <link rel="stylesheet" href="style.css">
    <head>

    <script>async function demo() {
        function wait(t) {
        return new Promise(resolve => {
            setTimeout(() => {
            resolve();
            }, t);
        });
        }
        await wait(400);
        document.querySelector('#hamburger-toggle').focus();
        await wait(400);
        document.querySelector('.content a').focus();
        await wait(400);
        document.querySelector('#hamburger-toggle').focus();
        await wait(400);
        document.querySelector('#hamburger-toggle').checked = true;
        await wait(400);
        document.querySelector('.nav-list .nav-list-item:nth-child(1) a').focus();
        await wait(200);
        document.querySelector('.nav-list .nav-list-item:nth-child(2) a').focus();
        await wait(200);
        document.querySelector('.nav-list .nav-list-item:nth-child(3) a').focus();
        await wait(200);
        document.querySelector('.nav-list .nav-list-item:nth-child(2) a').focus();
        await wait(200);
        document.querySelector('.nav-list .nav-list-item:nth-child(1) a').focus();
        await wait(200);
        document.querySelector('#hamburger-toggle').focus();
        await wait(400);
        document.querySelector('#hamburger-toggle').checked = false;
    }
    demo();

  </script>

    <script> function changeImage() {
        var image = document.getElementById('myImage');
            if (image.src.match('dori.png')) {
                image.src = 'dori1.png';
            } else {
                image.src = 'dori.png';
            }}  
    </script>

    <script> function lancer_son() {
        var audio = document.getElementById('bloc_zelda_son');
        audio.volume = 1; 
        audio.play();}
    </script>

    <script> function lancer_son() {
        var audio = document.getElementById('bloc_beta_son');
        audio.volume = 1; 
        audio.play();}
    </script>

    <script> function Yemen() {
        var div = document.getElementById("d1");
            if (div.style.opacity === "0") {
                div.style.opacity = "1";} 
            else {
                div.style.opacity = "0";}}
    </script>

    <script> function Egypte() {
        var div = document.getElementById("d2");
            if (div.style.opacity === "0") {
                div.style.opacity = "1";} 
            else {
                div.style.opacity = "0";}}
    </script>


</head>


<body>
    
    <nav role="navigation">
    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
        <a href="#"><li>La Surface</li></a>
        <a href="#etage2"><li>Sous la Surface</li></a>
        <a href="#etage3"><li>Les Profondeurs</li></a>
        <a href="#etage4"><li>Les Abysses</li></a>
        </ul>
    </div>
    </nav>
    
    <div id="d1">
    </div>

    <div id="d2">
    </div>

    <div class="Titre"> 
        Iceberg<br>Super Mario 64
    </div>

    <div class="zelda">
        <div class="zelda-inner">
            <div class="zelda-front">
                <img src="ooc2.png">
            </div>
            <div class="zelda-back">
                <div class="occ">
                    <img src="ooc.png">
                </div>
                <div class="bloc_pere">
                    <audio id="bloc_zelda_son" controls="controls" preload="none">
                        <source src="Chantooc.mp4" type="audio/ogg" />
                    </audio>
                </div>
                <h2>Un tableau au deuxième étage ne donne accès à aucun monde et pourtant un secret y est dissimulé.</h2>
            </div>
        </div>
    </div>
    
    <div class="bigbrother">

        
        <div class="beta">
            <div class="son">
                <audio id="bloc_beta_son" controls="controls" preload="none">
                <source src="son-beta.mp4" type="audio/ogg" /></audio>
            </div>
            <h2>Heureusement qu’ils ont changés les sons de la béta...</h2>
            <img src="casquette.png" onclick="lancer_son();" class="casquette" />
        </div>

        <div class="ptiup">
            <img src="1up.png" class="casquette">
            <h2>Dans le premier niveau de Super Mario 64 un 1up se révèle derrière un mur semblant parfaitement normal. Et si d’autres étaient cachés à travers le jeu ? Et si d’autres champignons étaient coincés entre les murs ?</h2>
        </div>
        <div class="block">
            <img src="block.png" class="casquette">
        </div>

        <div class="l">  
            <p>L IS REAL 2401</p>
            <h2>Sur la stèle du jardin de Peach, une écriture floue a été déchiffrée par les joueurs «L is real 2401». L’éventualité de l’apparition de Luigi dans le jeu a alors fait fantasmer toute la communauté sans pour autant donner suite. C'est 24 ans et 1 mois après que le plus gros leak de Nintendo se produit, révélant ainsi le Sprite de Luigi dans les codes de Super Mario 64.</h2>
        </div>

        <div class="Rbomb" id="etage2">
        <h2>Après avoir vaincu le roi Bo-Bomb au sommet du premier niveau, si vous y retournez, au pied de la montagne dans un creux ou auparavant deux boules noirs s’entrechoquaient, une troisième est apparu. Les barreaux déjà présents prennent alors leur sens. C’est une prison ou roule sans cesse le roi déchu à présent.</h2>
        </div>

        <div class="Rire" tabindex="0">
            <h2>Certains streamers ont pu l’enregistrer, ce rire extrêmement rare a effrayé un grand nombre d’habitués du manoir des boos. </h2>
            <div class="scene-1">
            </div>
            <div class="scene-2">
                <a href="https://www.youtube.com/watch?v=t_eTLXxA9m4">
                    <h4>Here</h4>
                </a>
            </div>
        </div>

        <div class="Monstre">
            <img src="dori.png" id="myImage" onclick="changeImage()">
            <h2>Le gameplay nous montre le meilleur de cette créature et pourtant un unique panneau laisse entrevoir la noirceur de son âme."Don't become his lunch". Une ligne de dialogue supprimé dans la version francaise du jeu.</h2>
        </div>

        <div class="blanc">
            <a href="Blanc.php">
                <img src="miroir.png" class="casquette">
            </a>
        </div>

        <div id="yoshi">
            <h2>Sur le toit du château on peut rencontrer un yoshi. Il parle et sa carapace est différente du yoshi que l’on connait tous, dépourvu de langage. A la fin de son dialogue il saute du toit et on ne le revoit plus. Beaucoup pense qu’il se serait suicidé à ce moment-là.</h2>
            <img class="bottom shadow" src="yoshi.png">
            <img class="top shadow" src="Fyoshi.gif">
        </div>

        <img class="champi1" id="etage3" src="Champi.gif">
        <img class="champi2" src="Champi.gif">
        <img class="champi3" src="Champi.gif">
        <img class="champi4" src="Champi.gif">
        <img class="champi5" src="Champi.gif">
        <div class="champi42">
            <img class="champi" src="Champi.gif">
            <h2>Plus le joueur remporte d’étoiles plus les Toads réapparaissent dans le château, sur la façade de l’entrée le vitrail n’est pas le même que lorsqu’on regarde au même endroit à l’intérieur du château : les couleurs et la posture change. L’épaisseur du mur à cette endroit parait démesurer également. On peut en conclure que les Toad sont prisonniers des murs et que la princesse se trouve quand à elle emprisonnée derrière le vitrail la représentant.</h2>
        </div>

        <div class="wario">
            <a href="Wario.php">
                <img src="wario.png" class="casquette">
            </a>
            <h2>Dans la béta une course poursuite devait avoir lieu : Mario fuyant une tête immense de Wario. La scène jugée surement non-adapté au public cible de la franchise, seul un reste de cet événement est présent dans la version finale, apparaissant aléatoirement et terrorisant mon âme d’enfant encore aujourd’hui (j’en ai fait des cauchemars à l’époque).</h2>
        </div>

        <div id="button1" onclick="Yemen()">
            <h2>Dans le niveau trempé-séché on peut s’apercevoir que le décor en fond est en réalité la ville de Shibām au Yémen avec un filtre comme si elle se trouvait sous l’océan une référence encore actuellement jamais expliqué. Une théorie fait alors surface et si Super Mario 64 se déroulait sur terre. Théorie appuyée par la présence de 3 pyramides dans un niveau rappelant l’Egypte et d’un niveau dans la neige où une référence au père noël y est présente rappelant le pôle Nord.</h2>
            <br>YEMEN !
        </div>

        <div id="button2" onclick="Egypte()">
            <br>EGYPTE !
        </div>

       <div class="spider">
            <img src="aquareignée.jpg" class="casquette">
            <h2>De nombreux joueurs ont fait l’expérience de cauchemars identiques sur Super Mario 64 le plus souvent liés au monde trempé-séché ou à Wario, c’est avec l’arrivée d’internet que les joueurs ont pu s'en appercevoir.</h2>
        </div> 

        <div class="poubelle">
            <div class="jeu">
                <img src="not_for_sale.png" class="casquette">
                <h2>Nintendo comme toutes les entreprises de jeux vidéo envoyaient des copies invendables du jeu pour que les vendeurs puissent le faire tester dans leur boutique. Pourtant la version de test était strictement identique alors pourquoi la rendre invendable et poursuivre en justice des gens pour si peu. Dans le même registre Nintendo met un point donneur à poursuivre quoiqu’onques trifouillent son jeu pour dénicher ses secrets. On rapporte qu’encore de nombreux mystères sont présent dans le code et sont à découvrir mais la réalité est que certains posent souvent plus de problèmes que d’autres et devraient surement restés cachés pour le bien de la franchise.</h2>
            </div>
            <img src="poubelle.png" class="casquette">
        </div>

        <div class="IA" id="etage4">
            <img src="IA.jpg">
            <h2>Depuis le début toutes ces histoires vous ont pour la plupart fait rire et vous vous dites que rien n’est vraie ou encore que la plupart sont des coincidences effrayantes. Pourtant n’aviez-vous jamais ressenti une sensation de malaise lors de la prise en main de ce jeu sur la console d’un ami. Comme si un élément n’était pas à sa place. Tous les bugs et histoires effrayantes ayant surpris les joueurs durant ces dernières années seraient du à une unique fonctionnalité de la cartouche encore cachée par les développeur : l’intelligence artificielle de Super Mario 64. Elle est belle et bien présente et s’adapte au joueur afin de lui proposé une meilleure expérience de jeu. Le quatrième étage du château est l’exemple type : un étage accessible uniquement quand le jeu décide que le joueur est apte à si aventurer. On peut donc partir du principe que tout cet Iceberg est une conséquence de l’aléatoire de L’I.A. Nintendo a également toujours mis un point d’honneur à poursuivre en justice toute décompilation du jeu pour éviter que l’on découvre la vérité : toutes les cartouches de Super Mario 64 sont personnalisées et uniques au monde.</h2>
        </div>

    </div>
</body>
</html>
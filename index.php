<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title></title>

        <script src="./static/js/jquery-3.5.0.min.js"></script>


        <link rel="stylesheet" href="./static/css/main.css">
    
    </head>
    <body id="body">
        <div id="page_content">
        <header id="header">
            <div id="logo"><img src="./static/img/logo_ecole.jpg"></div>
            <div id="title"><h1>Jouons pour le Liban</h1></div>
            <div id="lebanon_flag"><img src="./static/img/lebanon_flag.jpg"></div>
        </header>
        <nav>
            <ul id="myTabs" class="nav nav-pills" role="tablist">
                <li id="activated_rules" role="presentation" class="nav_item active"><a href="#rules" aria-controls="rules" role="tab" data-toggle="pill">Règles</a></li>
                <li id="activated_board_game" role="presentation" class="nav_item"><a href="#game_board" aria-controls="game_board" role="tab" data-toggle="pill">Plateau de jeu</a></li>
                <li id="activated_gift" role="presentation" class="nav_item"><a href="#gift" aria-controls="gift" role="tab" data-toggle="pill">Don</a></li>
                <li  id="activated_exp" role="presentation" class="nav_item"><a href="#explanations" aria-controls="explanations" role="tab" data-toggle="pill">Explications des cases</a></li>
                <li id="activated_quizz" role="presentation" class="nav_item"><a href="#quizz" aria-controls="quizz" role="tab" data-toggle="pill">Quizz</a></li>
            </ul>
        </nav>
        <br><br>
        <div id="main_content" class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="rules">
                <div class="title">
                    <h1>Règles du jeu</h1>
                </div>
                <div class="part_content">
                    <h2>But du jeu</h2>
                    <p>S’amuser le plus possible en famille en participant aux épreuves proposées dans chaque case et faire un don pour l’école Notre Dame de la Paix du Liban.</p>
                    <h2>Joueurs</h2>
                    <p>Ce jeu est prévu pour votre famille. Vous pouvez choisir un seul joueur ou un joueur par membre de la famille, mais les épreuves sont à faire ensemble. À vous de choisir si vous voulez refaire l’épreuve quand un autre membre tombe sur la case.</p>
                    <h2>Matériel</h2>
                    <p>Le plateau de jeu : soit celui rapporté par votre enfant, soit celui <a href=#>imprimé par vos soins</a><br>
                    Un dé, un pion par joueur.<br>
                    <h2>Déroulement</h2>
                    <p>Comme un jeu de l’oie avec trois sortes de cases :<br>
                        Cases Liban : Quiz sur le Liban : utilisez la feuille Liban pour y répondre <br>
                        Cases de couleur : des épreuves dont les explications sont <span><a href="#explanations" aria-controls="explanations" role="tab" data-toggle="pill" class="active_explanations">ICI</a></span> <br>
                        Cases spéciales  : </p>
                        <ul>
                            <li>Case stop : prendre 15 secondes de silence</li>
                            <li>Case cadeau : faire un compliment à un joueur</li>
                            <li>Case lancer de dé (rejouer)</li>
                        </ul>
                        <p>Vous pouvez aussi utiliser ce jeu comme un calendrier de l’Avent et faire une case par jour : dans ce cas remplacez la case <strong>lancer de dé</strong> par un défi choisi en famille.</p>
                    <h2>Don à Notre Dame du Liban...</h2>
                    <p>...à ne pas oublier : cliquer <span><a href="#gift" aria-controls="gift" role="tab" data-toggle="pill" class="active_gift">ICI</a></span>.</p>
                    <h2>Documents joints</h2>
                    <ul>
                        <li><a href="#">Règles du jeu  (PDF - ko) : Jouons pour le Liban</a></li>
                        <li><a href="#">Plateau de jeu à imprimer si besoin</a></li>
                        <li><a href="#">Explications des épreuves.pdf   Jouons pour le Liban</a></li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="game_board">
                <div class="title">
                    <h1>Plateau de jeu</h1>
                </div>
                <div class="part_content">
                    <img src="./static/img/plateau.jpg">
                    <p>Vous pouvez aussi utiliser ce jeu comme un calendrier de l’Avent et faire une case par jour : dans ce cas remplacez la case <strong>lancer de dé</strong> par un défi choisi en famille.</p>            
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="gift">
                <div class="title">
                    <h1>Notre don</h1>
                </div>
                <div class="part_content">
                    <a href="#">(télécharger le rib)</a>
                    <p>Ce jeu nous l’avons préparé pour nous donner la possibilité d’aider l’école Notre Dame de la Paix au Liban qui a bien souffert à cause de l’<a href="#">explosion</a>.</p>
                    <p>Vous pouvez le faire :</p>
                    <ul>
                        <li>Par chèque à l’ordre de l’école joie de vivre en écrivant au dos du chèque «DON POUR LE LIBAN».</li>
                        <li>Par virement à l’école Joie de Vivre en précisant «DON POUR LE LIBAN» dans l’intitulé.</li>
                        <li>Par espèces (par exemple faire une tirelire à la maison et la remplir jusqu’à Noël) à remettre sous enveloppe en précisant «DON POUR LE LIBAN»</li>
                    </ul>
                    <p>Merci pour votre générosité.</p>

                    <p>Les dons transitent par l'école pour ne verser qu'une fois les frais de virement vers le Liban qui sont élevés</p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="explanations">
                <div class="title">
                    <h1>Lumière sur les cases oranges</h1>
                </div>
                <div class="part_content">
                    <p>Cliquer sur le numéro pour avoir l'explication !</p>
                    <h2>Explication de la case</h2>
                    <div id="case0"><p>balal</p></div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="quizz">
                <div class="title">
                    <h1>Quizz</h1>
                </div>
                <div class="part_content"></div>
            </div>
        </div>
        </div>
        <script src="./static/js/main.js"></script>
        

    </body>
</html>

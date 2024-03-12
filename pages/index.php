<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Fréderic - Multi Services</title>
</head>
<body>
    <?php
    include "../composants/navbar.php"; 
    ?>
    <main>
        <section>
            <div class="presentation__container">
                <div class="presentation__text">
                    <h2>Des services personnalisés !</h2>
                    <p class="presentation__text--nom">Fréderic Maillot</p>
                    <p>Bonjour et bienvenue ! Je m'appelle Frédéric, et je suis ravi de vous proposer mes services. À 45 ans, originaire de La Réunion, mon parcours professionnel est profondément influencé par ma culture et mes valeurs.</p>
                    <p>Issu d'une île riche en diversité culturelle, j'ai appris dès mon plus jeune âge l'importance du respect, de l'écoute et du travail acharné. Ces valeurs sont au cœur de tout ce que je fais, que ce soit dans mes interactions avec mes clients ou dans la qualité de mon travail.
                    </p>
                    <p>En tant que professionnel expérimenté, je m'engage à fournir des services de première qualité, alliant expertise technique et sensibilité culturelle. Je suis là pour répondre à vos besoins avec précision et fiabilité.</p>
                    <a href="#" class="suite">afficher la suite ...</a>
                    <script>
                        $(document).ready(function(){
                            var $paragraphe2 = $('p:eq(3)');
                            $paragraphe2.hide();
                            $('a.suite').on("click", function(){
                                if($paragraphe2.is(':hidden')){
                                    $paragraphe2.show('slow');
                                    $(this).text('masquer la suite...');
                                }else{
                                    $paragraphe2.hide("slow");
                                    $(this).text("afficher la suite...");
                                    return false;
                                }
                            });
                        });
                    </script>
                </div>
                <div class="presentation__image">
                    <img src="../assets/fredpfp.png" alt="photo">
                </div>
            </div>
        </section>
        <section>
            <div class="services__container">
                <div class="services__text">
                    <h1>Mes services</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>  
                <div class="services__cards">
                    <div class="card">
                        <div class="card__image"><img src="../assets/eclairLogo.png" alt="Éclair">
                        </div>
                        <div class="card__button"><a href="#"><button>Voir plus</button></a>
                        </div>
                        <div class="card__text">Électricité</div>
                    </div>
                    <div class="card">
                        <div class="card__image"><img src="../assets/plomberieLogo.png" alt="Plomberie"></div>
                        <div class="card__button"><a href="#"><button>Voir plus</button></a>
                        </div>
                        <div class="card__text">Plomberie</div>
                    </div>
                    <div class="card">
                        <div class="card__image"><img src="../assets/maconnerieLogo.png" alt="Briques"></div>
                        <div class="card__button"><a href="#"><button>Voir plus</button></a></div>
                        <div class="card__text">Maçonnerie</div>
                    </div>
                    <div class="card">
                        <div class="card__image"><img src="../assets/montageLogo.png" alt="Meuble"></div>
                        <div class="card__button"><a href="#"><button>Voir plus</button></a></div>
                        <div class="card__text">Montage</div>
                    </div>
                </div>     
            </div>
        </section>
        <section>
            <div class="choice__container">
                <div class="choice__text">
                    <h1>Pourquoi Choisir Multi-Services</h1>
                    <p>Multi-Services vous accompagne de A à Z pour tout vos projets !</p>
                </div>
                <div class="choice__cards">
                        <div class="card1">
                            <div class="card1__front">
                                <p>?</p>
                            </div>
                            <div class="card1__back">
                                <p>COM</p>
                                <p>PÉ</p>
                                <p>TENT</p>
                            </div>
                        </div>
                        <div class="card1">
                            <div class="card1__front">
                                <p>?</p>
                            </div>
                            <div class="card1__back">
                                <p>FIA</p>
                                <p>BLE</p>
                            </div>
                        </div>
                </div>
                <div class="choice__cards choice__cards--wrap">
                    <div class="card1">
                        <div class="card1__front">
                            <p>?</p>
                        </div>
                        <div class="card1__back">
                            <p>RÉ</p>
                            <p>AC</p>
                            <p>TIF</p>
                        </div>
                    </div>
                </div>
        </section>
        <section>
            <div class="devis__container">
                <h1>Multi-Services vous propose votre devis en ligne !</h1>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenu-footer">
            <div class="bloc footer-services">
                <h3>Mes services</h3>
                <ul class="liste-services">
                    <li><a href="#">Electricité</a></li>
                    <li><a href="#">Plomberie</a></li>
                    <li><a href="#">Montage de meubles</a></li>
                    <li><a href="#">Maçonnerie</a></li>
                </ul>
            </div>
            <div class="bloc footer-contact">
                <h3>Contactez-moi</h3>
              <!-- Mettre le numéro PRO si il y en a un sinon non -->
                <p>10-10-10-10-10</p>
                <p>supportclient@contact.com</p>
                <p>Orléans</p>
                <p>Chartres</p>
                <p>Paris</p>
            </div>
            <div class="bloc footer-horaire">
                <h3>Mes horraires</h3>
                <ul class="liste-horaires">
                  <!-- Demander les horraires en vue de modification-->
                    <li>✅ &ensp;Lun 24H / 24H</li>
                    <li>✅ &ensp;Mar 24H / 24H</li>
                    <li>✅ &ensp;Mer 24H / 24H</li>
                    <li>✅ &ensp;Jeu 24H / 24H</li>
                    <li>✅ &ensp;Ven 24H / 24H</li>
                    <li>✅ &ensp;Sam 24H / 24H</li>
                    <li>✅ &ensp;Dim 24H / 24H</li>
                </ul>
            </div>
            <div class="bloc footer-medias">
                <h3>Mes réseaux</h3>
                <ul class="liste-medias">
                    <li><a href="#"><img src="../assets/facebook.png" alt="facebook">&ensp; Facebook</a></li>
                    <li><a href="#"><img src="../assets/instagram.png" alt="instagram">&ensp; Instagram</a></li>
                    <li><a href="#"><img src="../assets/twitter.png" alt="twitter">&ensp; Twitter</a></li>
                    <li><a href="#"><img src="youtube_4494485.png" alt="youtube">&ensp; Youtube</a></li>
                </ul>
            </div>
        </div>
        <div id="marque">&copy;F Multi Services Tout Droits Réservés</div>
    </footer>
</body>
</html>
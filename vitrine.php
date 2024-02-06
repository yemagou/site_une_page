<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>VITRINE</title>
    </head>
        <body>
            <header>            
                <nav>
                        <ul>
                            <li><a href="#accueil">accueil</a></li>
                            <li><a href="#materiel">matériel</a></li>
                            <li><a href="#tarifs">tarifs</a></li>
                            <li><a href="#contact">contact</a></li>
                        </ul>
                </nav>
            
                <div class="intro">
                    <section id="accueil">
                        <h1>GYM YONOS</h1>
                        <p>Dépassez vos limites.</p>
                        <p>Entrainez-vous.</p>
                        <p>Progressez.</p>
                        <button><a href="#materiel">Equipement</a></button>
                        <button><a href="#contact">Contact</a></button>   
                    </section>
                </div> 
            </header>
                    <div class="block">
                    <h1>SE(RE)PRENDRE EN MAIN</h1>
                    <section class="bon">
                        <article>
                            <div class="info1">&nbsp;</div>
                            <h2>Faire partir d'un groupe</h2>
                            <p>
                                Lorem ipsum dolor sit amet,consectectur adipiscing elit. Placelat odit, adipiscin officia dolor ad ex.
                            </p>
                        </article>
                        <article>
                            <div class="info2">&nbsp;</div>
                            <h2>Atteindre ses objectifs</h2>
                            <p>
                                Lorem ipsum dolor sit amet,consectectur adipiscing elit. Placelat odit, adipiscin officia dolor ad ex.
                            </p>
                        </article>
                        <article>
                            <div class="info3">&nbsp;</div>
                            <h2>Exploser ses limites</h2>
                            <p>
                                Lorem ipsum dolor sit amet,consectectur adipiscing elit. Placelat odit, adipiscin officia dolor ad ex.
                            </p>
                        </article>
                    </section>
                    </div>
                        <section class="fond">
                            <div class="x">
                                <h3>Salle de sport</h3>
                                <p>
                                    Lorem ipsum, dolor sit amet consectectur adipiscing elit. Inventore ipsum corporis corrupti?
                                </p>
                                <button>voir les prix</button>
                            </div>
                            <div class="y">
                                <h3>Cross Fit</h3>
                                <p>
                                    Lorem ipsum, dolor sit amet consectectur adipiscing elit. Inventore ipsum corporis corrupti?
                                </p>
                                <button>voir les prix</button>
                            </div>
                        </section>
                                <div class="block">
                                    <h1 id="materiel">les équipements</h1>
                                    <section class="dev">
                                        <article>
                                            <div class="img1">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img2">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img3">&nbsp;</div>
                                        </article>
                                    </section>
                                    <section class="dev">
                                        <article>
                                            <div class="img4">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img5">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img6">&nbsp;</div>
                                        </article>
                                    </section>
                                    <section class="dev">
                                        <article>
                                            <div class="img7">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img8">&nbsp;</div>
                                        </article>
                                        <article>
                                            <div class="img9">&nbsp;</div>
                                        </article>
                                    </section>
                                </div>
                                            <div class="courage">
                                                <h3>COURAGE.</h3>
                                            </div>
                                            <div class="block">
                                                <h1 id="tarifs">les tarifs</h1>
                                                <section class="z">
                                                    <div class="basique">
                                                        <h3>BASIQUE</h3>
                                                       <p><span>20<sup>F</sup></span>/mois</p> 
                                                        <p><img src="ressources/check.svg" alt="">Salle libre</p>
                                                        <p><img src="ressources/check.svg" alt="">24h/24</p>
                                                        <p><img src="ressources/cross.svg" alt="">Coach</p>
                                                        <p><img src="ressources/cross.svg" alt="">CrossFit</p>
                                                        <p><img src="ressources/cross.svg" alt="">Massage</p>
                                                    </div>
                                                    <div class="basique">
                                                        <h3>COMPLET</h3>
                                                        <p><span>40<sup>F</sup></span>/mois</p> 
                                                        <p><img src="ressources/check.svg" alt="">Salle libre</p>
                                                        <p><img src="ressources/check.svg" alt="">24h/24</p>
                                                        <p><img src="ressources/check.svg" alt="">Coach</p>
                                                        <p><img src="ressources/check.svg" alt="">CrossFit</p>
                                                        <p><img src="ressources/cross.svg" alt="">Massage</p>
                                                    </div>
                                                </section>
                                                <section class="z">
                                                    <div class="pro">
                                                        <h3>PRO</h3>
                                                        <p><span>60<sup>F</sup></span>/mois</p>
                                                        <p><img src="ressources/check.svg" alt="">Salle libre</p>
                                                        <p><img src="ressources/check.svg" alt="">24h/24</p>
                                                        <p><img src="ressources/check.svg" alt="">Coach</p>
                                                        <p><img src="ressources/check.svg" alt="">CrossFit</p>
                                                        <p><img src="ressources/check.svg" alt="">Massage</p>
                                                    </div>
                                                </section>
                                                    <div class="fin">
                                                        <h2 id="contact">Section Contact</h2>
                                                        <div>

                                                            <?php
                                                                try
                                                                {
                                                                    $bdd = new PDO( 'mysql: host=localhost; dbname=bd' , 'root' , '' );
                                                                }
                                                                    catch( Exception $e)
                                                                {
                                                                    die('Erreur : '.$e->getMessage());
                                                                }

                                                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoyer'])) {

                                                                    if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['message'])) {
                                                                        echo "<script>alert('veillez remplir tout les champs !')</script>";
                                                                    } else {

                                                                        $prenom = htmlspecialchars($_POST['prenom']);
                                                                        $nom = htmlspecialchars($_POST['nom']);
                                                                        $email = htmlspecialchars($_POST['email']);
                                                                        $telephone = htmlspecialchars($_POST['telephone']);
                                                                        $message = htmlspecialchars($_POST['message']);

                                                                            $req = $bdd->prepare("INSERT INTO vitrine(`prenom`, `nom`, `email`, `telephone`, `message`) VALUES (?,?,?,?,?)");
                                                                            $req->execute(array($prenom, $nom, $email, $telephone, $message));

                                                                            if ($req->rowCount() > 0) {
                                                                                echo "<script>alert('vous êtes connecté !')</script>";
                                                                            } else {
                                                                             echo "<script>alert('information incorrect !')</script>";
                                                                            }
                                                                    }
                                                                }

                                                            ?>

                                                            <form action="#accueil" method="post">
                                                                <span>PRENOM</span> <br>
                                                                <input type="text" name="prenom" id="prenom"> <br>
                                                                <span>NOM</span> <br>
                                                                <input type="text" name="nom" id="nom"> <br>
                                                                <span>EMAIL</span> <br>
                                                                <input type="email" name="email" id="email"> <br>
                                                                <span>NUMERO DE TELEPHONE</span> <br>
                                                                <input type="tel" name="telephone" id="telephone"> <br>
                                                                <span>MESSAGE</span> <br>
                                                                <textarea name="message" id="message" cols="30" rows="10"></textarea> <br>
                                                                <button type="submit" name="envoyer" id="envoyer">Envoyer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <p>Tous droits réservés ©</p>
                                            </div>
                                            <!-- <script src="script.js"></script> -->
        </body>
</html>

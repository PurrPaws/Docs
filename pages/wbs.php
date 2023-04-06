<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="autor" content="Yannis IKHELEF" />
    <link rel="stylesheet" href="../assets/index.min.css" type="text/css" />
    <title>WBS</title>
  </head>
  <body>
    <?php include "../templates/header.php" ?>

    <div class="main-container">
      <h1>
        <span>Work Breakdown Structure</span><br />
        PURRPAWS
      </h1>

      <div class="diagram">

<div class="diagram-header">
    <div class="case cdp">
        <p>PURRPAWS</p>
    </div>
    <div class="header-link header-link--wbs"></div>
</div>

<div class="diagram-breakdown">

        <div class="col">
                    <div class="row head">
                        <div class="case cdc1">
                            <p>Développer l'application</p>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="row">
                            <div class="case">
                                <div class="link first"></div>
                                    <p>Développer les applications Web et mobiles</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                        <p>Concevoir l'application</p>
                                </div>
                            </div>
                            <div class="sub">
                                <div class="row">
                                    <div class="case">
                                        <div class="link first"></div>
                                            <p>Faire le cahier des charges</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link custom-link"></div>
                                            <p>Faire l'UML</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link custom-link"></div>
                                        <p>Coder l'application</p>
                                </div>
                            </div>

                            <div class="sub">
                                <div class="row">
                                    <div class="case">
                                        <div class="link first"></div>
                                            <p>Coder le back</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link next"></div>
                                            <p>Coder le front</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link next"></div>
                                            <p>Réaliser les tests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link custom-link"></div>
                                    <p>Déployer les applications</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="row head">
                        <div class="case cdc2">
                            <p>Concevoir la gamelle connecté</p>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="row">
                            <div class="case">
                                <div class="link first"></div>
                                    <p>Concevoir la mécanique</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                        <p>Choisir les pièces</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link next"></div>
                                        <p>Déterminer l'emplacement des pièces</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link custom-link"></div>
                                    <p>Concevoir l'électronique</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                        <p>Dessiner les schemas</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link next"></div>
                                        <p>Choisir les pièces</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="case">
                                    <div class="link next"></div>
                                        <p>Faire le montage</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link custom-link"></div>
                                    <p>Concevoir le programme de l'objet</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Concevoire le réservoire</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                        <p>Dessiner le réservoire</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link next"></div>
                                        <p>Imprimer le réservoire</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link custom-link"></div>
                                <p>Concevoire la gamelle</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                    <p>Dessiner la gamelle</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link next"></div>
                                    <p>Imprimer la gamelle</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                    
                    <div class="col">
                        <div class="row head">
                            <div class="case cdc3">
                                <p>Site Marchand</p>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="row">
                            <div class="case">
                                <div class="link first"></div>
                                    <p>Développer le site web</p>
                            </div>
                        </div>
                        <div class="sub">
                            <div class="row">
                                <div class="case">
                                    <div class="link first"></div>
                                        <p>Concevoir le site</p>
                                </div>
                            </div>
                            <div class="sub">
                                <div class="row">
                                    <div class="case">
                                        <div class="link first"></div>
                                            <p>Faire le cahier des charges</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link custom-link"></div>
                                            <p>Faire l'UML</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="case">
                                    <div class="link custom-link"></div>
                                        <p>Coder le site</p>
                                </div>
                            </div>

                            <div class="sub">
                                <div class="row">
                                    <div class="case">
                                        <div class="link first"></div>
                                            <p>Coder le back</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link next"></div>
                                            <p>Coder le front</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="case">
                                        <div class="link next"></div>
                                            <p>Réaliser les tests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link custom-link"></div>
                                    <p>Déployer le site</p>
                            </div>
                        </div>

                    </div>
                </div>

</div>
</div>
      
    </div>
  </body>
  <script type="text/javascript" src="../assets/script.js"></script>
</html>
    
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="autor" content="Yannis IKHELEF" />
    <link rel="stylesheet" href="../assets/index.min.css" type="text/css" />
    <title>PBS</title>
  </head>
  <body>
    <?php include "../templates/header.php" ?>

    <div class="main-container">
      <h1>
        <span>Product Breakdown Structure</span><br />
        PURRPAWS
      </h1>

        <div class="diagram">

            <div class="diagram-header">
                <div class="case cdp">
                    <p>PURRPAWS</p>
                </div>
                <div class="header-link header-link--pbs"></div>
            </div>

            <div class="diagram-breakdown">

                <div class="col">
                    <div class="row head">
                        <div class="case cdc1">
                            <p>Application</p>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="row">
                            <div class="case">
                                <div class="link first"></div>
                                    <p>Application Web</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Application mobile</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="row head">
                        <div class="case cdc2">
                            <p>Gamelle connecté</p>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="row">
                            <div class="case">
                                <div class="link first"></div>
                                    <p>Réservoire</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Gamelle</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Électronique</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Mécanique</p>
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
                                    <p>Presentation produit</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="case">
                                <div class="link next"></div>
                                    <p>Module de paiement</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
  </body>
  <script type="text/javascript" src="../assets/script.js"></script>
</html>
    
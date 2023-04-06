<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="autor" content="Yannis IKHELEF" />
    <link rel="stylesheet" href="../assets/index.min.css" type="text/css" />
    <title>Risques</title>
  </head>
  <body>
    <?php include "../templates/header.php" ?>

    <div class="main-container">
      <h1>
        <span>GESTION DES RISQUES</span><br />
        PURRPAWS
      </h1>

      <section>
          <h2>Tableau des risques éventuels et leurs criticités</h2>
          
            <table class="risk-table">
              <thead>
                  <tr>
                      <th>Risques</th>
                      <div class="stats">
                          <th>❓</th>
                          <th>❗</th>
                          <th>🔥</th>
                        </div>
                        <th>Gestion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="risque">De ne pas finir à temps</td>
                        <td class="proba stats p2">3</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p4">12</td>
                        <td class="gestion">Être assidu, bien réaliser le retroplanning et respecter les sprints</td>
                    </tr>
                    <tr>
                        <td class="risque">De ne pas obtenir les pièces à temps</td>
                        <td class="proba stats p2">2</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p3">8</td>
                        <td class="gestion">Commander sur amazone prime, vérifier les délais de livraisons</td>
                    </tr>
                    <tr>
                        <td class="risque">Ne pas trouver de solution technique</td>
                        <td class="proba stats p1">1</td>
                        <td class="grave stats p2">4</td>
                        <td class="critik stats p2">4</td>
                        <td class="gestion">Solliciter une aide extérieur</td>
                    </tr>
                    <tr>
                        <td class="risque">Manque de budget</td>
                        <td class="proba stats p3">3</td>
                        <td class="grave stats p1">1</td>
                        <td class="critik stats p1">3</td>
                        <td class="gestion">Prévoir des composant à bas prix, investissement personnel, recherche de sponsors</td>
                    </tr>
                    <tr>
                        <td class="risque">Manque d'outils</td>
                        <td class="proba stats p1">1</td>
                        <td class="grave stats p4">4</td>
                        <td class="critik stats p2">4</td>
                        <td class="gestion">Faire appel à l'usine ou un fablab</td>
                    </tr>
                    <tr>
                        <td class="risque">Perte de temps du à la mise en commun des gits</td>
                        <td class="proba stats p3">3</td>
                        <td class="grave stats p2">2</td>
                        <td class="critik stats p2">6</td>
                        <td class="gestion">Respecter des bonnes pratiques de travail collaboratif</td>
                    </tr>
                    <tr>
                        <td class="risque">Problème de cybersécurité</td>
                        <td class="proba stats p1">1</td>
                        <td class="grave stats p3">3</td>
                        <td class="critik stats p1">3</td>
                        <td class="gestion">Respecter les bonnes pratiques de cybersécurité et faire intervenir chatGPT</td>
                    </tr>
                    <tr>
                        <td class="risque">Perte de temps du à un disfonctionnement imprévu</td>
                        <td class="proba stats p2">2</td>
                        <td class="grave stats p2">2</td>
                        <td class="critik stats p2">4</td>
                        <td class="gestion">Tester le matériel au plus tôt, commander des pièces en plus, tests unitaires</td>
                    </tr>
                </tbody>
            </table>
            <div class="legende">
                <div class="item">
                    <div class="label">❓ : </div>
                    <div class="value"> Probabilité (/4)</div>
                </div>
                <div class="item">
                    <div class="label">❗ : </div>
                    <div class="value"> Gravité (/4)</div>
                </div>
                <div class="item">
                    <div class="label">🔥 : </div>
                    <div class="value"> Criticité (/16) = (Probabilité x Gravité)</div>
                </div>
            </div>
        </section>
    </div>

</body>
</html>

<?php
require_once 'form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Google Font Raleway -->
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <!-- Font Awesome Script -->
  <script src="https://kit.fontawesome.com/071366ef18.js" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css" />
  <title>Laissez-nous conduire</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <nav class="header__nav">
        <ul>
          <li><a href="#home-services">Nos Services</a></li>
          <li><a href="#home-tarifs">Nos Tarifs</a></li>
          <li><a href="#home-devis">Réserver</a></li>
        </ul>
      </nav>
    </div>
    <div class="header__showcase">
      <div class="container">
        <h1 class="header__title">Blue Voyage</h1>
        <p class="header__text lead">
          Pour que vos déplacements deviennent un moment de plaisir.
        </p>
        <a href="#home-devis" class="btn btn-medium">Réserver</a>
      </div>
    </div>
  </header>

  <!-- NOS ATOUTS -->
  <section class="home-atouts text-center py-3">
    <div class="container">
      <h2 class="section-title">Notre priorité, votre satisfaction</h2>
      <div class="bottom-line"></div>
      <div class="home-atouts__content">
        <div class="home-atouts__card">
          <i class="fas fa-dove fa-3x"></i>
          <div class="home-atouts__card-title">Ni appli / Ni taxi</div>
          <p>
            Des chauffeurs 100% indépendants, passionnés par leur métier et
            soucieux d'offrir le meilleur service au client.
          </p>
        </div>
        <div class="home-atouts__card">
          <i class="fas fa-money-bill-wave fa-3x"></i>
          <div class="home-atouts__card-title">
            Mode de paiment libre
          </div>
          <p>
            Payez à l'avance ou à bord, par carte ou en espèces. Nous ne demandons aucune coordonnées bancaires.
          </p>
        </div>
        <div class="home-atouts__card">
          <i class="fas fa-map-marked-alt fa-3x"></i>
          <div class="home-atouts__card-title">Entreprise locale</div>
          <p>
            Spécialisés dans le transport de personnes dans notre région, cela
            nous permet de connaître nos clients au mieux.
          </p>
        </div>
        <div class="home-atouts__card">
          <i class="fas fa-user-tie fa-3x"></i>
          <div class="home-atouts__card-title">Service sur mesure</div>
          <p>
            Boisson préférée, journal et musiques favoris, wifi... Un service à la carte qui répond à vos envies.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- NOS SERVICES -->
  <section id="home-services" class="home-services text-center py-3">
    <div class="container">
      <h2 class="section-title">Nos Services</h2>
      <div class="bottom-line"></div>
      <div class="home-services__content">
        <div class="home-services__card">
          <img src="images/transfert.jpg" alt="" />
          <div>
            <h3>Transferts</h3>
            <p>
              Ne soyez plus jamais en retard, nos chauffeurs ont tous accès
              aux zones réservées de l'aéroport de Nice.
            </p>
          </div>
        </div>
        <div class="home-services__card">
          <img src="images/daily.jpg" alt="" />
          <div>
            <h3>Trajets quotidiens</h3>
            <p>
              Pour vos rendez-vous chez le médecin, pour aller faire vos courses et vous aider avec les paquets,
              comptez sur nous pour vous accompagner au quotidien.
            </p>
          </div>
        </div>
        <div class="home-services__card">
          <img src="images/long-distance.jpg" alt="" />
          <div>
            <h3>Longues distances</h3>
            <p>
              Nos chauffeurs vous emmènent partout en France et à l'étranger afin de vous
              éviter le stress des longs trajets. Nous sommes formés et expérimentés, votre sécurité est notre priorité.
            </p>
          </div>
        </div>
        <div class="home-services__card">
          <img src="images/wedding.jpg" alt="" />
          <div>
            <h3>Evènements</h3>
            <p>
              Choyez vos invités en leur offrant un chauffeur afin qu'ils
              profitent au maximum du plus beau jour de votre vie.
            </p>
          </div>
        </div>
        <div class="home-services__card">
          <img src="images/dispo.jpg" alt="" />
          <div>
            <h3>Mise à disposition</h3>
            <p>
              Besoin d'un chauffeur pour la journée ou la demie-journée ? Nous
              serons heureux de vous proposer nos services de mise à
              disposition à des tarifs préférentiels.
            </p>
          </div>
        </div>
        <div class="home-services__card">
          <img src="images/ski.jpg" alt="" />
          <div>
            <h3>La montagne ça vous gagne</h3>
            <p>
              Nos véhicules sont équipés de pneus hivers, chaînes et portes
              ski. Dormez comme un bébé pendant que nous vous ramenons à bon
              port après une journée intense !
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NOS ENGAGEMENTS -->
  <section class="home-engagements text-center py-3">
    <div class="container">
      <h2 class="section-title">Nos engagements</h2>
      <div class="bottom-line"></div>
      <div class="home-engagements__content">
        <div>
          <i class="far fa-clock fa-3x"></i>
          <h3>Ne soyez plus en retard</h3>
          <p class="home-engagements__desc">
            Réservez 24h avant votre départ et soyez sûr d'avoir un chauffeur
            à l'heure en bas de chez vous.
          </p>
        </div>
        <div>
          <i class="fas fa-money-bill-alt fa-3x"></i>
          <h3>Prix fixes</h3>
          <p class="home-engagements__desc">
            Nos prix sont définis avant la commande et ne bougent pas, peu
            importe les conditions de circulation ou la durée de la course.
          </p>
        </div>
        <div>
          <i class="fas fa-chart-line fa-3x"></i>
          <h3>Pas de majorations</h3>
          <p class="home-engagements__desc">
            Ne subissez plus les majorations qui peuvent parfois doubler le
            prix d'une course. Peu importe la demande ou la saison nos prix
            restent les mêmes.
          </p>
        </div>
        <div>
          <i class="fas fa-handshake fa-3x"></i>
          <h3>Service sur mesure</h3>
          <p class="home-engagements__desc">
            Nous nous adapatons aux besoins et aux profils de nos clients pour
            une expérience unique.
          </p>
        </div>
        <div>
          <i class="fas fa-user-tie fa-3x"></i>
          <h3>Chauffeurs de qualité</h3>
          <p class="home-engagements__desc">
            Nous sommes des chauffeurs indépendants et libres qui exercons ce
            métier par passion. Notre unique soucis est de vous satisfaire.
          </p>
        </div>
        <div>
          <i class="fas fa-car fa-3x"></i>
          <h3>24/7</h3>
          <p class="home-engagements__desc">
            Nous vous conduisons à toute heure du jour et de la nuit, weekends
            et jours fériés.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- NOTRE EQUIPE -->
  <section class="home-equipe text-center py-3">
    <div class="container-small">
      <h2 class="section-title">Notre Equipe</h2>
      <div class="bottom-line"></div>
      <div class="home-equipe__content">
        <div class="home-equipe__text">
          <p class="py-2">
            Dans un monde où se déplacer en voiture représente une source de stress, où trouver un stationnement en
            ville relève du parcours du combattant et où nous constatons chaque jour les dérives liées aux applications
            de transport, notre mot d’ordre est de remettre la satisfaction de nos clients au cœur de nos
            préoccupations. Nous sommes une équipe de professionnels réunis autour de valeurs communes, et du même désir
            de proposer un service irréprochable. Bien plus que de simples chauffeurs, vous trouverez chez nous des
            professionnels du transport formés et expérimentés, dont la mission est de s’assurer que vous arriviez à
            destination dans les meilleures dispositions.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="home-equipe__img py-2">
        <div>
          <img src="images/portrait1.jpg" alt="" />
        </div>
        <div>
          <img src="images/portrait2.jpg" alt="" />
        </div>
        <div>
          <img src="images/portrait3.jpg" alt="" />
        </div>
        <div>
          <img src="images/nassim.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- NOS VEHICULES -->
  <section class="home-vehicules text-center py-3">
    <h2 class="section-title">Nos Véhicules</h2>
    <div class="bottom-line"></div>
    <div class="home-vehicules__content">
      <div class="home-vehicules__img">
        <img src="images/voitures.png" alt="véhicules" />
      </div>

      <div class="home-vehicules__text">
        <h3 class="section-sub-title">
          Une game de véhicules récents et sûrs
        </h3>
        <p>
          Nos voitures répondent à d'excellents standards de confort, de
          sécurité et de qualité. Tous nos véhicules appartiennent aux gammes
          les plus prestigieuses de leur marque et offrent des finitions luxe
          avec sièges en cuir, multiples airbags passagers, reposes boissons,
          grands coffres etc. Nos chauffeurs sont formés à une conduite souple
          et sécurisante. Ils sont habitués au stress de la circulation en
          ville et savent gérer toutes les situations dans le calme et la
          discretion.
        </p>
      </div>
    </div>
  </section>

  <!-- NOS TARIFS -->
  <section id="home-tarifs" class="home-tarifs py-3">
    <div class="container">
      <h2 class="section-title">Nos Tarifs</h2>
      <div class="bottom-line"></div>
      <div class="home-tarifs__content">
        <div class="home-tarifs__left">
          <div class="home-tarifs__table-icons">
            <i class="fas fa-umbrella-beach"></i>
            <i class="fas fa-long-arrow-alt-right"></i>
            <i class="fas fa-city"></i>
          </div>
          <table class="home-tarifs__table">
            <tr>
              <th>Départ</th>
              <th></th>
              <th>Arrivée</th>
              <th>Prix</th>
              <th>km</th>
            </tr>
            <tr>
              <td>Nice</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Eze</td>
              <td>25</td>
              <td>12</td>
            </tr>
            <tr>
              <td>Nice</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Antibes</td>
              <td>45</td>
              <td>20</td>
            </tr>
            <tr>
              <td>Nice</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Monaco</td>
              <td>50</td>
              <td>23</td>
            </tr>
            <tr>
              <td>Nice</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Cannes</td>
              <td>55</td>
              <td>33</td>
            </tr>
            <tr>
              <td>Nice</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Auron</td>
              <td>145</td>
              <td>95</td>
            </tr>
          </table>
        </div>
        <div class="home-tarifs__right">
          <div class="home-tarifs__table-icons">
            <i class="fas fa-plane"></i>
            <i class="fas fa-long-arrow-alt-right"></i>
            <i class="fas fa-city"></i>
          </div>
          <table class="home-tarifs__table">
            <tr>
              <th>Départ</th>
              <th></th>
              <th>Arrivée</th>
              <th>Prix</th>
              <th>km</th>
            </tr>
            <tr>
              <td>Aéroport</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Nice</td>
              <td>20</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Aéroport</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Cannes</td>
              <td>60</td>
              <td>27</td>
            </tr>
            <tr>
              <td>Aéroport</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Monaco</td>
              <td>70</td>
              <td>32</td>
            </tr>
            <tr>
              <td>Aéroport</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Menton</td>
              <td>80</td>
              <td>40</td>
            </tr>
            <tr>
              <td>Aéroport</td>
              <td><i class="fas fa-long-arrow-alt-right"></i></td>
              <td>Alassio</td>
              <td>180</td>
              <td>116</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- DEVIS -->
  <section id="home-devis" class="home-devis text-center py-3">
    <div class="container-large">
      <h2 class="section-title">Devis</h2>
      <div class="bottom-line"></div>
      <h3 class="home-devis__title" id="textDevis">
        Nous vous envoyons un devis dans les plus brefs délais.
      </h3>
      <div id="devisContent" class="home-devis__content">
        <div id="error" class="home-devis__error"></div>
        <form id="formDevis">
          <div class="home-devis__text-fields">
            <input id="depart" type="text" class="text-input depart-input" name="depart" placeholder="Lieux de départ"
              value="<?= htmlspecialchars($_POST['depart'] ?? '', ENT_QUOTES); ?>" />
            <input id="arrivee" type="text" class="text-input arrivee-input" name="arrivee"
              placeholder="Lieux d'arrivée" value="<?= htmlspecialchars($_POST['arrivee'] ?? '', ENT_QUOTES); ?>" />
            <input id="passagers" type="number" min="1" max="4" class="text-input passagers-input" name="passagers"
              placeholder="Nombre de passagers"
              value="<?= htmlspecialchars($_POST['passagers'] ?? '', ENT_QUOTES); ?>" />
            <input id="date" type="date" class="text-input date-input" name="date"
              placeholder="Date de la prise en charge"
              value="<?= htmlspecialchars($_POST['date'] ?? '', ENT_QUOTES); ?>" />
            <input id="heure" type="time" class="text-input horaire-input" name="heure" placeholder="Heure"
              value="<?= htmlspecialchars($_POST['heure'] ?? '', ENT_QUOTES); ?>" />
            <input id="nom" type="text" class="text-input nom-input" name="nom" placeholder="Nom"
              value="<?= htmlspecialchars($_POST['nom'] ?? '', ENT_QUOTES); ?>" />
            <input id="telephone" type="tel" class="text-input phone-input" name="telephone" placeholder="Téléphone"
              value="<?= htmlspecialchars($_POST['telephone'] ?? '', ENT_QUOTES); ?>" />
            <input id="email" type="email" class="text-input email-input" name="email" placeholder="Email"
              value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>" />
            <textarea name="demande" class="text-input message-input" rows="2" placeholder="Une demande particulière ?"
              value="<?= htmlspecialchars($_POST['demande'] ?? '', ENT_QUOTES); ?>"></textarea>
          </div>
          <button type="submit" name="submit" id="submit">Envoyer</button>
        </form>
      </div>
    </div>
  </section>

  <!-- AVIS CLIENTS -->
  <section class="home-avis text-center py-3">
    <div class="container">
      <h2 class="section-title">L'avis de nos clients</h2>
      <div class="bottom-line"></div>
      <div class="home-avis__content">
        <div>
          Merci pour cette course, et aussi pour votre sympathie. Au plaisir de réutiliser vos services.
          <img src="images/avis1.png" alt="" />
        </div>
        <div>
          Chauffeur très agréable et intéressant. On a pas vu le temps du trajet passer !
          <img src="images/avis2.png" alt="" />
        </div>

        <div>
          Très sympathique et profesionnel, nous avons passé un bon moment.
          <img src="images/avis3.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="main-footer">
    <div class="main-footer__content container">
      <p>Copyright &copy; 2020. All Rights Reserved</p>
      <div class="social">
        <div><i class="fab fa-twitter"></i></div>
        <div><i class="fab fa-facebook"></i></div>
        <div><i class="fab fa-instagram"></i></div>
        <div><i class="fab fa-linkedin"></i></div>
      </div>
    </div>
  </footer>

  <script src="scripts/form.js"></script>
</body>

</html>
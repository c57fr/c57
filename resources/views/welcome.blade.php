<!--
TAF prioritaires
 - Lier slack avec les dépôts c57
 - Images/Icônes numéro des étapes
 (1 ce site (Edit On line / [VM], GitHub, outils /localhost/Fork-MR-Fetch / ...) - 2 Laravel - 3 Bestmomo - 4 oCMS - 5 C2B)
 - Pose d'un oCMS pour C57
 - Sur les numéros, créer lien sur pages blog pour chaque étape alors décrite de A à Z
 - CSS => Utiliser vraiment less
L'allure devra être comme celle-ci
- Ajouter Lien: Vous y gagner d'emblée (Compétences, trucs & astuces, temps, etc..) Mais... Et si en plus, cela vous rapportait directement...?

TAF secondaires
Lien dépît c57 - No mouvements
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil | c57.fr</title>
  <meta charset=UTF-8"/>
  <meta name="description" content="Page d'accueil de c57.fr"/>
  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
<!--  Commenter/décommenter pour afficher un message dans le haut de la page-->
<div class="lio">
  <!--  <mark>À noter: Tests en cours...</mark>-->
</div>
<h1>
  C57.fr,
</h1>
<p>LA Réponse.</p>
<h4><em class="noCadre">Le Dev Informatique, c'est maintenant et enfin pour tout le monde...<br/>
    ... Et en plus, avec la puissance des <a href="https://fr.wikipedia.org/wiki/Open_source"
                                             target="_blank">O.S.</a><br/>
    <span class="c57">C</span>'est en <span class="c57">5</span> - <span class="c57">7</span>..<span
        class="c57">.</span>
    Même pour les 'pures' <span class="c57">fr</span>ancophones !</em></h4>
<hr>

<h3>Apprenez par l'action ! <a href="https://github.com/c57fr/c57" title="LE dépôt GitHub">
    1
    <mark>Dépôt GitHub</mark>
  </a></h3>
<div class="resserre">
  <h4><a href="faq" title="Avant, merci de lire notre page Questions Fréquentes...">Besoin d'aide? Une question? Une
      attente ou une requête?</a></h4>
</div>

<hr>

<p class="etapes">À voir aussi:
  <a href="https://github.com/c57fr/l5" title="Uniquement dépôt Github pour dev local de chacun">2&nbsp;L5</a> |
  <a href="#">3&nbsp;Réservé</a> |
  <a href="http://bestmomo.c57.fr">4&nbsp;Laravel (Customisé/BestMomo)</a> |
  <a href="http://voyager.c57.fr" class="ext" target="_blank">5&nbsp;Voyager</a> |
  <a href="http://october.c57.fr" class="ext" target="_blank">6&nbsp;OctoberCMS</a> |
  <a href="https://chemin2bonheur.com/be/backend/auth/signin" class="
    ext" target="_blank">7&nbsp;C2B</a>
</p>

<?php
//echo '<p>Ce texte est issu d\'un script écrit en PHP ' . PHP_VERSION . '</p>';
?>

<hr/>
<!-- Désactivation Stack pour le moment... La FAQ doit se remplir...!
<div style="text-align: center" class="sp1">
  <a href="http://c57.slack.com" class="ext" target="_blank">Connection (Slack)</a>
</div>
<hr/>
-->
<div style="text-align: right; margin-top: -.125%;" class="sp1">
  &copy; 2017 - Propulsé par Laravel et <strong><a href="https://github.com/c57fr/c57"
                                                   title="Dépôt GitHub">C57</a></strong> -
  <!--TAF C57 => Lien login du oCMS pr C57-->
  <em><a href="http://sg1.COTE7.com" class="ext" target="_blank">GC7</a></em>
</div>
{{Debugbar::AddMessage("Bienvenue dans la zone de dev francophone, autour de Laravel, et autres...")}}
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-61289532-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>

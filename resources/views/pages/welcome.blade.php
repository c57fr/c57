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

<section>

  @if (Route::has('login'))
    <div class="adroite top-right links">
      @if (Auth::check())
        <a href="{{ url('/home') }}">Bureau</a>
      @else
        <a href="{{ url('/login') }}">Connexion</a>
        <a href="{{ url('/register') }}">S'enregistrer</a>
      @endif
    </div>
  @endif

</section>

<h1>
  C57.fr,
</h1>
<p>LA réponse.</p>

<br/>
<hr>

<h3>Apprenez par l'action ! <a href="https://github.com/c57fr/l5" title=" LE dépôt GitHub, uniquement pour dev local de chacun...

 Rappel: Après avoir 'forké'... ">
    1
    <mark>Dépôt GitHub L5 *</mark>
  </a></h3>
<i>* Installation en 2 lignes de commandes !</i>
<hr>
<div class="resserre">
  Tu doutes, tu as peut-être peur, tu ne sais même pas pas si cela te concerne vraiment, tu te demandes même ce que tu y
  gagneras....? Une seule solution pour clarifier tout cela: <a href="https://c57.fr/register"
                                                                class="ext c57">INSCRIS-TOI !</a> Et
  quoiqu'il advienne, ne retiens au besoin,
  là aussi, qu'une seule chose...: Ce lien:
  <h4><a href="faq" title="Avant, merci de lire notre page Questions Fréquentes...">Besoin d'aide? Une question? Une
      attente ou une requête?</a></h4>
  <p>Et ne tkt pas plus que cela, car là est ta place :-) !</p>
</div>

<hr>

<p class="etapes">À voir aussi:
  <a href="https://github.com/C57fr/Do" target="_blank">2&nbsp;Do</a> |
  <a href="https://github.com/c57fr/c57" title="Oui, ce site, dont tu peux co-écrire chaque page...">3&nbsp;c57</a> |
  <a href="http://bestmomo.c57.fr">4&nbsp;Laravel (Customisé/BestMomo)</a> |
  <a href="http://voyager.c57.fr" class="ext" target="_blank">5&nbsp;Voyager</a> |
  <a href="http://october.c57.fr" class="ext" target="_blank">6&nbsp;OctoberCMS</a> |
  <a href="https://chemin2bonheur.com/be/backend/auth/signin" class="
    ext" target="_blank">7&nbsp;C2B</a>
</p>

<h4><em class="noCadre">Le Dev Informatique, c'est maintenant et enfin pour tout le monde...<br/>
    ... Et en plus, avec la puissance des <a href="https://fr.wikipedia.org/wiki/Open_source"
                                             target="_blank">O.S.</a><br/>
    <span class="c57">C</span>'est en <span class="c57">5</span> - <span class="c57">7</span>..<span
        class="c57">.</span>
    Rapide,facile, même pour les 'pures' <span class="c57">fr</span>ancophones !</em></h4>
<hr>
<div class="gauche">
  Que tu te prénommes...:
  <br>
  - <strong>Thierry</strong>, peu ami au quotidien avec le PC, mais tellement d'autres compétences, même si elles ne se
  dévoilent que
  dans
  l'urgence,<br>
  - <strong>Yann</strong>, plus artiste que technico,<br>
  - <strong>Christian</strong>, plus idéaliste qu'informaticien,<br>
  - <strong>Fréd</strong>, <strong>Sandrine</strong>, <strong>Isa,</strong> <strong>Nath</strong>, ... Bah... Coaches
  vous êtes, Coaches vous continuerez d'être, enfin, si cela est vraiment votre souhait du fond du coeur,<br>
  - <strong>JB</strong>, <strong>Lolo</strong>, Ch'ti <strong>Jason</strong>, <strong>AMB,</strong> <strong>FB</strong>,
  <strong>JPB</strong>, <strong>JLB</strong>, <strong>Ginandree</strong>, <strong>Jadoulette</strong>,
  <strong>Rom1</strong>, l'surdoué <strong>Jonathan</strong>, <strong>Jean</strong>, <strong>Sam</strong>,
  <strong>JCC</strong>, <strong>Dylan</strong>... Oh ?! Toi... Là, encore vivant ?<br>
  - <strong>Nono</strong>, la chute libre c'est super... Ok,... Pour toi... Maintenant, rebondir enfin, ça te dit ?<br>
  - Et
  Toi, <strong>Dom</strong>, </strong><strong>Dan du 59</strong>, <strong>Radjaa</strong>... <strong>Med</strong>... Et
  autres Leaders du <a
      href="https://www.youtube.com/watch?v=T-F6Swujp5Y" target="_blank">Club Adel</a>...
  Contre toutes apparences, c'est là, la suite... ;-)...!<br>
  - <strong>Bruno</strong>, <strong>Xav,</strong> toutes vos compétences, que vous savez devenues inutiles maintenant,
  là, elles peuvent revaloir... Et vous, du coup, revivre, et c'est maintenant !<br>
  - <strong>GrafikArt</strong>, <strong>Momo</strong>, <strong>Georges</strong> du Vals
  Libre, et autres top leaders francophones du script/web/évolution...,<br>
  - Et tous ceux que j'oublie, là, maintenant, ou que juste, j'n'ai pas eût l'immense plaisir et chance
  indubitablement
  de
  rencontrer personnellement avant...:<br>
  <br>
  Go, go, go !!!!<br>
  <br>
  Ouais, je sais, même ça, c'est peut-être déjà trop incompréhensible...<br>
  <br>
  Alors, ça veut juste dire: <strong>Tu peux</strong>, et même, <strong>tu dois</strong>, tu dois jouer, <strong>tu dois
    être là</strong>, tu dois participer !
  <br>
  <br>
  Car <strong>tu vas ainsi créer ton Monde, celui de tous, celui de tes enfants... :-) ! (y) !</strong>
  <br>
  Ne tkt pas du comment, car seul compte le pourquoi... ;-) ...
  <br>
  (L)
  <br>
  <br>
  <a href="https://www.youtube.com/watch?v=HsC_SARyPzk" target="_blank">ALC</a>
</div>
<hr>
BRAVOS: Derniers inscrits: BestMomo, XRumer, Doro W., Richard M.

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

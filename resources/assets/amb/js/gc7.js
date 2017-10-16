// My Namespace
var grCote7 = {
    // Propiétés
    version: 0.01,
    auteur: 'Lionel COTE',
    lang: 'fr',

    init: function () { /* Initialisation */
        if (0) {
            console.log(this.tools.trouve());
            // grCote7.aff(this.tools.isString('12'));
            aff(grCote7.tools.isValidEmail('ggrrr@dudu.com'));
            aff(this.tools.bbCode2html('[b]Test[/b]'));
            this.tools.affChiffreEnLettreDansPhrase('Dans 22 jours, j\'aurai 24 ans');
            this.tools.learnRegEx();
        }
        this.tools.test();
    },

    myBestFunction: function () {
        this.aff('Ma meilleure fonction !');
    },
    /**
     * Affiche n avec <br> ou <hr>
     * @param n
     * @param chgLg
     * 1: '<br>'
     * 2: '<hr>'
     */
    aff: function (n, chgLg) {
        if (typeof chgLg == 'undefined') {
            chgLg = '';
        }
        else {
            chgLg = ((chgLg == 1) ? '<br>' : (chgLg == 2) ? '<hr>' : '');
        }

        var myAffP = document.querySelector('#myAffP');
        if (typeof n === 'undefined') myAffP.innerHTML = '';
        else {
            if (n === 0) {
                n = '0';
                console.log('n=0 dans Aff()');
            }
            if (n) myAffP.innerHTML += n + ' ' + chgLg;
        }
    },

    dom: {
        /**
         * Ne charge que si pas déjà chargé
         * @param url
         * @returns {boolean}
         */
        insertFirstScript: function (url) {
            var scripts = document.getElementsByTagName('script');
            for (var id in scripts) {
                if (scripts.hasOwnProperty(id))
                    if (scripts[id].attributes[0].nodeValue == url)
                        return false; // script déjà chargé
                    else { // On peut créer le "<script sr=...c>"
                        var script = document.createElement('script');
                        script.setAttribute('src', 'num2Letters.js');
                        document.getElementsByTagName('body')[0]
                            .firstChild.parentNode.insertBefore(script,
                            document.getElementsByTagName('script')[0]);
                        return true;
                    }
            }
        }
    },

    tools: { // sousNamespace
        init: function () {/* Initialisation */
            console.log('Mon tools is OK  !!!');
        },

        /**
         * @return {string}
         */
        ucFirst: function (c) {
            return c.charAt(0).toUpperCase() + c.slice(1, c.length);
        },
        trouve: function (rech, source) {


            // Utilisation du tilde
            // grCote7.auteur = 'dudu POL';
            if (rech == undefined)  rech = 'e';
            if (source == undefined) {
                source = grCote7.auteur.toLowerCase();
            }
            var r = this.ucFirst(source),
                rep = '"' + rech + '" est-il dans la chaîne "' + r + '" ?<br>\n';
            rech = rech.toLowerCase();
            // grCote7.aff('"' + rech + '" est bien contenu dans "' + this.UcFirst(grCote7.auteur) + '"');
            if (~source.indexOf(rech)) { // indexOf retourne -1 si pas trouvé et tilde fait +1 * -1 => 0
                var posFirst = source.indexOf(rech) + 1,
                    posLast = source.lastIndexOf(rech) + 1,
                    compl = (posFirst != posLast) ? ' et se retrouve en position ' + posLast : '';
                rep += '- Oui, en position ' + posFirst + compl;
            } else {
                rep += '- Non, "' + rech + '" n\'est pas contenu dans "' + this.ucFirst(grCote7.auteur) + '"';
            }
            return rep;

            /*
             document.addEventListener('keypress', function (e) {
             grCote7.aff(e.keyCode + ' (' + String.fromCharCode(e.keyCode) + ') ');
             }
             )
             */
        },
        isString: function isString(variable) {
            return typeof variable.valueOf() === 'string'; // Si le type de la valeur primitive est « string » alors on retourne « true »
        },
        isValidEmail: function (email) { // Utilisation type primitif
            var regEx = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/i;
            return (regEx.test(email)) ? 'true' : 'false';

            // Avec Object RegExp, possibilité d'utiliser des variables
            // var nickname = "Sebastien";
            // var myRegex = new RegExp('Salut ' + nickname, "i");
            // // grCote7.aff(myRegex);
            // console.log(myRegex);
            // console.log(myRegex.test('Salut Sebastien'));

        },
        learnRegEx: function () { // Usage de exec()
            var sentence = "Si ton tonton";
            var result = /\bt[io]n\b/.exec(sentence); // On cherche à récupérer le mot « ton »
            if (result) { // On vérifie que ce n'est pas null
                console.log(result['0']); // Affiche chaîne trouvée
                grCote7.aff(result['0']);
                return result.input;
            }
            return false;

            // Avec capture (Max $9)
            // var birth = 'Je suis né en mars, ok ?';
            // console.log(/^Je suis né en (\S+), (ok) \?$/.test(birth));
            // aff(RegExp.$1); // Affiche : « mars »

            // Faire une parenthèse non capturante
            // /(?:https|http|ftp|steam):\/\//

            // ?: 0 ou 1
            // +: 1 ou +
            // *: 0,1 ou+

            // var html = '<a href="www.mon-adresse.be"><strong class="web">Mon site</strong></a>';
            // /<a href="(.+?)">/.exec(html); // le '?' rend non-greedy (non gourmande) la capture
            // console.log(RegExp.$1);

            // Replace
            // aff('Je suis Lionel'.replace(/Sébastien/, 'Johann')); // Par RegEx
            // aff('Je suis Lionel'.replace('Lionel', 'Adel'));      // Par Object String

            // Option g pour recherche globale (= Toutes les occurences)
            // var sentence = 'Il s\'appelle Sébastien. Sébastien écrit un tutoriel.';
            // var result = sentence.replace(/Sébastien/g, 'Johann');
            // aff(result); // Il s'appelle Johann. Johann écrit un tutoriel.

            // Capture + replace() pour ré-ordonner
            // var date = '05/26/2011';
            // date = date.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, 'Le $2/$1/$3');
            // aff(date); // Le 26/05/2011

            // Si $ en sortie, le doubler
            // var total = 'J\'ai 0 dollars en liquide.';
            // aff(total.replace(/(\d+) dollars?/, '$$$1')); // J'ai 25 $ en liquide (? pour s présent?)

            // var result = sentence.search(/\bton\b/);
            // if (result > -1) { // Quelque chose a été trouvé ?
            //     alert('La position est ' + result); // 3
            // }

            // var sentence = 'Si ton tonton tond ton tonton, ton tonton tondu sera tondu';
            // var result = sentence.match(/\btonton\b/g);
            // alert('Il y a ' + result.length + ' "tonton" :\n\n' + result);

            // var family = 'Guillaume,Pauline;Clarisse:Arnaud;Benoît;Maxime';
            // var result = family.split(/[,:;]/);
            // alert(result);

        },

        bbCode2html: function (bbc) {
            var html = bbc.replace(/\[b]([\s\S]*?)\[\/b]/g, '<strong>$1</strong>'); // Gras
            html = html.replace(/\[i]([\s\S]*?)\[\/i]/g, '<em>$1</em>'); // ItaliqueSample Text
            html = html.replace(/\[s]([\s\S]*?)\[\/s]/g, '<del>$1</del>'); // Barré
            html = html.replace(/\[u]([\s\S]*?)\[\/u]/g, '<span style="text-decoration: underline">$1</span>'); // Souligné
            return html;
        },

        affChiffreEnLettreDansPhrase: function (sentence) {

            grCote7.dom.insertFirstScript('num2Letters.js');

            window.onload = (function () { // On attend que le fichier .js
                // inséré dynamiquement soit lui aussi bien chargé
                // aff(grCote7.tools.ucFirst(num2Letters(777)));

                // Fonction pour le remplacement
                var result = sentence.replace(/(\d+)/g, function (str, n1) {
                    n1 = parseInt(n1);
                    if (!isNaN(n1)) {
                        return num2Letters(n1);
                    }
                }, false);
                aff(sentence + '<br>=> ' + result);
                return true;
            });
        },

        chrono: {
            start: function () {
                this.tDeb = new Date();
            },
            /**
             *
             * @param typeChono
             * Affichage type chono
             */
            stop: function (typeChono) {
                function a0(v) { // Fct ajout du 0 si v<10
                    return (v > 9 ? v : '0' + v);
                }

                var h, m, s, c, t = new Date().getTime() - this.tDeb.getTime();
                var tt;
                c = t % 1000;
                tt = (t - c) / 1000; // t en secondes
                h = Math.floor(tt / 3600);
                tt = tt - h * 3600;
                m = Math.floor(tt / 60);
                s = tt - m * 60;
                aff(' ', 2);
                if (typeChono == undefined)
                    aff("Le script a mis " + t / 1000 + " secondes.", 1);
                else
                    aff('(Tps d\'éxécution: ' + a0(h) + ':' + a0(m) + '\'' + a0(s) + '\'\'' + (c > 99 ? c : c > 9 ? '0' + c : '00' + c ) + ')', 1);
            }
        },
        test: function () {
        }
    }
};
var aff = function (n, chgLg) {
    grCote7.aff(n, chgLg)
};
// grCote7.init();

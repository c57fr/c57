/**
 * Created by cote on 03/08/16.
 */
$(function () {

    var $list = $('ul'),
        $items = $('ul li');
    msgs = [
        'Tu es un super ami !',
        'C\'est ta journée !',
        'On te souhaite que le meilleur !'
    ];

    
    $list.on('click', function () {
        ajouteBox($('li:eq(0)'), 0);
        $list.unbind();
        // ajouteBox($('li:eq(1)'), 1);
        // console.log($('li:eq(1)'));
    });


    function ajouteBox(elt, i) {
        $list.append('<li class="box clickable">' + grCote7.tools.ucFirst(msgs[i]) + '</li>');
        elt.removeClass('clickable');
        elt.unbind();

        var $last = $('li:last');

        $last.on('click', function (e) {
            console.log(e.target.textContent);
            $last.removeClass('clickable');
            $last.unbind();
            i++;
            if (i < 3) ajouteBox($last, i);
            else { // Final
                $('body').addClass('anni');
                for (var j = 1; j < 4; j++) {
                    $('li')[j].textContent = $('h1')[0].textContent;
                }
                $list.append('<audio src="son/joyeuxanniversaire.mp3""></audio>');
                var chant = document.getElementsByTagName('audio')[0];
                // $('li:last-of-type').hide(5000);
                setTimeout(function () {
                    $('li:last-of-type').hide(5000);
                    setTimeout(function () {
                        $('li:eq(1)').hide(5000);
                    }, 7000);
                }, 7000);

                chant.autoplay = true;
                chant.controls = true;
                console.log(chant);
            }
        });
    }

// Pour tests
//     $list.click();
//     $('li:last').click();
//     $('li:last').click();
//     $('li:last').click();

});

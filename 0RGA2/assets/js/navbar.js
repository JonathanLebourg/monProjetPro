$(function ()
{
    //**-------dropdown-------**
    $(document).ready(function () {
        $('.dropdown-trigger').dropdown();
        $('.materialboxed').materialbox();
    });

    //**-----navbar responsive----**
    $('.sidenav').sidenav({edge: 'right'});
//**-----------modal connexion----------**
    $(document).ready(function () {
        $('.modal').modal();
    });

    //**----select en materialize-----**
    $(document).ready(function () {
        $('select').formSelect();
    });

//**-------carousel--------**
//$(document).ready(function () {
//    $(".owl-carousel").owlCarousel();
//});


    //**-----fction jquery pour activer les boutons ds userChoce quand on checked les conditions générales------**

    $('[name="chekbox"]').change(function () {
        if ($(this).is(':checked')) {
            // Do something...
            $('.card-action a').removeClass("disabled")
        } else
            $('.card-action a').addClass("disabled")
    })
});

//**-----function pour ramener les noms de ville dans l inmput ville du form artist-----**
//
//$(function townChoice()
//{
//    $("#town").click(function () {
//        ;
//    })
//});

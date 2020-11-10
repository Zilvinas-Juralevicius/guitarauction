$(function () {

    $('[href="#reg"]').click(function () {
        $('#reg').load('/php/db.php/?action=Create');
    });
        $('#guitar').load('/php/db.php');
});


    // let guitarsJson;
    // $.get('/php/db.php?view=json', function (response) {
    //     guitarsJson = response;
    //     let guitarsArray = JSON.parse(guitarsJson);
    //     let html = '';
    //     for (let i = 0; i < guitarsArray.length; i++) {
    //         let guitars = guitarsArray[i];
    //         html += 'Pavdinimas: ' + guitars.title + '<br>';
    //         html += 'Aprasymas: ' + guitars.description + '<br>';
    //         html += 'Kaina: ' + guitars.price + '<br>';
    //         html += 'Grozis: ' + guitars.img + '<br>';
    //     }
//         $('#guitar').html(html);
//     });
// });
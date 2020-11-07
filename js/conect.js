$(function(){

    let guitarJson;
    $.get('./?format=json', function (response) {
        guitarJson = response;
        let guitarArray = JSON.parse(guitarJson);

        let html = '';
        for (let i = 0; i < guitarArray.length; i++){
            let guitar = guitarArray[i];
            html += 'Vardas: ' + guitar.title + '<br>';
            html += 'Pavarde: ' + guitar.description + '<br>';
            html += 'Kaina: ' + guitar.price + '<br>';
            html += 'Grožis: ' + guitar.img + '<hr>';
        }
        $('#guitar').html(html);
    });


});
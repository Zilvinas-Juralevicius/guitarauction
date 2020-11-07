$(function(){

    let guitarJson;
    $.get('./?format=json', function (response) {
        guitarJson = response;
        let guitarArray = JSON.parse(guitarJson);

        let html = '';
        for (let i = 0; i < guitarArray.length; i++){
            let guitar = guitarArray[i];
            html += 'Vardas: ' + persons.first_name + '<br>';
            html += 'Pavarde: ' + persons.last_name + '<br>';
            html += 'Slaptažodis: ' + persons.password + '<br>';
            html += 'Prisijungimo vardas: ' + persons.login_name + '<hr>';
        }
        $('#guitar').html(html);
    });


});
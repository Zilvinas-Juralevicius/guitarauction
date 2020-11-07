$(function(){

    let personsJson;
    $.get('/?format=json', function (response) {
        personsJson = response;
        let personsArray = JSON.parse(personsJson);

        let html = '';
        for (let i = 0; i < guitarArray.length; i++){
            let persons = guitarArray[i];
            html += 'Vardas: ' + persons.first_name + '<br>';
            html += 'Pavarde: ' + persons.last_name + '<br>';
            html += 'El.pastas: ' + persons.email + '<br>';
            html += 'Slaptazodis: ' + persons.password + '<br>';
            html += 'Prisijungimo vardas: ' + persons.login_name + '<hr>';
        }
        $('#persons').html(html);
    });


});
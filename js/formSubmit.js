$(function () {
    $('#forma').load('registruokis.html', function () {
        $('#forma [type="button"]').click(function (event) {
            console.log('veikiu-2');
            event.preventDefault();
            let form = $('#kontaktuForma')[0];
            let data = new FormData(form);
            $('#btnSubmit').prop('disabled', true);
            $.ajax({
                type: 'POST',
                enctype: 'multipart/form-data',
                url: 'saugoti_kontaktu_duomenis.php',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
                success: function (data) {
                    $('#result').html(data);
                    console.log('SUCCESS : ', data);
                    $('#btnSubmit').prop('disabled', false);
                },
                error: function (e) {
                    $('#result').html(e.responseText);
                    console.log('ERROR : ', e);
                    $('#btnSubmit').prop('disabled', false);
                }
            });
        });
    });
});
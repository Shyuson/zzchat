$('#submit').click(function() {

        var nom = $('#pseudo').val();

        var message = $('#password').val();

        $.post('function/check.php', {

            'pseudo': nom,

            'password': message

        });
    });



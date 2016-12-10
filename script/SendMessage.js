setInterval(afficheConversation, 1000);


function afficheConversation(){
          $('#conversation').load('data/ac.txt');
          $('#onlineUser').load('data/online.txt');
}



$('#envoyer').click(function() {

        var nom = $('#nom').val();

        var message = $('#message').val();

        $.post('function/chat.php', { // le chemin relative à faire

            'nom': nom,

            'message': message

        });

        $('#message').val('');
        
      });

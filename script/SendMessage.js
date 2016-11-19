$('#envoyer').click(function() {

        var nom = $('#nom').val();

        var message = $('#message').val();

        $.post('function/chat.php', { // le chemin relative à faire

            'nom': nom,

            'message': message

        });

        function afficheConversation(){
          $('#conversation').load('data/ac.txt');
        }
        setInterval(afficheConversation, 2000);
        
      });

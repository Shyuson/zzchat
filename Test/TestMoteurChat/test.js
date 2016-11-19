$('#envoyer').click(function() {

        var nom = $('#nom').val();

        var message = $('#message').val();

        $.post('chat.php', {

            'nom': nom,

            'message': message

        });

        function afficheConversation(){
          $('#conversation').load('ac.htm');
        }
        setInterval(afficheConversation, 2000);
        function afficheConversation(){
          $('#conversation').load('ac.htm');
        }
      });









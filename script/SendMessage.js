setInterval(afficheConversation, 1000);

/* This function loads the online.txt file and the ac.txt file*/
function afficheConversation(){
          $('#conversation').load('data/ac.txt');
          $('#onlineUser').load('data/online.txt');
}


/* When the user clicks on "envoyer", the function sends 
 * the username and the message to the chat.php file*/
$('#envoyer').click(function() {

        var nom = $('#nom').val();

        var message = $('#message').val();

        $.post('function/chat.php', { 

            'nom': nom,

            'message': message

        });

        $('#message').val('');
        
      });

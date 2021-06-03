$(document).ready(function(){
    // $("#superuser_submit").before("<div class='form-group'><label for='superuser_animaux'>Combien d'animaux possédez vous ?(max 15)</label><input type='number' class='form-control' id='animaux' name='animaux' min='0' max='15'></div>");
    $('.alert').delay(3000).fadeOut(2000);


    $(document).on('keyup', '#superuser_pseudo', function(){
        let username = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/check.php',
            data: {
                pseudo: username
            },
            async: true,
            success: function(data)
            { 
                if (data == 'true') {
                    $('#superuser_pseudo').addClass('is-invalid');
                    //$('#nameHelp').text('Le pseudo est déjà utilisé !!');
                } else {
                    $('#superuser_pseudo').addClass('is-valid');
                };
            } 
        })
    });

    $(document).on('click', '#showall', function(){
        $.ajax({
            type: 'POST',
            url: '/check-db.php',
            async: true,
            success: function(data)
            {
                let obj = jQuery.parseJSON(data);
                let user = '';
                for(i=0; i< obj.length; i++){
                    user += 'pseudo: '+ obj[i].pseudo+'<br/>';
                    user += 'email: '+ obj[i].email+'<br/>';
                }
                $('#reponse').html(user);
            }
        });
    });
});
$(document).ready(function(){
    // $("#superuser_submit").before("<div class='form-group'><label for='superuser_animaux'>Combien d'animaux possédez vous ?(max 15)</label><input type='number' class='form-control' id='animaux' name='animaux' min='0' max='15'></div>");
    $('.alert').delay(3000).fadeOut(2000);


    $(document).on('keyup', '#superuser_pseudo', function(){
        let username = $(this).val();
        $.ajax({
            type: 'POST',
            URL: '/check.php',
            data: {
                pseudo: username
            },
            async: true,
            success: function(data)
            {
                console.log(data)
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
                let obj = jQuery.parseJSON(data)
                $('#reponse').text(obj.pseudo)
            }
        })
    });
});



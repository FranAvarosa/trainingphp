$(document).ready(function() {
    $(document).on('click', '#toggle-sorting-bar', function() {
        if ($('#sorting-bar').hasClass('none') == true) {
            $('#sorting-bar').show('slow').removeClass('none');
        } else {
            $('#sorting-bar').hide(1000).addClass('none');
        }
    });

    $(document).on('keyup', '#name', function() {

        $('#nameHelp').text('Votre pseudo dois compoter entre 3 et 30 caractères');
        if ($('#name').hasClass('is-valid') == true) {
            $('#name').removeClass('is-valid');
        }
        if ($('#name').hasClass('is-invalid') == true) {
            $('#name').removeClass('is-invalid');
        }
        let name = $(this).val();
        if (name.length >= 3 && name.length <= 30) {
            $.ajax({ 
                type: 'POST', 
                url: '/check.php', 
                data: {
                    pseudo: name,
                },
                async: true,
                success: function(data)
                { 
                    if (data == 'true') {
                        $('#name').addClass('is-invalid');
                        $('#nameHelp').text('Le pseudo est déjà utilisé !!');
                    } else {
                        $('#name').addClass('is-valid');
                    }
                } 
            });
        }
        if (name.length > 30) {
            $('#name').addClass('is-invalid');
        }
    });

    /*
    $(document).on('click', '#check-users', function(e) {
        e.preventDefault();
        $.ajax({ 
            type: 'POST', 
            url: '/users-check-bdd.php', 
            async: true,
            success: function(data)
            { 
                var obj = jQuery.parseJSON(data);

                var user = '';
                user += 'Pseudo: '+obj.pseudo;

                $('#response').text(user);

                $('#userss').removeClass('fa-user').addClass('fa-user-times');
            } 
        });
    });
    */

    $(document).on('click', '#showall', function(e) {
        e.preventDefault();
        var number = $(this).data('number');
        if ($('#users-'+number).hasClass('fa-user') == true) {
            $('#users-'+number).removeClass('fa-user').addClass('fa-user-times');
        } else {
            $('#users-'+number).removeClass('fa-user-times').addClass('fa-user');
        }
        //console.log(number);
    });
});
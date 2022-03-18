$(document).ready(function(){
    console.log('JQuery funcionando')
    $('#user-result').hide()

    $('#search').keyup(function(e){
        if($('#search').val()) {
            let search = $('#search').val()
            $.ajax({
                url: '././Back/Funciones/search.php',
                type: 'POST',
                data: {search},
                success: function(response){
                    let users = JSON.parse(response)
                    let template = ''
                    users.forEach(user => {
                        template += `<li>
                        ${user.correo}
                        </li>`
                    })
                    $('#container').html(template)
                    $('#user-result').show()
                }
            })
        }
    })

    $('#user-form').submit(function(e){
        const postData = {
            registro: $('#registro').val(),
            correo: $('#correo').val(),
            pass: $('#pass').val(),
            cpass: $('#cpass').val(),
            nombre: $('#nombre').val(),
            apellido: $('#apellido').val(),
            direccion: $('#direccion').val(),
            telefono: $('#telefono').val(),
            tipo: $('#tipo').val()
        }
        $.post('././Back/Funciones/RegistroFx.php', postData, function(response){
            console.log(response)
            $('#user-form').trigger('reset')
        })
        e.preventDefault()
    })
    
})
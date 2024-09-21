
$(document).ready(function () {

    $('#search').submit(function (e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/search',
            data: $('#search').serialize(),
            success: function (response) {
                $('#user-list').empty()
                switch (typeof response) {
                    case 'string':
                        $('#user-list').append(
                            '<li class="list-group-item d-flex align-items-center">' + response + '</li>'
                        )
                        break;
                    case 'object':
                        const users = Object.values(response)

                        users.forEach(function (user) {
                            $('#user-list').append(
                                '<li class="list-group-item d-flex align-items-center">' + user.name + '</li>'
                            )
                        })
                        break;
                }

            }
        })
    })

    $('#create').submit(function (e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/users/create',
            data: $('#create').serialize(),

            success: function (response) {

                $('#validation').empty()
                $('#validation').removeClass('alert alert-danger alert-success')
                $('#validation').addClass('alert alert-success').text('Пользователь успешно добавлен.')
            }, error: function (response) {
                $('#validation').removeClass('alert alert-danger alert-success')
                $('#validation').addClass('alert alert-danger').text(response.responseJSON.message)
            }
        })
    })
})

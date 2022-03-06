<script>
    $('#laravel_crud').DataTable();

    function addPost() {
        $("#id").val('');
        $('#post-modal').modal('show');
    }

    function editPost(event) {

        var id = $(event).data("id");
        let _url = `/crudjs/${id}`;
        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if (response) {
                    $("#id").val(response.id);
                    $("#nombre").val(response.nombre);
                    $("#correo").val(response.correo);
                    $("#dni").val(response.dni);
                    $("#telefono").val(response.telefono);
                    $('#post-modal').modal('show');
                    ajax.reload()
                }
            }
        });
    }

    function createPost() {
        var id = $('#id').val();
        var nombre = $('#nombre').val();
        var correo = $('#correo').val();
        var dni = $('#dni').val();
        var telefono = $('#telefono').val();

        let _url = `/crudjs`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        todoOK = true;
        reglaEmail = /^([\da-z_.-]+)@([\da-z.-]+).([a-z.]{2,6})$/
        if (!reglaEmail.exec(correo)) {
            todoOK = false;
             $('#correoError').text('Email no valido');
        }
        if (dni === '') {
            todoOK = false;
            $('#dniError').text('Completa el campo DNI');
        }

        if (!isNaN(nombre) || nombre === '') {
            todoOK = false;
              $('#nombreError').text('Nombre no valido');
        }

        if (isNaN(telefono)|| telefono === '') {
            todoOK = false;
        $('#telefonoError').text(' Revisa en numero de telefono');
        }
        if(todoOK){
        $.ajax({
            url: _url,
            type: "POST",
            data: {
                id: id,
                nombre: $('#nombre').val(),
                correo: $('#correo').val(),
                dni: $('#dni').val(),
                telefono: $('#telefono').val(),
                _token: _token
            },
            success: function(response) {
                if (response.code == 200) {
                    if (id != "") {
                        $("#row_" + id + " td:nth-child(1)").html(response.data.nombre);
                        $("#row_" + id + " td:nth-child(2)").html(response.data.dni);
                        $("#row_" + id + " td:nth-child(3)").html(response.data.correo);
                        $("#row_" + id + " td:nth-child(4)").html(response.data.telefono);
                    } else {
                        $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response
                            .data.nombre + '</td><td>' + response.data.dni + '</td><td>' +
                            response.data.correo + '</td><td>' + response.data.telefono + '</td><td>' +
                            '<a href="javascript:void(0)" data-id="' + response.data.id +
                            '" onclick="editPost(event.target)" class="btn btn-info">Edit</a><a href="javascript:void(0)" data-id="' +
                            response.data.id +
                            '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>'
                        );
                    }
                    $('#nombre').val('');
                    $('#correo').val('');

                    $('#post-modal').modal('hide');
                }
            },
            error: function(response) {

            }
            
        });
    }
    }

    function deletePost(event) {
        var id = $(event).data("id");
        let _url = `/crudjs/${id}`;
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: 'DELETE',
            data: {
                _token: _token
            },
            success: function(response) {
                $("#row_" + id).remove();
            }
        });
    }
</script>

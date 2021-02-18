$(document).ready(function() {
    $('#dataTableEsp').DataTable({

        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
    });
});

$(".list-group-item").click(function() {
    $(this).parent().addClass('active').siblings().removeClass('active');
});


//Guardar nuevo Profesor
$('#formAgregarProfesor').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.email,
                '<center><button class="btn btn-primary editarProfesor" idProfesor="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarProfesor" idProfesor="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

//Obtener datos del profesor a editar
$('.editarProfesor').click(function(e) {
    e.preventDefault();
    let idProfesor = $(this).attr("idProfesor");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarProfesor',
        data: { idProfesor, indexTr },
        success: function(data) {
            $('#divEditarProfesor').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarProfesor').modal('show');

});

//Guardar profesor editado
$('#formEditarProfesor').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;
            newData = [
                    data.nombre,
                    data.email,
                    '<center><button class="btn btn-primary editarProfesor" idProfesor="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                    '<center><button class="btn btn-primary eliminarProfesor" idProfesor="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
                ] //Array, data here must match structure of table data
            t.row(idIndex).data(newData).draw();
            $('#modalEditarProfesor').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.editarProfesor').click(function(e) {
    e.preventDefault();
    let idProfesor = $(this).attr("idProfesor");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: 'buscarProfesor',
        data: { idProfesor, indexTr },
        success: function(data) {
            $('#divEditarProfesor').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarProfesor').modal('show');

});

$('.eliminarProfesor').click(function(e) {
    e.preventDefault();
    let idProfesor = $(this).attr("idProfesor");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar el registro?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: 'eliminarProfesor',
                    data: { idProfesor, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });

});


//Obtener datos del Parametro a editar
$('#modalEditarParametro').on('hidden.bs.modal', function() {
    $('#divEditarParametro').empty();
});

$('.editarParametro').click(function(e) {
    e.preventDefault();
    let idParametro = $(this).attr("idParametro");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarParametro',
        data: { idParametro, indexTr },
        success: function(data) {
            $('#divEditarParametro').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        },
        complete: function(data) {
            $('#modalEditarParametro').modal('show');
        }
    });



});

//Guardar Parametro editado
$('#formEditarParametro').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    let cantidad_letras = $('#valor').val().length;

    if (cantidad_letras > 2000) {
        swal("No puede tener mas de 2000 letras");
    } else {
        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize(),
            success: function(data) {
                console.log(data);
                let t = $('#dataTableEsp').DataTable();
                let idIndex = data.indexTr;
                // newData = [ 
                //     data.valor,
                //     data.email, 
                //     '<center><button class="btn btn-primary editarParametro" idParametro="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                //     '<center><button class="btn btn-primary eliminarParametro" idParametro="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
                // ] //Array, data here must match structure of table data
                // t.row(idIndex).data( newData ).draw();
                $('#modalEditarParametro').modal('hide');
                location.reload();

            },
            error: function(error) {
                console.log(error);
            }
        });
    }



});



//Guardar nueva Asignatura
$('#formAgregarAsignatura').submit(function(e) {

    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    const editorData = editor.getData();
    console.log(editorData);
    if(editorData){
        $('textarea[name="descripcion"]').text(editorData);
    }
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.idprofesor,
                data.color,
                data.imagen,
                data.examen,
                data.descripcion,
                '<center><button class="btn btn-primary editarAsignatura" idAsignatura="' + data.idasignatura + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarAsignatura" idAsignatura="' + data.idasignatura + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});


//Obtener datos de la asignatura a editar
$('.editarAsignatura').click(function(e) {
    e.preventDefault();
    let idAsignatura = $(this).attr("idAsignatura");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarAsignatura',
        data: { idAsignatura, indexTr },
        success: function(data) {
            $('#divEditarAsignatura').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarAsignatura').modal('show');

});

//Guardar Asignatura editado
$('#formEditarAsignatura').submit(function(e) {
    e.preventDefault();

    const editorData = editor.getData();
    console.log(editorData);
    if(editorData){
        $('textarea[name="descripcion"]').text(editorData);
    }
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    // let url = formData.attr('action');


    $.ajax({
        type: 'POST',
        url: '/editarAsignatura',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            // newData = [ 
            //     data.nombre,
            //     data.idprofesor, 
            //     '<center><button class="btn btn-primary editarAsignatura" idAsignatura="'+data.idasignatura +'"><i class="fas fa-edit"></i></button></center>',
            //     '<center><button class="btn btn-primary eliminarAsignatura" idAsignatura="'+data.idasignatura+'"><i class="fas fa-trash-alt"></i></button></center>',
            // ] //Array, data here must match structure of table data
            // t.row(idIndex).data( newData ).draw();
            // $('#modalEditarAsignatura').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.eliminarAsignatura').click(function(e) {
    e.preventDefault();
    let idAsignatura = $(this).attr("idAsignatura");
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar la asignatura? también borrarás todos los contenidos dentro de esta, unidades, clases y documentos",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarAsignatura',
                    data: { idAsignatura, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });


});



//Guardar nueva Revista
$('#formAgregarRevista').submit(function(e) {

    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    const editorData = editor.getData();
    console.log(editorData);
    if(editorData){
        $('textarea[name="contenido"]').text(editorData);
    }
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {

            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

//Obtener datos de la Revista a editar
$('.editarRevista').click(function(e) {
    e.preventDefault();
    let idRevista = $(this).attr("idRevista");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarRevista',
        data: { idRevista, indexTr },
        success: function(data) {
            $('#divEditarRevista').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        },
        complete: function(data) {
            $('#modalEditarRevista').modal('show');
        }
    });

});

//Guardar Revista editado
$('#formEditarRevista').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    // let url = formData.attr('action');
    for(var pair of formData.entries()) {
        console.log(pair[0]+ ', ' + pair[1]); 
    }
    $.ajax({
        type: 'POST',
        url: '/editarRevista',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.eliminarRevista').click(function(e) {
    e.preventDefault();
    let idRevista = $(this).attr("idRevista");
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar el registro?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarRevista',
                    data: { idRevista, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });



});




//Guardar nueva unidad
$('#formAgregarUnidad').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.asignatura,
                data.examen,
                data.password,
                '<center><button class="btn btn-primary editarUnidad" idUnidad="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarUnidad" idUnidad="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});


//Obtener datos de la unidad a editar
$('.editarUnidad').click(function(e) {
    e.preventDefault();
    let idUnidad = $(this).attr("idUnidad");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarUnidad',
        data: { idUnidad, indexTr },
        success: function(data) {
            $('#divEditarUnidad').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarUnidad').modal('show');

});


//Guardar Unidad editado
$('#formEditarUnidad').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [
                    data.nombre,
                    data.asignatura,
                    data.examen,
                    data.password,
                    '<center><button class="btn btn-primary editarUnidad" idUnidad="' + data.idunidad + '"><i class="fas fa-edit"></i></button></center>',
                    '<center><button class="btn btn-primary eliminarUnidad" idUnidad="' + data.idunidad + '"><i class="fas fa-trash-alt"></i></button></center>',
                ] //Array, data here must match structure of table data
            t.row(idIndex).data(newData).draw();
            $('#modalEditarUnidad').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.eliminarUnidad').click(function(e) {
    e.preventDefault();
    let idUnidad = $(this).attr("idUnidad");
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar la unidad? también borrarás todas las clases dentro de la unidad y los documentos de las clases.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarUnidad',
                    data: { idUnidad, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });



});


//Guardar nueva clase
$('#formAgregarClase').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            // console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.unidad,
                data.asignatura,
                '<center><button class="btn btn-primary editarClase" idClase="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarClase" idClase="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});


//Obtener datos de la clase a editar
$('.editarClase').click(function(e) {
    e.preventDefault();
    let idClase = $(this).attr("idClase");
    let idCurso = $(this).attr("idCurso");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarClase',
        data: { idClase, idCurso, indexTr },
        success: function(data) {
            // console.log(data);
            $('#divEditarClase').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarClase').modal('show');

});


//Guardar Clase editado
$('#formEditarClase').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [
                    data.nombre,
                    data.unidad,
                    data.asignatura,
                    '<center><button class="btn btn-primary editarClase" idClase="' + data.idClase + '"><i class="fas fa-edit"></i></button></center>',
                    '<center><button class="btn btn-primary eliminarClase" idClase="' + data.idClase + '"><i class="fas fa-trash-alt"></i></button></center>',
                ] //Array, data here must match structure of table data
            t.row(idIndex).data(newData).draw();
            $('#modalEditarClase').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.eliminarClase').click(function(e) {
    e.preventDefault();
    let idClase = $(this).attr("idClase");
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar la clase? también borrarás todos los documentos ligados a esta clase.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarClase',
                    data: { idClase, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });



});




//Guardar nueva Documento
$('#formAgregarDocumento').submit(function(e) {
    e.preventDefault();
    // alert('funciona');
    let form = $(this);
    let url = form.attr('action');

    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.documento,
                data.link,
                data.asignatura,
                data.unidad,
                data.clase,
                '<center><button class="btn btn-primary editarDocumento" idDocumento="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarDocumento" idDocumento="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});


//Obtener datos de la Documento a editar
$('.editarDocumento').click(function(e) {
    e.preventDefault();
    let idDocumento = $(this).attr("idDocumento");
    let idCurso = $(this).attr("idCurso");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarDocumento',
        data: { idDocumento, idCurso, indexTr },
        success: function(data) {
            console.log(data);
            $('#divEditarDocumento').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarDocumento').modal('show');

});

//Guardar Documento editado
$('#formEditarDocumento').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());


    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [
                    data.nombre,
                    data.documento,
                    data.link,
                    data.asignatura,
                    data.unidad,
                    data.clase,
                    '<center><button class="btn btn-primary editarDocumento" idDocumento="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                    '<center><button class="btn btn-primary eliminarDocumento" idDocumento="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
                ] //Array, data here must match structure of table data
            t.row(idIndex).data(newData).draw();
            $('#modalEditarDocumento').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});


$('.eliminarDocumento').click(function(e) {
    e.preventDefault();
    let idDocumento = $(this).attr("idDocumento");
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar el documento?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarDocumento',
                    data: { idDocumento, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });



});


//Guardar nuevo Plan
$('#formAgregarPlan').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add([
                data.nombre,
                data.cantidad_meses,
                data.precio,
                data.estado,
                '<center><button class="btn btn-primary editarPlan" idPlan="' + data.id + '"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary cambiarEstadoPlan" idPlan="' + data.id + '"><i class="fas fa-trash-alt"></i></button></center>',
            ]).draw(false);
            $('#basicExampleModal').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

//Obtener datos del profesor a editar
$('.editarPlan').click(function(e) {
    e.preventDefault();
    let idPlan = $(this).attr("idPlan");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/buscarPlan',
        data: { idPlan, indexTr },
        success: function(data) {
            $('#divEditarPlan').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

    $('#modalEditarPlan').modal('show');

});

//Guardar Plan editado
$('#formEditarPlan').submit(function(e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        success: function(data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;
            newData = [
                    data.cantidadMeses,
                    data.precio,
                    '<center><button class="btn btn-primary editarPlan" idPlan="' + data.idPlan + '"><i class="fas fa-edit"></i></button></center>',
                    '<center><button class="btn btn-primary cambiarEstadoPlan" idPlan="' + data.idPlan + '"><i class="fas fa-trash-alt"></i></button></center>',
                ] //Array, data here must match structure of table data
            t.row(idIndex).data(newData).draw();
            $('#modalEditarPlan').modal('hide');
            location.reload();

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.cambiarEstadoPlan').click(function(e) {
    e.preventDefault();
    let idPlan = $(this).attr("idPlan");

    // //Obteniendo el index de la row para cuando se actualice
    // let t = $('#dataTableEsp').DataTable();
    // let x = $(this).parents('tr');
    // let indexTr = t.row(x).index();

    $.ajax({
        type: 'GET',
        url: '/cambiarEstadoPlan',
        data: { idPlan },
        success: function(data) {
            location.reload();
        },
        error: function(error) {
            console.log(error);
        }
    });



});

$('.eliminarPlan').click(function(e) {
    e.preventDefault();
    let idPlan = $(this).attr("idPlan");

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row(x).index();

    swal({
            title: "Atención!",
            text: "Estas seguro que quieres eliminar el registro?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["Cancelar", "Eliminar"],
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: 'GET',
                    url: '/eliminarPlan',
                    data: { idPlan, indexTr },
                    success: function(data) {
                        console.log(data);
                        t.row(indexTr).remove().draw();

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                swal("Registro Eliminado!", {
                    icon: "success",
                });
            } else {
                //   swal("Your imaginary file is safe!");
            }
        });

});


// -------------------------------------------------------------------------------------


$('.cursoPago').click(function(e) {
    e.preventDefault();
    let url = $(this).attr('href');

    $.ajax({
        type: 'GET',
        url: url,
        success: function(data) {
            // console.log(data);
            $('#seccionPago').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
});





$('.selectAsignatura').change(function() {

    var idAsignatura = $(this).val();

    $.ajax({
        type: 'GET',
        url: '/selectUnidadesAjax',
        data: { idAsignatura },
        success: function(data) {
            // console.log(data);
            $('#selectUnidades').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
});

$('.selectAsignaturaDoc').change(function() {

    var idAsignatura = $(this).val();

    $.ajax({
        type: 'GET',
        url: '/selectUnidadesDocAjax',
        data: { idAsignatura },
        success: function(data) {
            // console.log(data);
            $('#selectUnidadesDoc').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
});

$('.contactarProfesor').click(function(e) {
    e.preventDefault();
    let idProfesor = $(this).attr("idProfesor");
    let idAsignatura = $(this).attr("idAsignatura");
    let idAlumno = $(this).attr("idAlumno");

    $.ajax({
        type: 'GET',
        url: '/ContactarProfesor',
        data: { idProfesor, idAsignatura, idAlumno },
        success: function(data) {
            if (data == 'sin intentos') {
                swal("Se acabaron los correos este mes!");
            } else {
                $('#modalBodyContactarProfesor').empty().html(data);
                $('#contactarProfesorModal').modal('show');
            }

        },
        error: function(error) {
            console.log(error);
        }
    });

});

$('.verMisPreguntas').click(function() {
    var idAsignatura = $(this).attr('idAsignatura');
    var idProfesor = $(this).attr('idProfesor');
    var idAlumno = $(this).attr('idAlumno');


    $.ajax({
        type: 'GET',
        url: '/BuscarCorreos',
        data: { idProfesor, idAsignatura, idAlumno },
        success: function(data) {
            // console.log(data);
            $('#bodyModalVerMisPreguntas').empty().html(data);
        },
        error: function(error) {
            console.log(error);
        },
        complete: function(data) {
            $('#badge' + idAsignatura).remove();
            $('#modalVerMisPreguntas').modal('show');
        }
    });




});

$('.cambiarNombreAlumno').click(function(e) {
    e.preventDefault();
    var idAlumno = $(this).attr('idAlumno');

    $('#modalNombreAlumno' + idAlumno).modal('show');
});

$('#contact-form').submit(function(e) {
    e.preventDefault();

    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type: 'POST',
        url: url,
        data: form.serialize(),
        beforeSend: function() {
            swal({
                title: "",
                text: "Enviando.",
                showConfirmButton: false
            });
        },
        success: function(data) {

            swal.close();
            swal("Listo!", "Correo Enviado!", "success");
            console.log(data);

            //    $('#contactarProfesorModal').modal('hide');
        },
        error: function(error) {
            console.log(error);
        },
        complete: function(data) {
            location.reload();
        }
    });
});




$('.cargarClase').click(function(e) {


    //    var n = 0;

    //    var miIntervalo = setInterval(function(){
    //     n++;
    //     console.log(n);
    //   },1000);


});
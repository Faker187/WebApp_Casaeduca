

$(document).ready( function () {
    $('#dataTableEsp').DataTable(
        {
        
            language:{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
        }
    );
} );

$(".list-group-item").click(function() {
    $(this).parent().addClass('active').siblings().removeClass('active');
});


//Guardar nuevo Profesor
$('#formAgregarProfesor').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add( [
                data.nombre,
                data.email,
                '<center><button class="btn btn-primary editarProfesor" idProfesor="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarProfesor" idProfesor="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] ).draw( false );
            $('#basicExampleModal').modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

//Obtener datos del profesor a editar
$('.editarProfesor').click(function (e) {
    e.preventDefault();
    let idProfesor = $(this).attr( "idProfesor" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/buscarProfesor',
        data:{idProfesor, indexTr},
        success: function (data) {
            $('#divEditarProfesor').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarProfesor').modal('show');

});

//Guardar profesor editado
$('#formEditarProfesor').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr ;
            newData = [ 
                data.nombre, 
                data.email, 
                '<center><button class="btn btn-primary editarProfesor" idProfesor="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarProfesor" idProfesor="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] //Array, data here must match structure of table data
            t.row(idIndex).data( newData ).draw();
            $('#modalEditarProfesor').modal('hide');

        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

$('.editarProfesor').click(function (e) {
    e.preventDefault();
    let idProfesor = $(this).attr( "idProfesor" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: 'buscarProfesor',
        data:{idProfesor, indexTr},
        success: function (data) {
            $('#divEditarProfesor').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarProfesor').modal('show');

});

$('.eliminarProfesor').click(function (e) {
    e.preventDefault();
    let idProfesor = $(this).attr( "idProfesor" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: 'eliminarProfesor',
        data:{idProfesor, indexTr},
        success: function (data) {
            console.log(data);
            t.row(indexTr).remove().draw();
            
        },
        error: function (error) {
            console.log(error);
        }
    });
});


//Guardar nueva Asignatura
$('#formAgregarAsignatura').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);

            var curso = data.idCurso;
            console.log(curso)
            //No se por que no funciona el switch aca, usare solo IF
            if (curso == 1) {
               var curso = "Primero Básico";
            } else if(curso == 2) {
                var curso = "Segundo Básico";
            } else if(curso == 3) {
                var curso = "Tercero Básico";
            } else if(curso == 4) {
                var curso = "Cuarto Básico";
            } else if(curso == 5) {
                var curso = "Quinto Básico";
            } else if(curso == 6) {
                var curso = "Sexto Básico";
            } else if(curso == 7) {
                var curso = "Séptimo Básico";
            } else if(curso == 8) {
                var curso = "Octavo Básico";
            }
           
            let t = $('#dataTableEsp').DataTable();

            t.row.add( [
                data.nombre,
                curso,
                '<center><button class="btn btn-primary editarAsignatura" idAsignatura="'+data.idasignatura +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarAsignatura" idAsignatura="'+data.idasignatura+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] ).draw( false );
            $('#basicExampleModal').modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
          
});


//Obtener datos de la asignatura a editar
$('.editarAsignatura').click(function (e) {
    e.preventDefault();
    let idAsignatura = $(this).attr( "idAsignatura" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/buscarAsignatura',
        data:{idAsignatura, indexTr},
        success: function (data) {
            $('#divEditarAsignatura').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarAsignatura').modal('show');

});

//Guardar Asignatura editado
$('#formEditarAsignatura').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;
            let curso = '';

            switch (data.idcurso) {
                case 1:
                    curso = "Primero Básico";
                    break;
                case 2:
                    curso = "Segundo Básico";

                    break;
                case 3:
                    curso = "Tercero Básico";

                    break;
                case 4:
                    curso = "Cuarto Básico";

                    break;
                case 5:
                    curso = "Quinto Básico";

                    break;
                case 6:
                    curso = "Sexto Básico";

                    break;
                case 7:
                    curso = "Séptimo Básico";

                    break;
                case 8:
                    curso = "Octavo Básico";

                    break;
            
                default:
                    break;
            }
            newData = [ 
                data.nombre,
                curso, 
                '<center><button class="btn btn-primary editarAsignatura" idAsignatura="'+data.idasignatura +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarAsignatura" idAsignatura="'+data.idasignatura+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] //Array, data here must match structure of table data
            t.row(idIndex).data( newData ).draw();
            $('#modalEditarAsignatura').modal('hide');

        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

$('.eliminarAsignatura').click(function (e) {
    e.preventDefault();
    let idAsignatura = $(this).attr( "idAsignatura" );
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/eliminarAsignatura',
        data:{idAsignatura, indexTr},
        success: function (data) {
            console.log(data);
            t.row(indexTr).remove().draw();
        },
        error: function (error) {
            console.log(error);
        }
    });
});

//Guardar nueva unidad
$('#formAgregarUnidad').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add( [
                data.nombre,
                data.asignatura,
                '<center><button class="btn btn-primary editarUnidad" idUnidad="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarUnidad" idUnidad="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] ).draw( false );
            $('#basicExampleModal').modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
          
});


//Obtener datos de la unidad a editar
$('.editarUnidad').click(function (e) {
    e.preventDefault();
    let idUnidad = $(this).attr( "idUnidad" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/buscarUnidad',
        data:{idUnidad, indexTr},
        success: function (data) {
            $('#divEditarUnidad').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarUnidad').modal('show');

});


//Guardar Unidad editado
$('#formEditarUnidad').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [ 
                data.nombre,
                data.asignatura, 
                '<center><button class="btn btn-primary editarUnidad" idUnidad="'+data.idunidad +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarUnidad" idUnidad="'+data.idunidad+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] //Array, data here must match structure of table data
            t.row(idIndex).data( newData ).draw();
            $('#modalEditarUnidad').modal('hide');

        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

$('.eliminarUnidad').click(function (e) {
    e.preventDefault();
    let idUnidad = $(this).attr( "idUnidad" );
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/eliminarUnidad',
        data:{idUnidad, indexTr},
        success: function (data) {
            console.log(data);
            t.row(indexTr).remove().draw();
        },
        error: function (error) {
            console.log(error);
        }
    });
});


//Guardar nueva clase
$('#formAgregarClase').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            // console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add( [
                data.nombre,
                data.unidad,
                data.asignatura,
                '<center><button class="btn btn-primary editarClase" idClase="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarClase" idClase="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] ).draw( false );
            $('#basicExampleModal').modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
          
});


//Obtener datos de la clase a editar
$('.editarClase').click(function (e) {
    e.preventDefault();
    let idClase = $(this).attr( "idClase" );
    let idCurso = $(this).attr( "idCurso" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/buscarClase',
        data:{idClase,idCurso,indexTr},
        success: function (data) {
            // console.log(data);
            $('#divEditarClase').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarClase').modal('show');

});


//Guardar Clase editado
$('#formEditarClase').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    $.ajax({
        type:'POST',
        url: url,
        data:form.serialize(),
        success: function (data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [ 
                data.nombre,
                data.unidad,
                data.asignatura,
                '<center><button class="btn btn-primary editarClase" idClase="'+data.idClase +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarClase" idClase="'+data.idClase+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] //Array, data here must match structure of table data
            t.row(idIndex).data( newData ).draw();
            $('#modalEditarClase').modal('hide');

        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

$('.eliminarClase').click(function (e) {
    e.preventDefault();
    let idClase = $(this).attr( "idClase" );
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/eliminarClase',
        data:{idClase, indexTr},
        success: function (data) {
            console.log(data);
            t.row(indexTr).remove().draw();
        },
        error: function (error) {
            console.log(error);
        }
    });
});




//Guardar nueva Documento
$('#formAgregarDocumento').submit(function (e) {
    e.preventDefault();
    // alert('funciona');
    let form = $(this);
    let url = form.attr('action');

    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());

    $.ajax({
        type:'POST',
        url: url,
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);

            let t = $('#dataTableEsp').DataTable();

            t.row.add( [
                data.nombre,
                data.documento,
                data.asignatura,
                data.unidad,
                data.clase,
                '<center><button class="btn btn-primary editarDocumento" idDocumento="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarDocumento" idDocumento="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] ).draw( false );
            $('#basicExampleModal').modal('hide');
        },
        error: function (error) {
            console.log(error);
        }
    });
          
});


//Obtener datos de la Documento a editar
$('.editarDocumento').click(function (e) {
    e.preventDefault();
    let idDocumento = $(this).attr( "idDocumento" );
    let idCurso = $(this).attr( "idCurso" );

    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/buscarDocumento',
        data:{idDocumento,idCurso,indexTr},
        success: function (data) {
            console.log(data);
            $('#divEditarDocumento').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
    
     $('#modalEditarDocumento').modal('show');

});

//Guardar Documento editado
$('#formEditarDocumento').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');

    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());


    $.ajax({
        type:'POST',
        url: url,
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            let t = $('#dataTableEsp').DataTable();
            let idIndex = data.indexTr;

            newData = [ 
                data.nombre,
                data.documento,
                data.asignatura,
                data.unidad,
                data.clase,
                '<center><button class="btn btn-primary editarDocumento" idDocumento="'+data.id +'"><i class="fas fa-edit"></i></button></center>',
                '<center><button class="btn btn-primary eliminarDocumento" idDocumento="'+data.id+'"><i class="fas fa-trash-alt"></i></button></center>',
            ] //Array, data here must match structure of table data
            t.row(idIndex).data( newData ).draw();
            $('#modalEditarDocumento').modal('hide');

        },
        error: function (error) {
            console.log(error);
        }
    });
          
});

$('.eliminarDocumento').click(function (e) {
    e.preventDefault();
    let idDocumento = $(this).attr( "idDocumento" );
    //Obteniendo el index de la row para cuando se actualice
    let t = $('#dataTableEsp').DataTable();
    let x = $(this).parents('tr');
    let indexTr = t.row( x ).index();

    $.ajax({
        type:'GET',
        url: '/eliminarDocumento',
        data:{idDocumento, indexTr},
        success: function (data) {
            console.log(data);
            t.row(indexTr).remove().draw();
        },
        error: function (error) {
            console.log(error);
        }
    });
});



// -------------------------------------------------------------------------------------



    $('.selectAsignatura').change(function () {
      
        var idAsignatura = $(this).val();
        
        $.ajax({
            type:'GET',
            url: '/selectUnidadesAjax',
            data:{idAsignatura},
            success: function (data) {
                // console.log(data);
                $('#selectUnidades').empty().html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
    
    $('.selectAsignaturaDoc').change(function () {
      
        var idAsignatura = $(this).val();
        
        $.ajax({
            type:'GET',
            url: '/selectUnidadesDocAjax',
            data:{idAsignatura},
            success: function (data) {
                // console.log(data);
                $('#selectUnidadesDoc').empty().html(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

   
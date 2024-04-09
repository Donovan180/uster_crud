/* Función para eliminar Conductor */
function deleteDriver(idDriver) {
    var confrima = confirm('¿Seguro quieres eliminar?');
    var ruta_delete_driver = 'detele-driver';
    if (confrima) {
        location.href= ruta_delete_driver+'/'+idDriver;
    }
}

/* Función para eliminar Vehículo */
function deleteVehicle(idVehicle) {
    var confrima = confirm('¿Seguro quieres eliminar?');
    var ruta_delete_vehicle = 'detele-vehicle';
    if (confrima) {
        location.href=ruta_delete_vehicle+'/'+idVehicle;
    }
}

/* Deshabilitar fechas anteriores a hoy */
var date_trip = document.getElementById('date-trip');
var today = new Date();
var minDate = new Date();

minDate.setDate(today.getDate());

// Establecer los atributos min en el elemento de entrada de fecha
date_trip.setAttribute('min', minDate.toISOString().split('T')[0]);


/* Evento para filtar los Vehículos por fecha */
$('#date-trip').on('change',function() {
    let selected_date = $('#date-trip').val();
    var _token = $('input[name = "_token"]').val();
    $("#vehicle").html("<option>-- Vehicle --</option>");
    $("#driver").html("<option>-- Driver --</option>");
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
        url: url_search_vehicle,
        type: 'post',
        data: {_token:_token,selected_date:selected_date},
        success: function(response) {
            let data_json = JSON.parse(response);
            if(data_json == ''){
            $("#vehicle").attr('disabled','disabled');
            $("#driver").attr('disabled','disabled');
            }else{
                $.each(data_json, function(i,item) {
                    $("#vehicle").removeAttr("disabled");
                    $("#vehicle").append("<option value="+item.model+">"+item.brand+" - "+item.model+"</option>");
                });
            }
        },
        error: function(response){
            alert(response);
        }
    });
});


/* Evento para filtar los Vehículos y Conductor por fecha y licencia */
$('#vehicle').change(function() {
    let selected_date = $('#date-trip').val();
    let vehicle_trip = $('#vehicle').val();
    var _token = $('input[name = "_token"]').val();
    $("#driver").html("<option>-- Driver --</option>");
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
        url: url_search_driver,
        type: 'post',
        data: {_token:_token,selected_date:selected_date,vehicle_trip: vehicle_trip},
        success: function(response) {
            let data_json = JSON.parse(response);
            if(data_json == ''){
            $("#driver").attr('disabled','disabled');
            }else{
                $.each(data_json, function(i,item) {
                    $("#driver").removeAttr("disabled");
                    $("#driver").append("<option value="+item.name+">"+item.name+"</option>");
                });
            }

        },
        error: function(response){
            alert(response);
        }
    });
});

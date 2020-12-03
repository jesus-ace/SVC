function btnSaveLoad() {
    $("#btn_save").html('Guardando ...');
    $("#btn_save").attr("disabled", true);
}

function btnSave() {
    $("#btn_save").html('Guardar');
    $("#btn_save").attr("disabled", false);
}

$(document).ready(function() {

    $(".textoGlo").keypress(function (key) {
        if ((key.charCode < 97 || key.charCode > 122)
            && (key.charCode < 65 || key.charCode > 90)
            && (key.charCode != 45)
            && (key.charCode != 241)
            && (key.charCode != 209)
            && (key.charCode != 32)
        )
        return false;
    });
    $(".#vi_cedula").keypress(function (key) {
        if ((key.charCode < 48 || key.charCode > 57))
        return false;
    });
    $('#vi_cedula').on('keydown keypress',function(e){
        if(e.key.length === 1){
            if($(this).val().length < 8 && !isNaN(parseFloat(e.key))) {
                $(this).val($(this).val() + e.key);
            }
            return false;
        }
    });

    $("#frm_foto").unbind('submit').bind('submit', function(){

        var vi_nombre = $('#vi_nombre').val();
        var vi_apellido = $('#vi_apellido').val();
        var vi_cedula = $('#vi_cedula').val();
        var vi_telefono = $('#vi_telefono').val();
        var vi_domicilio = $('#vi_domicilio').val();
        var vi_dep_id = $('#vi_dep_id').val();
        var vi_responsable = $('#vi_responsable').val();
        var vi_mt_id = $('#vi_mt_id').val();
        var radio = $("input[name='radio_select']:checked").val();

        if (radio == 0) {
            cxt.drawImage(video, 0, 0, 300, 150);
            var data = canvas.toDataURL("image/jpeg");
            var vi_photo = data.split(",", 2);
            $.ajax({
                type : "POST",
                url : "backend/save_photo.php",
                data : {vi_photo : info[1], vi_nombre: vi_nombre, vi_apellido: vi_apellido, vi_cedula: vi_cedula, vi_telefono: vi_telefono, vi_domicilio: vi_domicilio, vi_dep_id: vi_dep_id, vi_responsable: vi_responsable, vi_mt_id: vi_mt_id},
                dataType : 'json',
                beforeSend: function() {
                    btnSaveLoad();
                },
                success : function(response) {
                    btnSave();
                    if (response.success == true) {
                        swal("MENSAJE", response.messages , "success");
                        $("#frm_foto")[0].reset();
                        $("#radiosfoto").click();
                    } else {
                        swal("MENSAJE", response.messages , "error");
                    }
                }
            });
        } else if (radio == 1) {

            $.ajax({
                url: 'backend/save_img.php',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    btnSaveLoad();
                },
                success: function(response){
                    btnSave();
                    if (response.success == true) {
                        swal("MENSAJE", response.messages , "success");
                        $("#frm_foto")[0].reset();
                        $("#radiosfoto").click();
                    } else {
                        swal("MENSAJE", response.messages , "error");
                    }
                }
            });

        }

        return false;
        
    });


});
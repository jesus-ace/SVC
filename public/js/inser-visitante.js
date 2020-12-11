/*function btnSaveLoad() {
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
    });*/

    $("#frm_foto").unbind('submit').bind('submit', function(){

        var vi_nombre = $('#vi_nombre').val();
        var vi_apellido = $('#vi_apellido').val();
        var vi_cedula = $('#vi_cedula').val();
        var vi_telefono = $('#vi_telefono').val();
        var vi_domicilio = $('#vi_domicilio').val();
        var vi_dep_id = $('#vi_dep_id').val();
        var vi_responsable = $('#vi_responsable').val();
        var vi_mt_id = $('#vi_mt_id').val();
        
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
                } 
                else {
                    swal("MENSAJE", response.messages , "error");
                }
                
            }
        });
        return false; 
    });
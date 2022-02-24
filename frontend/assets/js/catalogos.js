$(document).ready(function(){

});

var Catalogos = {

    obtener_catalogo_tipo_contacto : function(){
        //peticion ajax del catalogo
        $.ajax({
            type : 'post', //tipo de peticion que es del backend POST-GET-PUT-DELETE....
            url : URL_BACKEND + 'peticion=catalogos&funcion=tipo_contacto', // url de consumo del servicio
            data : {}, //datos que van hacia la ruta del backed
            dataType : 'json', //la respuesta que me devuel del server JSON,HTML,XML,....
            success : function(respuestaAjax){
                console.log(respuestaAjax);
            },error : function (error){
                console.log(error);
                alert('error en el catalogo');
            }
        });
    }

}
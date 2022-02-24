$(document).ready(function(){

    $(document).on('click','#btn_agregar_empleado',function(){
        Empleados.mostrar_formulario_empleado();
    });

});

//variable que sera tratada como una clase en programacion
var Empleados = {

    mostrar_formulario_empleado : function(){
        $('#contenedor_tablero_empleado').fadeOut();//hide() - JS
        $('#contenedor_formulario_empleado').fadeIn();//show() - JS
    },

}
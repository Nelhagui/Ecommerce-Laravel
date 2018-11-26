window.onload=function() {

    var name = document.getElementById("name")
    
    // VER EJEMPLO 2 (SWET ALERT) Y 3 
    var formulario = document.getElementById("formulario")
    console.log(formulario)
    console.log(name)
    formulario.onsubmit = function (evento) {
        if (!validaciones()) {
            evento.preventDefault()
        } else {
            formulario.submit
        }
        function validaciones () {
            if (name.value === '') {
                alert ('El campo no puede estar vacío')
                return false
            } 
            return true
        }
    }


} 
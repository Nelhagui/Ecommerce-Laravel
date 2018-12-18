window.onload=function() {

    var name = document.getElementById("name")
    var email = document.getElementById("email")
    var password = document.getElementById("password")
    var passwordconfirm = document.getElementById("password-confirm")
    // var provincia = document.getElementById("provincia")
    // var municipio = document.getElementById("municipio")
    var avatar = document.getElementById("avatar")
    
    // VER EJEMPLO 2 (SWET ALERT) Y 3 
    var formulario = document.getElementById("formulario")
    console.log(formulario)
    console.log(name)
    formulario.onsubmit = function (evento) {
        console.log(validaciones())
        if (!validaciones()) {
            evento.preventDefault()
        } else {
            formulario.submit
        }
        function validaciones () {
            if (name.value === '') {
                swal ('Debes ingresar un Nombre')
                return false
            }
            if (email.value === '') {
                swal ('Debes ingresar un Email')
                return false
            }

            return true
        }
    }

    


} 
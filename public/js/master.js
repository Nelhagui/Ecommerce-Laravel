

window.onload=function(){
    var provinciaselect = document.querySelector("#provincia")
    var municipioselect = document.querySelector("#municipio")
    var seleccion = ''

    function datos () {
        
        seleccion = (provinciaselect.options[provinciaselect.selectedIndex].value)
        return seleccion
    }


    mostrarDatos()

    function mostrarDatos(){
        fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
        .then(resultado => resultado.json())
        .then(data => {
            for (var indice of data.provincias) {
                var opciones = document.createElement("option")
                opciones.value = indice.nombre
                opciones.innerHTML = indice.nombre
                provinciaselect.appendChild(opciones)
            }
        })
    }
provinciaselect.addEventListener('change', function() {
    datos()
    mostrarMunicipios(seleccion)

});


    function mostrarMunicipios(seleccion){
        fetch("https://apis.datos.gob.ar/georef/api/municipios?provincia="+seleccion+"&campos=id,nombre&max=100")
        .then(resultado => resultado.json())
        .then(data => {
                municipioselect.innerHTML = "<option>Seleccionar</option>";
            for (var indice of data.municipios){
                var opcionesMuni = document.createElement("option")
                opcionesMuni.value = indice.nombre
                opcionesMuni.innerHTML = indice.nombre
                municipioselect.appendChild(opcionesMuni)
            }

        })

    }



}
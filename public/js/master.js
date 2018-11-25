window.onload=function(){
    var provinciaselect = document.getElementById("provincia")
    var municipioselect = document.getElementById("municipio")
    mostrarDatos()

    function mostrarDatos(){
        fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
        .then(resultado => resultado.json())
        .then(data => {
            for (var indice of data.provincias) {
                var opciones = document.createElement("option")
                opciones.value = indice.indice
                opciones.innerHTML = indice.nombre
                provinciaselect.appendChild(opciones)
            }
        })
    }
    // var idprovincia = 22
    mostrarMunicipios()
    function mostrarMunicipios(){
        fetch("https://apis.datos.gob.ar/georef/api/municipios?provincia="+idprovincia+"&campos=id,nombre&max=100")
        .then(resultado => resultado.json())
        .then(data => {
            for (var indice of data.municipios){
                var opcionesMuni = document.createElement("option")
                opcionesMuni.value = indice.indice
                opcionesMuni.innerHTML = indice.nombre
                municipioselect.appendChild(opcionesMuni)
            }

        })

    }



}
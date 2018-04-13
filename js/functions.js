function loadSection(cont, divSel){
    //Llena un Div con el contenido de un archivo .html
    $.ajax({
        url:cont,
        async:'true',
        cache: false,
        contentType: "application/x-www-form-urlencoded",
        dataType: "html",
        beforeSend: function() {
            $(divSel).html("Cargando contenido...");
        },
        error: function(object, error, anotherObject){
            //console.log('Mensaje: '+ object.statusText + 'Status: ' + object.status);
        },
        global: true,
        ifModified: false,
        processData:true,
        success: function(result){
        	$(divSel).html(result);
        },
        timeout: 30000,
        type: "GET"
    });
}

function downloadURI(uri, name) {
    //Realiza la descarga de la infografía correspondiente
    var link = document.createElement("a");
    link.download = name;
    link.href = uri;
    link.click();
}

//Al iniciar carga el archivo 1.html
loadSection("1.php", "#content");

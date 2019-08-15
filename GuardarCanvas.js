function GuardarCanvas(){
    let canvas = document.getElementById("mesa-dibujo");
    let filename = prompt("Guardar Como", "");
    link = document.createElement('a');

    if (filename == null){
        return false;
    }else if (filename == ""){
        link.download ="Sin titulo";
        link.href = canvas.toDataURL("image/png")
    }else{
        link.download = filename;
        link.href = canvas.toDataURL("image/png")
    }

    link.click();
}

function LimpiarTrazado() {
    let canvas = document.getElementById("mesa-dibujo");
    let ctx = canvas.getContext("2d");

    ctx.clearRect(0,0, canvas.width, canvas.height);
}
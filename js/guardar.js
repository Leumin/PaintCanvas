function GuardarCanvas(){
    let filename = prompt("Guardar Como", "");
    link = document.createElement('a');

    if (filename == null){
        return false;
    }else if (filename == ""){
        link.download ="Sin titulo";
        link.href = canvas.toDataURL("image/png");
    }else{
        link.download = filename;
        link.href = canvas.toDataURL("image/png");
    }

    link.click();
}
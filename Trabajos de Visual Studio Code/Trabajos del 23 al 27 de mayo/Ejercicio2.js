//Crear un formulario que capture los datos personales de sus compañeros
function captura(){
    var nombreest=document.getElementById("nomest").value;
    var celusest=document.getElementById("celest").value;
    if (nombreest==""){
        alert("El nombre es obligatorio digitarlo");
        document.getElementById("nomest").focus();
    }else{
        if (celusest==""){
            alert("El numero del celular es obligatorio digitarlo");
            document.getElementById("celest").focus();
        }else{
            console.log(nombreest+""+celusest);
            document.getElementById("nomest").value="";
            document.getElementById("celest").value=""();
            document.getElementById("nomest").focus();
        }
    }
}
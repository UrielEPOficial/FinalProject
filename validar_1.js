function validar(){
    var apellidos, nombre, correo, usuario, clave, telefono, comentario, expresion;
    var erapellidos, ernombre, ercorreo, erusuario, erclave, ertelefono;

    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    comentario = document.getElementById("comentario").value;
    erapellidos = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    ernombre = /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    ercorreo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/;
    

    //Valida si esta vacio
    if(nombre==="" || comentario==="" || correo==="" || usuario==="" || clave==="" || telefono==="" || comentario==="")
    {
        alert("Todos los campos son obligatorios");
        return false;
    }
    
    
    if(nombre.length > 10) //objeto.metodo
    {
        alert("El nombre es demasiado largo");
        return false;
    }

    if(isNaN(telefono)){
        alert("El teléfono no es válido")
    }


    if(apellidos.length > 10) //objeto.metodo
    {
        alert("El apellido es demasiado largo");
        return false;
    }

    if(correo.length > 30) //objeto.metodo
    {
        alert("El correo es demasiado largo");
        return false;
    }

    if(telefono.length > 10) //objeto.metodo
    {
        alert("El telefono es demasiado largo");
        return false;
    }

    if(comentario.length > 10) //objeto.metodo
    {
        alert("El comentario es demasiado largo");
        return false;
    }
    //Termina de validar la longitud


    
    //Validacion con expresiones regulares

    
    if(!erapellidos.test(apellidos)){
        alert("Apellidos no válidos");
        return false;
        }
    if(!ernombre.test(nombre)){
        alert("Nombres no válidos");
        return false;
        }
    if(!ercorreo.test(correo)){
        alert("El formato de correo es incorrecto");
        return false;
        }
}
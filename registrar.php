<?php
include 'cn.php';

//Recibir
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];


//Consulta para insertar datos desde el formulario hacia la base de datos

$insertar = "INSERT INTO clientes(nombre, apellidos, correo, telefono, comentario) 
 VALUES ('$nombre','$apellidos','$correo','$telefono','$comentario')";
 
 
 //VALIDACIONES DE CAMPOS VACÍOS
 if(isset($_POST['boton'])){
   if(empty($nombre)){
       //echo"< p class = 'error' >agrega tu nombre</p>";
       echo '<script languaje = "javascript">;
       alert ("por favor ingresa tu nombre");
       window.history.go(-1);
       </script>';
       exit;
   }

}
if(isset($_POST['boton'])){
   if(empty($apellidos)){
       //echo"< p class = 'error' >agrega tu nombre</p>";
       echo '<script languaje = "javascript">;
       alert ("por favor ingresa tus apellidos");
       window.history.go(-1);
       </script>';
       exit;
   }

}
if(isset($_POST['boton'])){
   if(empty($correo)){
       //echo"< p class = 'error' >agrega tu nombre</p>";
       echo '<script languaje = "javascript">;
   alert ("por favor ingresa tu correo");
   window.history.go(-1);
   </script>';
   exit;
   }

}


if(isset($_POST['boton'])){
   if(empty($telefono)){
       //echo"< p class = 'error' >agrega tu telefono</p>";
       echo '<script languaje = "javascript">;
   alert ("por favor ingresa tu telefono");
   window.history.go(-1);
   </script>';
   exit;
   }

}
if(isset($_POST['boton'])){
   if(empty($comentario)){
       //echo"< p class = 'error' >agrega un comentario</p>";
       echo '<script languaje = "javascript">;
   alert ("por favor ingresa un comentario");
   window.history.go(-1);
   </script>';
   exit;
   }

}


//VALIDACION DE ENTRADA DE DATOS EN CAMPOS
if(isset($_POST['boton'])){
   $nombre_val = strlen($nombre);
   if(strlen($nombre) > 10 ){
       echo '<script languaje = "javascript">;
   alert ("El NOMBRE es demasiado largo");
   window.history.go(-1);
   </script>';
   exit;
   }
}
if(isset($_POST['boton'])){
   $apellidos_val = strlen($apellidos);
   if(strlen($apellidos) > 10){
       echo '<script languaje = "javascript">;
   alert ("El APELLIDO es demasiado largo");
   window.history.go(-1);
   </script>';
   exit;
   }
}
if(isset($_POST['boton'])){
   $correo_val = strlen($correo);
   if(strlen($correo) > 30){
       echo '<script languaje = "javascript">;
   alert ("El CORREO es demasiado largo");
   window.history.go(-1);
   </script>';
   exit;
   }
}



if(isset($_POST['boton'])){
   $clave_val = strlen($telefono);
   if(strlen($telefono) > 10){
       echo '<script languaje = "javascript">;
   alert ("El TELEFONO es demasiado largo");
   window.history.go(-1);
   </script>';
   exit;
   }
}


if(isset($_POST['boton'])){
   $clave_val = strlen($comentario);
   if(strlen($comentario) > 10){
       echo '<script languaje = "javascript">;
   alert ("El COMENTARIO es demasiado largo");
   window.history.go(-1);
   </script>';
   exit;
   }
}


//Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if($resultado){
    echo '<script languaje="javascript">alert ("Usuario registrado existosamente.");
    window.history.go(-1);
    </script>';
}
    else if(!$resultado){
    echo '<script languaje="javascript">alert ("Error al registrar el usuario.");
    window.history.go(-1);
    </script>';
    }


 //Cerrar conexion con base de datos
 mysqli_close($conexion);


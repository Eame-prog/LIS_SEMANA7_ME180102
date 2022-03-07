<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
function verificar_email($email) 
{
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/",$email))
  {
    return true;
  }
  return false;
}

function verificar_password_strenght($password) 
{   
   if (preg_match("/^.*(?=.{8,})(?=.*d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password))     
     echo "Su password es seguro.";   
   else     
     echo "Su password no es seguro."; 
} 

function verificar_password_iguales($password2,$password){
    if($password==$password2)
     echo "Las contraseñas coinciden.";
    else
     echo "Las contraseñas no coinciden.";
}

if(isset($_POST["enviar"]) ){

    $correo=$_POST["correo"];
    $contra=$_POST["contrasenia"];
    $contra2=$_POST["contrasenia2"];
    if(verificar_email($correo)){
        echo "Correo valido <br>";
        verificar_password_strenght($contra);
        echo "<br>";
        verificar_password_iguales($contra2,$contra);
    }else{
        echo "Verifique el correo ingresado <br>";
    }  
}

?>
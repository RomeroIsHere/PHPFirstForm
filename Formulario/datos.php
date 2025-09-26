<?php
function enumeratePosted($fieldArray){
echo "<ul>";
foreach ($fieldArray as $datum) { 
echo "<li>$datum:";
if($datum=='interests' && isset($_POST[$datum])){
    if(is_array($_POST[$datum])){
        $buffstr='';
        foreach($_POST[$datum] as $minum){
        $buffstr.=$minum.", ";
        }
        echo substr($buffstr,0,-2);
    } else {
        echo $_POST[$datum]??"Dato Existente No Accesible";        
    }
    
}else if($datum=='avatar' && isset($_FILES[$datum]) && $_FILES[$datum]['name'] != ""){
    echo "<h3>Archivo Subido</h3>";
    if(isset($_FILES['avatar']['name'])){
        echo "Nombre:".$_FILES['avatar']['name']."<br>";
        echo "Tipo de Archivo:".$_FILES['avatar']['type']."<br>";
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if($check !== false) {
            echo "Archivo es una Imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Arhivo no es una Imagen.";
            $uploadOk = 0;
        }
        echo "<br>";
        /*
        if ($_FILES["avatar"]["size"] > 500000) {
            echo "Archivo Demasiado Grande.";
            echo "<br>";
            $uploadOk = 0;
        }*/
        
        if ($uploadOk == 0) {
        echo "Archivo no Subido.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            echo "El Archivo ". htmlspecialchars(basename( $_FILES["avatar"]["name"])). " Ha Sido Subido.<br>";
            echo "<img src=\"".$target_file."\" alt=\"Avatar Subido\">";
        } else {
            echo "Perdon, Hubo un Error con tu Archivo.";
        }
        }
    //echo "<img src=\"".$_FILES.['avatar']['tmp_name']."\">";
    }else{
    echo "No se Selecciono Avatar.";
    }
}else{
    echo $_POST[$datum]??"Dato no Recibido";    
}

echo "</li><br>";
}
echo "</ul>";
}
/*
echo "<h1>Datos Recibidos del Formulario</h1>";
var_dump($_POST);
echo "<h2>Archivos Recividos</h2>";
var_dump($_FILES);*/

echo "<h2>Informacion Basica</h2>";
$basicInforArray = array("username", "password", "email", "phone","website");
enumeratePosted($basicInforArray);

echo "<h2>Informacion Adicional</h2>";
$extraInforArray = array("age", "birthday", "satisfaction", "favcolor","country","city","avatar","interests","subscribe-level");
enumeratePosted($extraInforArray);
?>
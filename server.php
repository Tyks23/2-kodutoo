<?php
//Kood on 7. tunni tööst
if(isset($_POST["save"]) && !empty($_POST["save"])){
    saveToFile($_POST["save"]);
}

function saveToFile($stringToSave){
    $object = new StdClass();
    $object->last_modified = time();
    $object->content = $stringToSave;
    $jsonString = json_encode($object);
    file_put_contents("db.txt", $jsonString);
}

?>
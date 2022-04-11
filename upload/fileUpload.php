<?php
$target_path ="uploads/Modul6_Form_File.pdf";

$target_path =$target_path . basename(
$_FILES['uploadedfile']['name']);

if(move_uploaded_file($_FILES['uploadedfile']['temp_name'],$target_path)){
    echo "The file". basename($_FILES['uploadedfile']['name'])."has been uploaded";
}else{
    echo "There was an error uploading the file, please try again!";
}
?>
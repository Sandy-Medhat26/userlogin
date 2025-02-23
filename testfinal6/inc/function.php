<?php
function uploadImage($image){
    $imagename=$_FILES[$image]['name'];
    $imagelocation=$_FILES[$image]['tmp_name'];

    $newimage=time().rand().$imagename;
    $path="images/$newimage";
    move_uploaded_file($imagelocation,"$path");
    return $path;
}
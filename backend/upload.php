<?php

if(isset($_POST['submit'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name) and !empty($name)){
        $location = '../upload/';      
        if(move_uploaded_file($temp_name, $location.$name)){
            echo 'File uploaded successfully';
        }
    } else {
        echo 'You should select a file to upload !!';
    }
}
    // if(isset($_POST['submit'])){

    //     $file = $_FILES['file'];
    //     print_r($file);
    //     $fileName = $_FILES['file']['name'];
    //     $fileTempName = $_FILES['file']['temp_name'];
    //     $fileSize = $_FILES['file']['size'];
    //     $fileError = $_FILES['file']['error'];
    //     $fileType = $_FILES['file']['type'];

    //     $fileExt = explode('.', $fileName);
    //     $fileActualExt = strtolower(end($fileExt));

    //     $allowed = array('jpg' ,'jpeg', 'png', 'pdf');

    //     if(in_array($fileActualExt,$allowed))   {
    //         if($fileError == 0){
    //             if($fileSize <1000000){
    //                 $fileNameNew = uniqid('', true).".".$fileActualExt;
    //                 $fileDest = "../upload".$fileNameNew;
    //                 move_uploaded_file($fileNameNew,$fileDest);
    //                 header('Location : index.php?uploadsuccess');
    //             }else{
    //                 echo "Your file is too big";
    //             }

    //         }else{
    //             echo "There was an error uploading your file";
    //         }
    //     }else{
    //         echo "You can not upload file in this type";
    //     }

    // }

    if(isset($_FILES['file']['name'][0])){
        foreach($_FILES['file'['name'] as $keys=>$values){
            if(move_uploaded_file($_FILES['file'['temp_name'][$keys]), '../upload/' . $values){
                $output.='<div class=col-md-3></div><img src="../upload/'.$values.' "/></div>';

            }
        }
    } 
    echo $output;
?>
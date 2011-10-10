<?php

// Directory where uploaded images are saved
$dirname = "/tmp/phonegap/uploads"; 

// If uploading file
if ($_FILES) {
    print_r($_FILES);
    mkdir ($dirname, 0777, true); 
    move_uploaded_file($_FILES["file"]["tmp_name"],$dirname."/".$_FILES["file"]["name"]);
}

// If retrieving an image
else if (isset($_GET['image'])) {
    $file = $dirname."/".$_GET['image'];

    // Specify as jpeg
    header('Content-type: image/jpeg');
  
    // Resize image for mobile
    list($width, $height) = getimagesize($file); 
    $newWidth = 120.0; 
    $size = $newWidth / $width;
    $newHeight = $height * $size; 
    $resizedImage = imagecreatetruecolor($newWidth, $newHeight); 
    $image = imagecreatefromjpeg($file); 
    imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height); 
    imagejpeg($resizedImage, null, 80); 
}

// If displaying images
else {
    $baseURI = "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
    $images = scandir($dirname);
    $ignore = Array(".", "..");
    if ($images) {
        foreach($images as $curimg){ 
            if (!in_array($curimg, $ignore)) {
                echo "Image: ".$curimg."<br>";
                echo "<img src='".$baseURI."?image=".$curimg."&rnd=".uniqid()."'><br>"; 
            }
        }
    }
    else {
        echo "No images on server";
    }
}
?>
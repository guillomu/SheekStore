<?php

// image resizing function
function fn_resize($image_resource_id,$width,$height) {
  $target_width =1000;
  $target_height =971;
  $target_layer=imagecreatetruecolor($target_width,$target_height);
  imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
  return $target_layer;
}

// Return extension files
function getExtension($file_name){
  $temp = explode(".",$file_name);
  $extension = end($temp);

  return $extension;
}

//Upload images
function uploadImg($imgs){
  $return = false;

  for ($i = 1; $i < 4; $i++){ // On répète 3 fois pour les 3 images
    $allowedExts = array("gif","jpg","jpeg","png");
    $extension = getExtension($_FILES['img'.$i]['name']);;
    if((($_FILES['img'.$i]['type'] == 'image/gif')
    || ($_FILES['img'.$i]['type'] == 'image/jpeg')
    || ($_FILES['img'.$i]['type'] == 'image/jpg')
    || ($_FILES['img'.$i]['type'] == 'image/pjpg')
    || ($_FILES['img'.$i]['type'] == 'image/x-png')
    || ($_FILES['img'.$i]['type'] == 'image/png'))
    && ($_FILES['img'.$i]['size'] < 10000000)
    && in_array($extension,$allowedExts)) {
      if ($_FILES['img'.$i]['error'] > 0){
        $return = false;
      } else {
        if (file_exists($imgs[$i])){
          $return = false;
        } else {
          $temp = preg_replace('/ /', '',explode("/SheekStore/",$imgs[$i]));
          $imgName = end($temp);
          
          $file = $_FILES['img'.$i]['tmp_name'];
          $source_properties = getimagesize($file);
          $image_type = $source_properties[2];

          if( $image_type == IMAGETYPE_JPEG ) {

            $image_resource_id = imagecreatefromjpeg($file);
            $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
            imagejpeg($target_layer, $imgName);
          }
          elseif( $image_type == IMAGETYPE_GIF )  {

            $image_resource_id = imagecreatefromgif($file);
            $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
            imagegif($target_layer, $imgName);
          }
          elseif( $image_type == IMAGETYPE_PNG ) {

            $image_resource_id = imagecreatefrompng($file);
            $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
            imagepng($target_layer, $imgName);
          }
          
          $return = true;
        }
      }
    } else {
      $return = false;
    }
  }
  return $return;
}

?>

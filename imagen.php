<?php

if (isset($_GET["opcion"])) {
  switch ($_GET["opcion"]) {
    case 1:
      header ('Content-Type: image/png');
      $im = imagecreatetruecolor(600, 600);
      $amarillo = imagecolorallocate($im, 255, 255, 0);
      $negro = imagecolorallocate($im, 1,1,1);
          
      imagefilledellipse($im,300, 300, 300, 300, $amarillo);
      imagefilledellipse($im,230, 240, 60, 60, $negro);
      imagefilledellipse($im,370, 240, 60, 60, $negro);
      imagefilledarc($im,300, 340, 200,80,0,180,$negro,IMG_ARC_EDGED);
          
      imagepng($im);
      imagedestroy($im);
      break;
    
    case 2:

      header ('Content-Type: image/png');
      $im = imagecreatetruecolor(600, 600);
      $amarillo = imagecolorallocate($im, 255, 255, 0);
      $negro = imagecolorallocate($im, 1,1,1);
          
      imagefilledellipse($im,300, 300, 300, 300, $amarillo);
      imagefilledellipse($im,230, 240, 60, 60, $negro);
      imagefilledellipse($im,370, 240, 60, 60, $negro);
      imagefilledarc($im,300, 360, 200,80,180,0,$negro,IMG_ARC_EDGED);
          
      imagepng($im);
      imagedestroy($im);
      break;

    default:
    break;
  }
}

// header ('Content-Type: image/png');
// $im = imagecreatetruecolor(600, 600);
// $amarillo = imagecolorallocate($im, 255, 255, 0);
// $negro = imagecolorallocate($im, 1,1,1);

// imagefilledellipse($im,300, 300, 300, 300, $amarillo);
// imagefilledellipse($im,230, 240, 60, 60, $negro);
// imagefilledellipse($im,370, 240, 60, 60, $negro);
// imagefilledarc($im,290, 340, 200,80,0,180,$negro,IMG_ARC_EDGED);

// imagepng($im);
// imagedestroy($im);
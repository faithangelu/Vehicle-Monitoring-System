<?php
  require "php_packages/fpdf181/fpdf.php";

    class PDF extends FPDF {
    const DPI = 96;
    const MM_IN_INCH = 25.4;
    const A4_HEIGHT = 297;
    const A4_WIDTH = 210;
    // tweak these values (in pixels)
    const MAX_WIDTH = 800;
    const MAX_HEIGHT = 500;
    function pixelsToMM($val) {
        return $val * self::MM_IN_INCH / self::DPI;
    }
    function resizeToFit($imgFilename) {
        list($width, $height) = getimagesize($imgFilename);
        $widthScale = self::MAX_WIDTH / $width;
        $heightScale = self::MAX_HEIGHT / $height;
        $scale = min($widthScale, $heightScale);
        return array(
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        );
    }
    function centreImage($img) {

        list($width, $height) = $this->resizeToFit($img);
        // you will probably want to swap the width/height
        // around depending on the page's orientation
        $this->Image(
            $img, (self::A4_HEIGHT - $width) / 2,
            (self::A4_WIDTH - $height) / 2,
            $width,
            $height
        );
    }
}
// usage:
$pdf = new PDF();
$error=array();
$extension=array("jpeg","jpg","png","gif");
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
{
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(in_array($ext,$extension))
    {
        if(!file_exists("temporaryerptest/".$file_name))
        {
            $filename=basename($file_name,$ext);
            $newFileName=$filename . "." . $ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"temporaryerptest/".$newFileName);
        }
        else
        {
            $filename=basename($file_name,$ext);
            $newFileName=$filename . "." . $ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"temporaryerptest/".$newFileName);
        }
    }
    else
    {
        array_push($error,"$file_name, ");
    }

   $pdf->AddPage("L");
   $pdf->centreImage('temporaryerptest/'. $newFileName);
}
  $pdf->Output('D', 'output.pdf');

  ?>

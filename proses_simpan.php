<?php
 
if(isset($GLOBALS["HTTP_RAW_POST_DATA"]))
 {
 $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
 $filteredData=substr($imageData, strpos($imageData, ",")+1);
 $unencodedData=base64_decode($filteredData);
 $fp = fopen( 'uploads/image.png', 'wb' );
 fwrite( $fp, $unencodedData);
 fclose( $fp );
 
echo 'uploads/image.png';
 }
 
?><?php
 
if(isset($GLOBALS["HTTP_RAW_POST_DATA"]))
 {
 $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];
 $filteredData=substr($imageData, strpos($imageData, ",")+1);
 $unencodedData=base64_decode($filteredData);
 $fp = fopen( 'uploads/image.png', 'wb' );
 fwrite( $fp, $unencodedData);
 fclose( $fp );
 
echo 'uploads/image.png';
 }
 
?>
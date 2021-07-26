<?php
// menghitung BMI
/**
 * 1. Define weight
 * 2. define height
 * 3. count BMI -> weight / height * height
 * 4. show number of BMI
 * 5. show the category
 */

 $weight = 60;
 $height = 1.65;
 $BMI = $weight / $height * $height;
 echo "Your BMI: $BMI \n";
 if ($BMI < 18.5){
     echo "kurang berat badan";
 } elseif ($BMI >= 18.5 && $BMI < 23){
     echo "normal";
 } elseif ($BMI >= 23 && $BMI < 30){
     echo "cenderung obesitas";
 } elseif ( $BMI >= 30){
     echo "obesitas";
 }
?>
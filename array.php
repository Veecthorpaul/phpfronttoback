
<?php  
     for ($i = 1; $i <= 1000000; $i++) {

     $num3 = $i % 3;
     $num10 = $i % 10;
     $str = '';
     if (!$num3) {
       $str = '<p><i>' . $i . '</i> is a 3rd Number</p>';
     }
     if (!$num10) {
       $str = '<p><b>' . $i . '</b> is a 10th Number</p>';
     }
     if ($num3 && $num10) {
       $str = '<p><u>' . $i . '</u> is a Prime Number</p>';
     }
     echo $str, "\n";
    }
?>



<!-- loops -->
<!-- -Q1- -->
<?php
$sum=0;
for ($i=0; $i <30 ; $i++) { 
$sum+= $i;}
echo $sum."<br> <hr>";
?>
<!-- -Q2- -->
<?php 
    for($i=1; $i<=5; $i++){
        for($j=1;$j<=5; $j++){
            if($i==$j){
                echo $i . " ";
            }
            else 
            echo 0 . " ";
        }
        echo "<br>";
    }
    echo "<br> <hr>";

    ?>
     <!-- Q3 -->
     <?php 
        $number = 5;
        $fac=1;
        while($number>1) {
            $fac *=$number;
            $number--;
        }
        echo $fac;
        echo "<br> <hr>";

    ?>

     <!-- 6 fiboncai series -->
     <?php 
        $a=0;
        $b=1;
        $c=0;
        $counter=1;
        echo $a . " " . $b . " ";
        while($counter<=10) {
            $c=$a+$b;
            echo $c . " ";
            $a=$b;
            $b=$c;
            $counter++;
        }
        echo "<br> <hr>";

    ?>
    <!-- 9 -->
    <?php 
    $n=1;
    for($i=1; $i<=5; $i++) {
        for($j=1; $j<=$i; $j++){
            echo $n++ . " ";
        }
        echo '<br>';
    }
    echo "<br> <hr>";

    ?>
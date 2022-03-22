<?php

require_once './class_lingkaran.php';

$l1 = new Lingkaran(10);
$l2 = new Lingkaran(20);

?>
    <?php echo "Luas Lingkaran1: {$l1->getLuas()}"; ?><br>
    <?php echo "Keliling Lingkaran1: {$l1->getKeliling()}"; ?><br>
    <?php echo "Luas Lingkaran2: {$l2->getLuas()}"; ?><br>
    <?php echo "Keliling Lingkaran2: {$l2->getKeliling()}"; ?><br>
<?php

?>
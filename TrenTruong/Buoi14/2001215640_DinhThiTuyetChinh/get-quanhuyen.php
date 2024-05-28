<?php

require './config.php';

$maTinh  = $_GET['t'];

$dsQuanHuyen = fetchQuanHuyen($maTinh);
?>
<option value="">---------</option>

<?php
foreach ($dsQuanHuyen as $quanHuyen) {
?>
    <option value="<?= $quanHuyen['maquanhuyen'] ?>" 
        <?php
            if(isset($_GET['quanhuyen640']) && $_GET['quanhuyen640'] == $quanHuyen['maquanhuyen']) echo 'selected'
        ?>
    >
     <?= $quanHuyen['tenquanhuyen'] ?>
    </option>
    
<?php

}
?>
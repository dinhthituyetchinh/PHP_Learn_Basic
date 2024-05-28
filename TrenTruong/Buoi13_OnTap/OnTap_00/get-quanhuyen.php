<?php

require './config.php';

$maTinh  = $_GET['t'];

$dsQuanHuyen = fetchQuanHuyen($maTinh);
echo $_GET['quanhuyen05'];
?>
<option value="">---------</option>

<?php
foreach ($dsQuanHuyen as $quanHuyen) {
?>
    <option value="<?= $quanHuyen['maquanhuyen'] ?>" 
        <?php
            if(isset($_GET['quanhuyen05']) && $_GET['quanhuyen05'] == $quanHuyen['maquanhuyen']) echo 'selected'
        ?>
    >
     <?= $quanHuyen['tenquanhuyen'] ?>
    </option>
    
<?php

}

?>
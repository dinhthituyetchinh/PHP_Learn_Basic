<?php
include "./config.php";
$obj =  new PDO('mysql:host='.HOST.';dbname='.DB, U, P);

// Include PhpSpreadsheet library autoloader 
require_once 'vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx; 
if(isset($_POST['importSubmit'])){ 
    // Allowed mime types 
    $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
     
    // Validate whether selected file is a Excel file 
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $excelMimes)){ 
         
        // If the file is uploaded 
        if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
            $reader = new Xlsx(); 
            $spreadsheet = $reader->load($_FILES['file']['tmp_name']); 
            $worksheet = $spreadsheet->getActiveSheet();  
            $worksheet_arr = $worksheet->toArray(); 
 
            // Remove header row 
            unset($worksheet_arr[0]); 
 
            foreach($worksheet_arr as $row){ 
                $first_name = $row[0]; 
                $last_name = $row[1]; 
                $email = $row[2]; 
                $phone = $row[3]; 
                $status = $row[4]; 

                $sql = "INSERT INTO members (first_name, last_name, email, phone, status) VALUES (?, ?, ?, ?, ?)";
                $arr= [$first_name, $last_name, $email, $phone, $status];
                $stm = $obj->prepare($sql);
                // echo '<pre>';echo $sql; print_r($arr);
                $stm->execute($arr);

                print_r($arr);
            } 
             
        }
    }
} 
 
// Redirect to the listing page 
header("Location: form.php"); 
 
?> 
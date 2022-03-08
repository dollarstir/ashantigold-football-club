<?php




// $string="1. Tim Moltzen, 2. Joel Reddy, 3. Blake Ayshford, 4. Chris Lawrence, 5. James Tedesco, 6. Benji Marshall, 7. Braith Anasta, 8. Aaron Woods, 9. Robbie Farah, 10. Jack Buchanan, 11. Bodene Thompson, 12. Liam Fulton, 13. Adam Blair, 14. Ben Murdoch Masila, 15. Ava Seumanufagai 16. Matt Bell, 17. Eddy Pettybourne";

// $string=explode(', ',$string);
// echo '<ol>';
// foreach($string as $val)
//     {
//         echo '<li>'. $val.'</li>';
//     $val=explode('. ',$val);
//     // mysql_query('INSERT INTO yourtable (col_number,col_name) VALUES ("'.$val[0].'.","'.$val[1].'")';
//     }
//     echo '</ol>';



?>


<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'dbConfig.php'; 
     
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 
?>
 <?php  
 include_once 'db.php';
 if(isset($_POST["btn_zip"]))  
 {  
      $output = '';  
      if($_FILES['zip_file']['name'] != '')  
      {  
           $file_name = $_FILES['zip_file']['name'];  
           $array = explode(".", $file_name);  
           $name = $array[0];  
           $ext = $array[1];  
           if($ext == 'zip')  
           {  
                $path = 'upload/';  
                $location = $path . $file_name;  
                if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location))  
                {  
                     $zip = new ZipArchive;  
                     if($zip->open($location))  
                     {  
                          $zip->extractTo($path);  
                          $zip->close();  
                     }  
                     $files = scandir($path . $name);  
                     //$name is extract folder from zip file  
                     foreach($files as $file)  
                     {  
                          $file_ext = end(explode(".", $file));  
                          $allowed_ext = array('html');  
                          if(in_array($file_ext, $allowed_ext))  
                          {  
                               $new_name = md5(rand()).'.' . $file_ext; 
                               copy($path.$name.'/'.$file, $path . $new_name);  
                               unlink($path.$name.'/'.$file);  
                          }       
                     }  
                     unlink($location);  
                     rmdir($path . $name);  
                }  
           }  
      }  
 }  
  mysqli_close($conn);
 ?>
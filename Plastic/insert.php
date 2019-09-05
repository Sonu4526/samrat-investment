 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);
      $file_upload = mysqli_real_escape_string($connect, $data->fileupload);   
      $btn_name = $data->btnName;  
      if($btn_name == "ADD")  
      {  
           $query = "INSERT INTO tbl_user(first_name, last_name,file_upload) VALUES ('$first_name', '$last_name', '$file_upload')";  
           if(mysqli_query($connect, $query))  
           {  
                echo "Data Inserted...";  
           }  
           else  
           {  
                echo 'Error';  
           }  
      }  
      if($btn_name == 'Update')  
      {  
           $id = $data->id;  
           $query = "UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data Updated...';  
           }  
           else  
           {  
                echo 'Error';  
           }  
      }  
 }  
 ?>  
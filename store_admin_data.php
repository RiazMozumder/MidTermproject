<?php
	if(isset($_REQUEST['SUBMIT']))
	{
        $image = $_REQUEST['image'];
        $name = $_REQUEST['Username'];
		$password = $_REQUEST['Password'];
		$email = $_REQUEST['Email'];
		$phone = $_REQUEST['Phone'];
		$id = $_REQUEST['id'];
		$status = $_REQUEST['Status'];
		$address= $_REQUEST['address'];
		$gender = $_REQUEST['Gender'];
		
	}

  $lines = file("admin_info.txt");
      $num = count($lines)+1;

      
      $file = fopen("admin_info.txt", 'a');
      $str = $image."|".$name."|".$password."|".$email."|".$phone."|".$id."|".$status."|".$address."|". $gender;
      fwrite($file,$str."\r\n");
      fclose($file);

echo "Congratlation Registration successful";
?>
<?php
$name_er='';
$Rool_er='';
$reg_er='';
if(isset($_POST['form'])){
	$name=$_POST['name'];
	$Id=$_POST['roll'];
	$reg=$_POST['reg'];
	if (!$name) {
		$name_er='Nmae is required';
	}
	if (!$Id) {
		$Rool_er="Roll is required";
		
	}
	if(!$reg){
		$reg_er='reg is required';
	}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="-8">
    <title>Form Validation With Php</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all">;

<style>
  *
{
    margin: 0px auto;
    padding: 0px;
}
.form-validation{
    width: 450px;
    margin: 0px;
    background: #ddd;
    padding: 20px 50px;
    box-sizing: border-box;
}
.label{
    float: left;
    width: 100%;
    font-size: 16px;
    font-weight: bold;
    padding-bottom: 10px;
    padding-top: 10px;
}
.text{
    float: left;
    width: 300px;
    height: 30px;
    padding: 5px;
    box-sizing: border-box;
}
.row{
    float: left;
    width: 100%;
    margin-bottom: 5px;
}
h2{
    text-align: center;
    text-decoration: uppercase;
}
.btn{
    float: right;
    padding: 10px 15px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
    color: #555;
    border: 1px solid #eee;
    background: #fff;
}
.error{
    color: #cc0000;
    padding-top: 5px;
    float: left;
    width: 100%;
}
</style>



</head>
    <body>
      <div class="form-validation">
          <h2>Create Student Account</h2>
          <form action="" method="post" enctype="multipart/form-data">
              <table>
                  <tr class="row">
                     
                    <td class="label"><label for="name">Name</label>
                    </td>
                     
                      <td><input class="text" type="text" id="name" name="name" placeholder="Name">
						<br>
                     <span style="color: red;"><?php echo $name_er?></span> 
                      </td>

                  </tr>
                  
                  <tr class="row">
                     
                      <td class="label"><label for="roll">Roll</label></td>
                      
                      <td><input class="text" type="text" id="roll" name="roll" placeholder="Roll">
                      <br>
                       <span style="color: red;"><?php echo $Rool_er ?></span> 
                      </td>
                  </tr>
                  <tr class="row">
                      <td class="label"><label for="reg">Registation</label></td>
                      <td><input class="text" type="text" id="Registation" name="reg" placeholder="reg">
                      	<br>
                      	<span style="color: red;"><?php echo $reg_er ?></span>
                      </td>
                  </tr>
                  
                  <tr class="row">
                      <td class="label"><label for="department">department</label></td>
                      <td> <input class="text" type="text" id="department" name="department" placeholder="department"></td>
                  </tr>
                  
                  <tr class="row">
                      <td class="label"><label for="shift">Shift</label></td>
                      <td> <input class="text" type="text" id="shift" name="shift" placeholder="shift"></td>



                  </tr>
                  <tr class="row">
                      <td class="label"><label for="semester">Semester</label></td>
                      <td> <input class="text" type="text" id="semester" name="semester" placeholder="semester"></td>
                  </tr> 
                  
                  <tr class="row">
                      <td class="label"><label for="sex">Gender</label></td>
                      <td>
                       <input type="radio" id="sex" name="sex" value="male">
                       <label for="sex">Male</label>
                        <input type="radio" name="sex" id="sex" value="female">
                        <label for="sex">Female</label>
                         </td>
                  </tr>
                  
                  <tr class="row">
                      <td class="label"><label for="username">Username</label></td>
                      <td> <input class="text" type="text" id="username" name="username" placeholder="username"></td>
                  </tr> 
                  
                  <tr class="row">
                      <td class="label"><label for="password">Password</label></td>
                      <td> <input class="text" type="text" id="password" name="password" placeholder="password"></td>
                  </tr>
                  
                  <tr class="row">
                      <td class="label"><label for="confirm password">Confirm Password</label></td>
                      <td> <input class="text" type="text" id="confirm password" name="confirm password" placeholder="confirm password"></td>
                  </tr>

                      <tr class="row">
                      <td class="label"><label for="email">Email</label></td>
                      <td> <input class="text" type="text" id="email" name="email" placeholder="email"></td>
                  </tr>
                  
                  
                  
                  
              </table>
                <button name="form">Login</button>
          </form>
          
          
          <div class="btn">
          
          </div>
          
      </div>  
        
        
    </body>
</html>
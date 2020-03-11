
<!DOCTYPE html>
<html>

<style>
    


.profileimg{
    border-radius: 50%;
}
.table{
    
    padding: 15px;
    border-radius: 300px;
}

</style>
<body>


    <center><h3>Activity for student</h3>
        <hr width="40%"></hr>
    <img class="profileimg" src="riaz.jpg" height="100px" width="100px"> 
    

    <form method="POST" action="project/Add_Admin.php"  class="form">

    <table class="table">

        <tr>
            <td>Username:</td>
            <td><input type="text" name="" value="" size="21" /></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td> <input type="text" name="" value="" size="21"/></td>
    
        </tr>

        <tr>
            <td>Email:</td>
            <td> <input type="Email" name="email" value=""  size="21"/></td>
    
        </tr>

        <tr>
            <td>Phone:</td>
            <td> <input type="text" name="phone" value="" size="21" /></td>
    
        </tr>

        
        <tr>
            <td>Card Number:</td>
            <td> <input type="text" name="Institution" value="" size="21"/></td>
    
        </tr>
                <tr>
                <td>Expiration DAte:</td>
                <td> 
                    <input type="text" name="date" value="" size="21"/> 
                </td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td>
            <select id="gender" >
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                   <option value="Female">Other</option>
             
            </select>
        </td>
        </tr>


    
        <tr>
            <td>
            
                <input type="Button" name="" value="Update">
                
                <input type="Button" name="" value="Delete">
                
 
        </td>
                
        <td>
               <input type="Button" name="suspend" value="Suspend">
                <input type="Button" name="terminate" value="Terminate">
        </td>
                   
        

        </tr>
    </table>

</form>

</CENTER>

     <!--  <div class="col-lg-6" id="button">    
               <button type="button"><a href="#">Add Admin</a></button> 
       </div>

-->

    </body>
        
    
</html>
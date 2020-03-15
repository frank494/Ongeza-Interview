<?php

include"db_connection.php";


$Client_Assesssment_ID=mysqli_real_escape_string($connect,$_POST['Client_Assesssment_ID']); 

            $viewCustomerList=mysqli_query($connect,"SELECT * FROM customer WHERE customer_id='$Client_Assesssment_ID'") or die(mysqli_error($connect));

              $row=mysqli_fetch_assoc($viewCustomerList);

            echo '<div class="row"> 
                 <div class="col-sm-8 b-r">

                   <div class="form-group" style="width: 60%"><label>Fist name</label> 
                     <input type="text" name="firstname" id="firstnameId" class="form-control" value="'.$row['first_name'].'"/>
                     <input type="hidden" id="customerID" value="" >
                 </div><br>


                     <div class="form-group" style="width: 60%"><label>Last Name</label> 
                    <input type="text" name="lastname" id="lastnameId" class="form-control" value="'.$row['last_name'].'"/>
    
                </div><br>


                     <div class="form-group" style="width: 60%">Town Name</label>
             <input type="text" name="townname" id="townnameId" class="form-control" value="'.$row['town_name'].'"/>
             </div><br>

                     ';
                       


?>
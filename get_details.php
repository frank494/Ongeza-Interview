
<?php
session_start();
 require_once("db_connection.php");

 //$Dependant_ID=$_SESSION['empdata']['Dependant_ID'];
?>

<?php
if($_POST['action']=='EditCustomer'){
            $EditcustomerID=mysqli_real_escape_string($connect,$_POST['EditcustomerID']); 

            $viewCustomerList=mysqli_query($connect,"SELECT * FROM customer WHERE customer_id='$EditcustomerID'") or die(mysqli_error($connect));

              $row=mysqli_fetch_assoc($viewCustomerList);

            echo '<div class="row"> 
                 <div class="col-sm-8 b-r">

                   <div class="form-group" style="width: 60%"><label>Fist name</label> 
                     <input type="text" name="firstname" id="firstnameId" class="form-control" value="'.$row['first_name'].'"/>
                     <input type="hidden" id="customer_id" value="'.$EditcustomerID.'" >
                 </div><br>


                     <div class="form-group" style="width: 60%"><label>Last Name</label> 
                    <input type="text" name="lastname" id="lastnameId" class="form-control" value="'.$row['last_name'].'"/>
    
                </div><br>


                     <div class="form-group" style="width: 60%">Town Name</label>
             <input type="text" name="townname" id="townnameId" class="form-control" value="'.$row['town_name'].'"/>
             </div><br>

                     ';
                       




  } 

?>
           
        
<?php
 require_once("db_connection.php");

   ?>        

<?php


if($_POST['action']=='SaveData'){
 
$firstnameId=mysqli_real_escape_string($connect,$_POST['firstnameId']);
$lastnameId=mysqli_real_escape_string($connect,$_POST['lastnameId']);
$townnameId=mysqli_real_escape_string($connect,$_POST['townnameId']);
$genderId=mysqli_real_escape_string($connect,$_POST['genderId']);

 $Query=mysqli_query($connect,"INSERT INTO customer(first_name,last_name,town_name,gender_id) VALUES ('$firstnameId','$lastnameId','$townnameId','$genderId')") or die(mysqli_error($connect));


if($Query){
    echo 'New Customer created successfully.';
}else{
    echo 'New Customer saving failure,please try again.';
}


}elseif($_POST['action']=='SaveChanges'){ 
      $customerID=mysqli_real_escape_string($connect,$_POST['customerID']); 
      $firstnameId=mysqli_real_escape_string($connect,$_POST['firstnameId']);
      $lastnameId=mysqli_real_escape_string($connect,$_POST['lastnameId']);
      $townnameId=mysqli_real_escape_string($connect,$_POST['townnameId']);
 
            
           $Query=mysqli_query($connect,"UPDATE customer SET first_name='$firstnameId',last_name='$lastnameId', town_name='$townnameId' WHERE customer_id='$customerID'") or die(mysqli_error($connect));


          if($Query){
        echo 'New Update added successfully.';
       }else{
        echo 'New Update saving failure,please try again.';
       }


      }elseif ($_POST['action']=='Remove_item') {

        $DeleteCustomerDetails = mysqli_real_escape_string($connect,$_POST['DeleteCustomerDetails']);
        $query = mysqli_query($connect,"DELETE FROM customer WHERE customer_id='$DeleteCustomerDetails'") or die(mysqli_error());
        if ($query) {
            echo '1';
        } else {

            echo '2';
        }
    }

       

?>













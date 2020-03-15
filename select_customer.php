
<?php 
   
    require_once("db_connection.php");

    ?>
<!DOCTYPE html>
<html>
<body>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ongeza | Test</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="fancybox/dist/jquery.fancybox.min.css">

    </head>



    <div class="row  border-bottom white-bg dashboard-header">
    <div class="text-center animated fadeInRightBig">
    <!-- middle-box -->

    <table id="insurance_Register"class="table table-bordered table-hover dataTables-example"style="width:100%">
    <thead>
    <tr>
    <th style="width:2%">SN</th>
    <th style="width:8%">Customer Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Town Name</th>
    <th>Gender Name</th>
    <th style="width: 15%">Action</th>
    </tr>
    </thead>
    <?php
    $customer_id=mysqli_real_escape_string($connect,$_POST['customer_id']);
    $Query=mysqli_query($connect,"SELECT * FROM customer ct JOIN gender gt ON gt.gender_id=ct.gender_id") or die(mysqli_error($connect));



    $sn=1;
    while ( $result = mysqli_fetch_assoc($Query)) {
    echo "<tr>";

    echo "<td>".$sn++.".</td>";

    $customer_id=$result['id'];
    
    echo "<td style='text-align:left'>".$result['customer_id']."</td>";
    echo "<td style='text-align:left'>".$result['first_name']."</td>";
    echo "<td style='text-align:left'>".$result['last_name']."</td>";
    echo "<td style='text-align:left'>".$result['town_name']."</td>";
    echo "<td style='text-align:left'>".$result['gender_name']."</td>";

 
    echo '<td style="text-align:center;width:100px">

   <button class="btn btn-primary deleteRecord" id="delete_'.$result['customer_id'].'" data-toggle="modal" href="#" title="delete"><i class="fa fa-user-plus">Delete</i></button>

    <span data-toggle="modal" data-target="#editModalCustomer" class="Edit_customer" onClick="customerEditDetails(this.id)" id="'.$result['customer_id'].'"><a href="#" data-toggle="tooltip" data-placement="top" title="Edit insurance">  <i class="fa fa-pencil-square fa-3  title="Edit Customer">&nbsp;Edit</i> </a></span>
   
                            
    </td>';


    echo "</tr>";


    }



    ?>

    </tbody>
    </table>



    </div>


    </div>

            <div class="modal fade" id="editModalCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 0px">
                 <div class="modal-dialog" style="width:65%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabelName"><b>EDIT CUSTOMER DETAILS</b></h4>    
                        </div>
                        <!-- <form method="post" id="insert_form">  -->  
                        <div class="modal-body" id="editModal_customer_contents_display">
                        <input type="hidden" id="customerID" value="" >

                                            
                        </div>
                        <div class="modal-footer">
                        <a href="#" id="saveChangesbtn" data-toggle="modal" data-target="#"  class="btn btn-primary"
                         onclick="SaveNewUpdateCustomer()">Save Changes</a>
                        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                 <!--    </form> -->
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>




<!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>


    <!-- Data tables -->
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>


    <!-- Signature -->
    <script src="Signature/libs/jSignature.min.js"></script>
    <script src="Signature/libs/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="Signature/libs/flashcanvas.js"></script>
    <![endif]-->

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/bootbox.min.js"></script>

    <script src="fancybox/dist/jquery.fancybox.min.js"></script>


    <script type="text/javascript">
    $("[data-fancybox]").fancybox({

    });
    </script>



<script type="text/javascript">

function SaveNewUpdateCustomer(){
 var customerID=$('#customerID').val();
 var firstnameId=$('#firstnameId').val();
 var lastnameId=$('#lastnameId').val();
 var townnameId=$('#townnameId').val();
 

    if (firstnameId == '' || firstnameId == null) {
        bootbox.alert({
        title: "Important details missing!",
        message: "Please make sure the First name is provided",
        backdrop: true
        });
        return;

    }

     if (firstnameId.length<3) {
        bootbox.alert({
        title: "Important details missing!",
        message: "Please make sure the First name is atleast 3 Characters",
        backdrop: true
        });
        return;

    }





    if (lastnameId == '' || lastnameId == null) {
        bootbox.alert({
        title: "Important details missing!",
        message: "Please make sure Last Name is provided",
        backdrop: true
        });
        return;

    }

      if (townnameId == '' || townnameId == null) {
        bootbox.alert({
        title: "Important details missing!",
        message: "Please make sure Town Name is provided",
        backdrop: true
        });
        return;

    }



   

 bootbox.confirm({
    title: "New Customer Registration",
    message: "Are you sure you want to save this Customer?",
    buttons: {
    cancel: {
    label: '<i class="fa fa-times"></i> Cancel',
    className: 'btn-danger'
    },
    confirm: {
    label: '<i class="fa fa-check"></i> Confirm',
    className: 'btn-primary'
    }
    },
    callback: function (result) {
    if(result==true){
    $.ajax({
    type:'POST',
    data: 'action=SaveChanges&firstnameId='+firstnameId+'&lastnameId='+lastnameId+'&townnameId='+townnameId+'$customerID='+customerID,
    url:'save_details.php',
    cache: false,
    success:function(a){
        
  
        bootbox.alert({
        title: "Data Changes Successfully!",
        message: ""+a,
        backdrop: true
        });

    
    }

    });

    }else{
    return;
    }

    }



    });





    }


    var editDetails = document.getElementById("insert_form"); 
  
    function customerEditDetails(id) { 
          //alert (id);
        editDetails.innerHTML = +id; 

    }
    

var deleteDetails = document.getElementById("insert_form"); 
  
    function customerDelete(id) { 
          //alert (id);
        deleteDetails.innerHTML = +id; 

    }

 


$('.Edit_customer').on('click',function(){

 var Client_Assesssment_ID=$(this).attr('id');
 $.ajax({
  type:'POST',
  url:'edit_customer.php',
  data:'Client_Assesssment_ID='+Client_Assesssment_ID,
  cache:false,
  success:function(a){

  $('#editModal_customer_contents_display').html(a);

  }
  

 });

 

  });

$('.deleteRecord').on('click',function(){

var id=$(this).attr('id');
var record=id.split('_');
var record_id=record[1];
$.ajax({
type:'POST',
url:'delete_customer.php',
data:'record_id='+record_id,
cache:false,
success:function(a){
  alert(a);
 // $('#delete_Record').html(a);
}
});




});





/*$(document).ready(function(){ 
 $('.deleteRecord').click(function(){  
    var deletingCustomerID=$(this).attr('id');
    if(confirm("Are you sure you want to remove this customer?"))
   {
   $.ajax({
   url:"save_details.php",
   method:"post",
   data:'action=Remove_item&deletingCustomerID='+deletingCustomerID,
   cache:false,
   success:function(data){ 
    bootbox.alert({
        title: "Data Deleted Successfully!",
        message: ""+a,
        backdrop: true
        });
     
   }
    
  }); 
    
}
});
});
*/
</script> 


</body>
</html>





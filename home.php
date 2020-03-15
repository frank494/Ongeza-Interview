

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
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">

    </head>



    <div id="modal-mobile-form-show" class="modal fade" aria-hidden="true">
    <div class="modal-dialog" style="width: 70% ">
        <div class="modal-content">

            <fieldset>
            <div class="modal-body" id="modal_mobile_contents_display">
                <div class="editalert">
                     <h3 class="m-t-none m-b">
                         New Customer Registration
                     </h3>
                </div>
            <form  name="myForm" method="post" id="insert_form" onSubmit="return validateComplete(document.myForm)">


                <div class="row">
                        <div class="col-sm-8 b-r">
                            <p id="status"></p>

                <div class="form-group" style="width: 60%"><label>Fist name</label> 
                     <input type="text" name="firstname" id="firstnameId" class="form-control" autocomplete="off" placeholder="First Name" required="required"/>
                </div><br>


                <div class="form-group" style="width: 60%"><label>Last Name</label> 
                    <input type="text" name="lastname" id="lastnameId" class="form-control" placeholder="Last Name" required="required" />
                 <input type="hidden" id="customerID" value="" >

                </div><br>

            <div class="form-group" style="width: 60%">Town Name</label>
             <input type="text" name="townname" id="townnameId" class="form-control" placeholder="Town Name" required="required">
             </div><br>
             
              <div class="form-group" style="width: 63%">Gender</label>
            <select class="form-control" data-live-search="true" id="genderId">
                     <option value="">~~~~Select Gender~~~~</option>
                        <?php
                             $data = mysqli_query($connect,"SELECT gender_name,gender_id FROM gender ORDER BY gender_name") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($data)) {
                                        echo '<option value="'. $row['gender_id'] .'">' . $row['gender_name'] .'</option>';
                                        }
                                    
                                    ?>

                                   
                         </select>
             </div><br>


            <button class="btn btn-sm btn-primary" id="save_insurance" type="button" onclick="SaveNewInsurance()"><strong><i class="fa fa-check-square" aria-hidden="true"></i>&nbsp;Save Details</strong>
            </button>
                        
                
             </form>
            </div>
          </div>
          </fieldset>
        </div>
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

    function SaveNewInsurance(){

 var firstnameId=$('#firstnameId').val();
 var lastnameId=$('#lastnameId').val();
 var townnameId=$('#townnameId').val();
 var genderId=$('#genderId').val();
 

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


    if (genderId == '' || genderId == null) {
        bootbox.alert({
        title: "Important details missing!",
        message: "Please make sure Gender is provided",
        backdrop: true
        });
        return;

    }



   

 bootbox.confirm({
    title: "New New Customer Registration",
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
    data: 'action=SaveData&firstnameId='+firstnameId+'&lastnameId='+lastnameId+'&townnameId='+townnameId+'&genderId='+genderId,
    url:'save_details.php',
    cache: false,
    success:function(a){
        
  
        bootbox.alert({
        title: "Data Inserted Successfully!",
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
    
 
</script> 




</body>
</html>



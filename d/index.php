<?php
	session_start();
	$uri=50;
	$var1 = $_SERVER['REQUEST_URI'];
if(strlen($var1) < 25){
?>
      <script type="text/javascript">
          window.location.href="http://localhost/ecard/";
      </script>

<?php
    }
    if (isset($_GET['error_id']) && $_GET['error_id'] !=='') 
{
        $errmsg = $_GET['error_id'];
        $msgerror ='';
        $msgsucc = '';
        if ($errmsg == '1') {
            $msgerror = 'Surname field must not be empty or less than 4';
        
        }
        elseif ($errmsg == '11') {
            $msgerror ='Only letters and white space are allowed in surname field';
        }
        elseif ($errmsg == '12') {
            $msgerror ='Only letters and white space are allowed in firstname field';
        }
        elseif ($errmsg == '13') {
            $msgerror ='Only letters and white space are allowed in lastname field';
        }
        elseif ($errmsg == '2') {
            $msgerror ='Firstname field must not be empty or less than 4';
     
        }
        elseif ($errmsg == '3') {
            $msgerror ='Lastname field must not be empty and must be an initial';
     
        }
         elseif ($errmsg == '4') {
            $msgerror ='Please select a valid level e.g ND, HND or AIFPU for Staff';
      
        }
         elseif ($errmsg == '5') {
            $msgerror ='Phone number must be 11 characters';
      
        }
         elseif ($errmsg == '6') {
            $msgerror ='Please select a valid gender';
        }
         elseif ($errmsg == '7') {
            $msgerror ='Please select a Department';
  
        }
         elseif ($errmsg == '8') {
            $msgerror ='Please select a  valid and matching dept';
     
        }
         elseif ($errmsg == '9') {
            $msgerror ='Oops! Registration number already used. Consider refreshing the page or contact admin'; 
        }
         elseif ($errmsg == '10') {
            $msgerror ='Something went wrong while adding';
        }
        elseif ($errmsg == '20') {
            $msgerror ='Something went wrong while deleting Id Card';
        }
        elseif ($errmsg == '21') {
            $msgerror ='Please select the details you want to delete';
        }
        
        if (isset($_GET['succ_id']) && $_GET['succ_id==0'])
            {

              $msgsucc ='Operation Successful!';
            }
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>eCard || Cards</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.ico">

	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

	<style>
		.height10{
			height:30px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">List of All Generated ID Cards</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
        if (isset($_GET['$userinfor']) && $_GET['$userinfor'] !=='') {
           $message = $_GET['$userinfor'];
           echo "$message";
        }
            if (isset($errmsg) && $errmsg !=='') {
              ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <?php echo $msgerror; ?>
                  </div>
              <?php
            }
            elseif (isset($msgsucc) && $msgsucc !=='') 
            {
        ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
            </button>
                <?php echo $msgsucc; ?></div>
        <?php
            }
         ?>
             
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-success"><span class="fa fa-plus"> New</span></a>
				<a class="btn btn-info" href="<?php $uri=40; echo 'result.php?view_mode=multiple_id='.md5($uri); ?>"><span class="fa fa-eye">View All</span> </a>

				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="fa fa-print"></span> Print</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th style="width: 5px; height: 50px;">S/N</th>
						<th>Bearers Name</th>
						<th>Reg No</th>
						<th> Sex</th>
						<th style="width: 10px; height: 50px;">Category</th>
						
						<th style="width: 200px; height: 50px;">Action</th>
					</thead>
					<tbody>
						<?php
							include_once('dbconnect.php');
							$sql = "SELECT * FROM customer";
							
							$query = mysqli_query($con, $sql);
							 while($row = mysqli_fetch_assoc($query)){
								echo
								"<tr>
								<td>".$row['customer_id']."</td>
									<td>".$row['name'].' '.$row['f_name'].' '.$row['m_name']."</td>
									<td>".$row['issued_date'].'/'.$row['level'].'/'.$row['u_id'].'/'.$row['dept']."</td>
									<td>".$row['sex']."</td>
									<td>".$row['category']."</td>
									<td>
										<a href='#edit_".$row['customer_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='fa fa-edit'></span> Edit</a>
										<a href='#delete_".$row['customer_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='fa fa-trash'></span> Delete</a>
										<a href='single_card.php?id=".$row['customer_id']."view_mode=single".md5($uri)."' class='btn btn-info btn-sm' data-toggle='modal'><span class='fa fa-eye'></span> View</a>
										
										
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>

</body>
</html>
<?php
	session_start();
	include_once('dbconnect.php');
      
  if(isset($_POST['add'])){
	  //text data variables
  		
	  $name=$_POST['name'];
	  $f_name=$_POST['f_name'];
	  $m_name=$_POST['m_name'];
	  $level =$_POST['level'];
	  $mobile = $_POST['mobile'];
	  $category=$_POST['category'];
	  $sex=$_POST['sex'];
	  $u_id=$_POST['u_id'];
	  $dept =$_POST['dept'];
    $issued_date=$_POST['issued_date'];
    $exp_date=$_POST['exp_date'];
	  $d_confirm=$_POST['d_confirm'];
	 
	  //image names
	   $st_pic=$_FILES['pic']['name'];
	  
	  //image temp names
	  
	   $temp_name=$_FILES['pic']['tmp_name'];
	   
	  $f_extension1 = explode('.',$st_pic);
	  
	  $f_extension1 = strtolower(end($f_extension1));
	   
	   $f_newfile1 = uniqid().'.'.$f_extension1;

	if (!isset($name) || trim(strlen($name)) ==0 || trim(strlen($name)) < 4) {
          header('location:'.'index.php'.'?error_id=1');
        exit;
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      header('location:'.'index.php'.'?error_id=11'); 
      exit;
    }
         
    }
    if (!isset($f_name) || trim(strlen($f_name)) ==0 || trim(strlen($f_name)) < 4) {
          header('location:'.'index.php'.'?error_id=2');
        exit;
          
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) {
      header('location:'.'index.php'.'?error_id=12'); 
      exit;
    }
    if (!isset($m_name) || trim(strlen($m_name)) > 1) {
            header('location:'.'index.php'.'?error_id=3');
        exit;
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$m_name)) {
      header('location:'.'index.php'.'?error_id=13'); 
      exit;
    }
    if (!isset($level) || trim(strlen($level)) == 0 || trim(strlen($level))> 6) {
           header('location:'.'index.php'.'?error_id=4');
        exit;
        
    }
    if (!isset($mobile) || trim(strlen($mobile)) <> 11) {
          header('location:'.'index.php'.'?error_id=5');
        exit;
        
    }
    if (!isset($sex) || trim(strlen($sex)) < 1) {
           header('location:'.'index.php'.'?error_id=6');
        exit;
        
      
    }
    if (!isset($dept) || trim(strlen($dept)) < 2) {
          header('location:'.'index.php'.'?error_id=7');
        exit;
         
    }
    if (!isset($d_confirm) || trim(strlen($d_confirm)) < 7) {
          header('location:'.'index.php'.'?error_id=8');
        exit;
         
    }
    
    
    else{
	   // uploading images to ist folder
	   
	   move_uploaded_file($temp_name,"student_images/$f_newfile1");
	   $fetchrows = mysqli_query($con,"SELECT * FROM customer WHERE u_id = '$u_id'");
		if (mysqli_num_rows($fetchrows)>0) {
			 header('location:'.'index.php'.'?error_id=9');
        exit;
         
		}

	 $insert_clint="INSERT INTO customer (profile , name , f_name , m_name , level , mobile , category , sex , u_id , dept , issued_date , exp_date , d_confirm)VALUES('$f_newfile1','$name','$f_name','$m_name','$level','$mobile','$category','$sex',$u_id,'$dept','$issued_date', '$exp_date', '$d_confirm')";
	  
	  $run_costumer = mysqli_query($con, $insert_clint);
	  if($run_costumer){
	  	$uri=1;
	  	$sql = "SELECT * FROM customer";
			$query = mysqli_query($con, $sql);
				while($row = mysqli_fetch_assoc($query)){
					
		     header('location:'.'single_card.php?id='.$row['customer_id'].'view_mode=single/succ_id='.md5($uri));
		 }
		

        exit; 
        
	   }
	   else{
			 header('location:'.'index.php'.'?error_id=10');
        exit;
         
		}
	}
}
	


	header('location: index.php');
?>
<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['customer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="customer_id" value="<?php echo $row['customer_id']; ?>">
				<div class="row form-group">
					
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Surname eg John" name="name" value="<?php echo $row['name']; ?>" required />
      
					</div>
				</div>
				<div class="row form-group">
					
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Firstname eg Doe" name="f_name" value="<?php echo $row['f_name']; ?>" required />
					</div>
				</div>
				<div class="row form-group">
					
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Other names " name="m_name" value="<?php echo $row['f_name']; ?>" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">

						<select style="width: 270; height: 50;" class="form-control" name="category" id="category">
					      <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
					      <option value="Staff">Staff</option>
					      <option value="Student">Student</option>
					  </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						<select style="width: 270; height: 50;" class="form-control" name="level" id="level">
					      <option value="">--Select ND,HND for student or AIFPU for staff--</option>
					      <option value="ND">ND</option>
					      <option value="HND">HND</option>
					      <option value="AIFPU">AIFPU</option>
					  	  </select>
						
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mobile" placeholder="Phone Number" value="<?php echo $row['mobile']; ?>" required>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						<select class="form-control"  name="sex" id="sex">
					      <option value="">--Select gender--</option>
					      <option value="M">Male</option>
					      <option value="F">Female</option>
					  	  </select>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						<select class="form-control" style="width: 270; height: 50;" name="dept">
				  	  	<option value="">--Select Department--</option>
				        <?php 
				            $userDept = mysqli_query($con,"SELECT * FROM dept");
				              if (mysqli_num_rows($userDept)) {
				                while($depts = mysqli_fetch_array($userDept)){
				                  ?>
				                    <option value="<?php echo $depts['dept_code']; ?>"><?php echo $depts['dept_name']; ?>
				                    </option>
				        <?php
				                }
				              }
				        ?>
						
				  	  </select>
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						
						<input type="text" class="form-control" name="u_id" value="<?php echo $row['u_id']?>" readonly > 
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						
						<input type="text" class="form-control" name="issued_date"   value="<?php echo $row['issued_date']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						
						<input type="text" class="form-control"  name="exp_date" value="<?php echo $row['exp_date']; ?>">

					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						
						<select class="form-control" style="width: 270; height: 50;" name="d_confirm">
					        <option value="">--Confirm Selected Department--</option>
					        <?php 
					            $userDept = mysqli_query($con,"SELECT * FROM dept");
					              if (mysqli_num_rows($userDept)) {
					                while($depts = mysqli_fetch_array($userDept)){
					                  ?>
					                    <option value="<?php echo $depts['dept_name']; ?>"><?php echo $depts['dept_name']; ?>
					                    </option>
					        <?php
					                }
					              }
					        ?>
      					</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php  echo $row['customer_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['name'].' '.$row['f_name'].' '.$row['m_name'].' '.'with Registration Number ' .$row['issued_date'].'/'.$row['level'].'/'.$row['u_id'].'/'.$row['dept'] ; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php $uri=37;  echo $row['customer_id'].'/permalink='.md5($uri); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">
				<div class="row form-group">
					
					<div class="col-sm-10">
						<input type="file" class="form-control" name="pic" placeholder="Id Profile Pics" required />
      
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Surname eg John" name="name" required />
      
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Firstname eg Doe" name="f_name" required />
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">

						<input type="text" class="form-control" placeholder="Other names should be an initial" name="m_name" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">

						<select style="width: 270; height: 50;" class="form-control" name="category" id="category">
					      <option value="">--Select category--</option>
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
						<input type="text" class="form-control" name="mobile" placeholder="Phone Number" required>
						
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
						
						<input type="text" class="form-control" name="u_id" value="<?php $len=5;
						  	  echo
						  	   (mt_rand(9999, 100000)); ?>" readonly > 
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-10">
						
						<input type="text" class="form-control" name="issued_date"  readonly value=" <?php echo(date('Y')); ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-10">
						
						<input type="text" class="form-control"  name="exp_date" value="<?php echo(date('Y', strtotime('+2 years'))); ?>">

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
                <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>
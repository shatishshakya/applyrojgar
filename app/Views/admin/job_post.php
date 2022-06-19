<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Goverment Job  Details </h3>
              </div>
              <form id="Govt_Job_Form" action="<?php echo base_url('/admin/store-gov-jobdetails') ?>" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="IndexViewHeading">Index View Heading </label>
                    <input type="text" name="IndexViewHeading" class="form-control" id="IndexViewHeading" >
                  </div>
				
                  <div class="form-group">
                    <label for="NamePost">Name of Post:</label>
                    <input type="text" name="NamePost" class="form-control" id="NamePost" >
                  </div>
				  
                  <div class="form-group">
                    <label for="PostDate">Post Date / Update:</label>
                    <input type="text" name="PostDate" class="form-control" id="PostDate">
                  </div>
				  
				          <div class="form-group">
                    <label for="ShortInformation">Short Information</label>
                    <textarea  rows="4" cols="50" name="ShortInformation" class="form-control" id="ShortInformation"></textarea>
                  </div>
				        
				            <div class="form-group">
                    <label for="exampleInputPassword1">Department </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    </div>
				  
				            <div class="form-group">
                    <label for="exampleInputPassword1">Department Advt Details </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    </div>
				  
				          <div class="form-group">
                    <label for="exampleInputPassword1">Advt No. </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    </div>
				  
				           <div class="form-group">
                    <label for="exampleInputPassword1">Application Begin : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				            <div class="form-group">
                    <label for="exampleInputPassword1">Last Date for Apply Online : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                  </div>
				  
				           <div class="form-group">
                    <label for="exampleInputPassword1">Last Date Fee Payment : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				          <div class="form-group">
                    <label for="exampleInputPassword1">Exam Date : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				          <div class="form-group">
                    <label for="exampleInputPassword1">Admit Card Available : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				         <div class="form-group">
                    <label for="exampleInputPassword1">General / OBC / EWS : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				           <div class="form-group">
                    <label for="exampleInputPassword1">SC / ST : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				           <div class="form-group">
                    <label for="exampleInputPassword1">PH (Divyang) : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				           <div class="form-group">
                    <label for="exampleInputPassword1">Pay the Exam Fee Through Debit Card / Credit Card / Net Banking / E Challan </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				        
				          <div class="form-group">
                    <label for="exampleInputPassword1">General / OBC / EWS : </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
            </div>
        </div>
      </div>
    </section>
	
	<?php include('include/footer.php'); ?> 
<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Private Job Details </h3>
              </div>
              <form id="PrivateJobForm" action="<?=base_url()?>/Home/storePrivateJob">
                <div class="card-body">

                  <div class="form-group">
                    <label for="IndexViewHeading">Index View Heading </label>
                    <input type="text" name="IndexViewHeading" class="form-control" id="IndexViewHeading" >
                  </div>

                  <div class="form-group">
                    <label for="Title">Company Name</label>
                    <input type="text" name="Company" class="form-control" id="Company" placeholder="Enter Company">
                  </div>
				  
				  <div class="form-group">
                    <label for="Location">Job Location </label>
                    <input type="text" name="Location" class="form-control" id="Location" placeholder="Enter Location">
                  </div>
				  
				   <div class="form-group">
                    <label for="Experiance">Experiance</label>
                    <input type="text" name="Experiance" class="form-control" id="Experiance" placeholder="Enter Experiance">
                  </div>
				  
				    <div class="form-group">
                    <label for="Salary">Salary</label>
                    <input type="text" name="Salary" class="form-control" id="Salary" placeholder="Enter Salary">
                  </div>
				  
				  <div class="form-group">
                    <label for="Notice_Period">Notice Period</label>
                    <input type="text" name="NoticePeriod" class="form-control" id="NoticePeriod" placeholder="Enter Notice_Period">
                  </div>
				  
				  <div class="form-group">
                    <label for="Job_Descrption">Job Descrption</label>
                    <input type="text" name="JobDescrption" class="form-control" id="JobDescrption" placeholder="Enter Job_Descrption">
                  </div>
				  
				  <div class="form-group">
                    <label for="Useful_Email">Useful Email-id</label>
                    <input type="text" name="UsefulEmail" class="form-control" id="UsefulEmail" placeholder="Enter Useful_Email">
                  </div>
				  
				   <div class="form-group">
                    <label for="Useful_Contact">Useful Contact Number</label>
                    <input type="text" name="UsefulContact" class="form-control" id="UsefulContact" placeholder="Enter Useful_Contact">
                  </div>
				  
				  <div class="form-group">
                    <label for="Useful_Link">Useful Link</label>
                    <input type="text" name="UsefulLink" class="form-control" id="UsefulLink" placeholder="Enter Useful_Link">
                  </div>
                 
                  
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
        </div>
      </div>
    </section>
	
	<?php include('include/footer.php'); ?> 
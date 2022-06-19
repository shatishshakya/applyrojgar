<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admission Details </h3>
              </div>
              <form id="Admission_Form" action="<?php echo base_url('/admin/admission-post') ?>" method="POST">
             
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
                    <input type="text" name="PostDate" class="form-control" id="PostDate" >
                  </div>
				  
				          <div class="form-group">
                    <label for="ShortInformation">Short Information</label>
                    <input type="text" name="ShortInformation" class="form-control" id="ShortInformation" >
                  </div>
				
				
				          <div class="form-group">
                    <label for="Department">Department </label>
                    <input type="text" name="Department" class="form-control" id="Department" >
                  </div>
				  
				           <div class="form-group">
                    <label for="DepartmentAdvtDetails">Department Advt Details </label>
                    <input type="text" name="DepartmentAdvtDetails" class="form-control" id="DepartmentAdvtDetails" >
                  </div>
				  
				 
				          <div class="form-group">
                    <label for="UploadDate">Upload Date : </label>
                    <input type="text" name="UploadDate" class="form-control" id="UploadDate" >
                  </div>
				  
				          <div class="form-group">
                    <label for="RegistrationStart">Registration Start  : </label>
                    <input type="text" name="RegistrationStart" class="form-control" id="RegistrationStart" >
                  </div>
				  
				           <div class="form-group">
                    <label for="RegistrationFees">Registration Fees : </label>
                    <input type="text" name="RegistrationFees" class="form-control" id="RegistrationFees" >
                  </div>
				  
				  
				  
				          <div class="form-group">
                    <label for="AdmissionFormLink">Admission Form Link  </label>
                    <input type="text" name="AdmissionFormLink" class="form-control" id="AdmissionFormLink" >
                  </div>
				  
				  
				          <div class="form-group">
                    <label for="OfficialWebsite"> Official Website </label>
                    <input type="text" name="OfficialWebsite" class="form-control" id="OfficialWebsite" >
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
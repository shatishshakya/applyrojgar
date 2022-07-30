<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Goverment Job  Details </h3>
              </div>
              <form id="Govt_Job_Form" action="<?php echo base_url('/admin/gov-job-post') ?>" method="POST" enctype="multipart/form-data" >
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
                    <input type="text" name="Department" class="form-control" id="exampleInputPassword1" >
                    </div>
				  
				            <div class="form-group">
                    <label for="exampleInputPassword1">Department Advt Details </label>
                    <input type="text" name="DepartmentAdvtDetails" class="form-control" id="exampleInputPassword1" >
                    </div>
				  
				         <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Advt No. </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    </div>-->
				  
				           <div class="form-group">
                    <label for="ApplicationBegin">Application Begin : </label>
                    <input type="text" name="ApplicationBegin" class="form-control" id="exampleInputPassword1" >
                  </div>
				  
				            <div class="form-group">
                    <label for="LastDateApply">Last Date for Apply Online : </label>
                    <input type="text" name="LastDateApply" class="form-control" id="LastDateApply">
                  </div>
				  
				           <div class="form-group">
                    <label for="LastDateFee">Last Date Fee Payment : </label>
                    <input type="text" name="LastDateFee" class="form-control" id="LastDateFee" >
                  </div>
				  
				          <div class="form-group">
                    <label for="ExamDate">Exam Date : </label>
                    <input type="text" name="ExamDate" class="form-control" id="ExamDate" >
                  </div>
				  
				          <div class="form-group">
                    <label for="AdmitCardAvailable">Admit Card Available : </label>
                    <input type="text" name="AdmitCardAvailable" class="form-control" id="AdmitCardAvailable" >
                  </div>
				  
				         <div class="form-group">
                    <label for="GeneralOBCEWS">General / OBC / EWS : </label>
                    <input type="text" name="GeneralOBCEWS" class="form-control" id="GeneralOBCEWS" >
                  </div>
				  
				           <div class="form-group">
                    <label for="SCST">SC / ST : </label>
                    <input type="text" name="SCST" class="form-control" id="SCST" >
                  </div>
				  
				           <div class="form-group">
                    <label for="PHFemale">PH (Divyang)/Female : </label>
                    <input type="text" name="PHFemale" class="form-control" id="PHFemale" >
                  </div>
				  
				           <!--<div class="form-group">
                    <label for="PayInfo">Pay the Exam Fee Through Debit Card / Credit Card / Net Banking / E Challan </label>
                    <input type="text" name="PayInfo" class="form-control" id="PayInfo" >
                  </div>-->
				        
				          <div class="form-group">
                    <label for="PostNameDetails">Post Name Details : </label>
                    <input type="text" name="PostNameDetails" class="form-control" id="PostNameDetails" >
                  </div>

                  <div class="form-group">
                    <label for="TotalPost">Total Post : </label>
                    <input type="text" name="TotalPost" class="form-control" id="TotalPost" >
                  </div>

                  <div class="form-group">
                    <label for="Qualification">Qualification : </label>
                    <input type="text" name="Qualification" class="form-control" id="Qualification" >
                  </div>

                  <div class="form-group">
                    <label for="ApplyLink">Apply Online Link : </label>
                    <input type="text" name="ApplyLink" class="form-control" id="ApplyLink" >
                  </div>

                  <div class="form-group">
                    <label for="NotificationDownload">Download Notification: </label>
                    <input type="text" name="NotificationDownload" class="form-control" id="NotificationDownload" >
                  </div>

                  <div class="form-group">
                    <label for="OfficialWebsite">Official Website: </label>
                    <input type="text" name="OfficialWebsite" class="form-control" id="OfficialWebsite" >
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
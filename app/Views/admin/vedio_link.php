<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vedio Link  </h3>
              </div>
			  <?php $validation = \Config\Services::validation(); ?>
              <form id="Vidio_Link_Form" action="<?=base_url()?>/Home/storeVedioLink"  >
                <div class="card-body">
                <div class="form-group">
                    <label for="IndexViewHeading">Index View Heading </label>
                    <input type="text" name="IndexViewHeading" class="form-control" id="IndexViewHeading" >
                  </div>


                  <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="Title" class="form-control" id="Title" placeholder="Enter Title">
					
					<?php if($validation->getError('Title')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Title'); ?>
            </div>
        <?php }?>
					
					
                  </div>
				  
				  
				  
				  
				  <div class="form-group">
                    <label for="Duration">Duration </label>
                    <input type="text" name="Duration" class="form-control" id="Duration" placeholder="Enter Duration">
                  </div>
				  
				   <div class="form-group">
                    <label for="Publication">Channel Name</label>
                    <input type="text" name="Channel" class="form-control" id="Channel" placeholder="Enter Channel Name">
                  </div>
				  
				    <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="Description" class="form-control" id="Description" placeholder="Enter Description">
                  </div>
				  
				  <div class="form-group">
                    <label for="Publication">Upload Date</label>
                    <input type="text" name="UploadDate" class="form-control" id="UploadDate" placeholder="Enter Upload Date">
                  </div>
				  
				  <div class="form-group">
                    <label for="Subject">Subject</label>
                    <input type="text" name="Subject" class="form-control" id="Subject" placeholder="Enter Subject">
                  </div>
				  
				  <div class="form-group">
                    <label for="Teacher_Name">Teacher Name</label>
                    <input type="text" name="TeacherName" class="form-control" id="TeacherName" placeholder="Enter Teacher_Name">
                  </div>
				  
				   <div class="form-group">
                    <label for="Link">Link</label>
                    <input type="text" name="Link" class="form-control" id="Link" placeholder="Enter Link">
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
<?php include('include/header.php');?> 
		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Rojgar News </h3>
              </div>
              <form id="Rojgar_News_Form" action="<?=base_url()?>/Home/storeRojgarNews">
                <div class="card-body">

                <div class="form-group">
                    <label for="IndexViewHeading">Index View Heading </label>
                    <input type="text" name="IndexViewHeading" class="form-control" id="IndexViewHeading" >
                  </div>
                  
                  <div class="form-group">
                    <label for="Heading">Heading</label>
                    <input type="text" name="Heading" class="form-control" id="Heading" placeholder="Enter Heading">
                  </div>
				  
				  <div class="form-group">
                    <label for="Department">Department </label>
                    <input type="text" name="Department" class="form-control" id="Department" placeholder="Enter Department">
                  </div>
				  
				  <div class="form-group">
                    <label for="Publication">Publication Date</label>
                    <input type="text" name="PublicationDate" class="form-control" id="PublicationDate" placeholder="Enter Publication">
                  </div>
				  
				  <div class="form-group">
                    <label for="Adv">Adv No.</label>
                    <input type="text" name="Adv" class="form-control" id="Adv" placeholder="Enter Adv">
                  </div>
				  
				  <div class="form-group">
                    <label for="Paper_Name">News Paper Name</label>
                    <input type="text" name="PaperName" class="form-control" id="PaperName" placeholder="Enter Paper_Name">
                  </div>
				  
                  <div class="form-group">
                   <label for="name" style="font-size: 12px;" >Upload Supporting Documents</label>
					<input type="file" id="UploadFilename" name="UploadFilename" class="form-control" accept="application/pdf" ></button>
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
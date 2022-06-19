<?php// include('include/header.php', $data);?> 
<?php include('include/header.php');?> 		
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Upload Study Materials <small>(Pdf Only)</small></h3>
              </div>
              <?php //print_r($studymaterialsbyId); die; ?>
              <?php $validation = \Config\Services::validation(); ?>
              
              
              <form id="Study_Materials_Form" action="<?php echo base_url('/admin/store-study-materials') ?>" method="POST" enctype="multipart/form-data" >
              <input type="hidden" name="editID" id="editID" value="<?php echo !empty($studymaterialsbyId['id']) ? $studymaterialsbyId['id'] : ''  ; ?>">

                <div class="card-body">

                <div class="form-group">
                    <label for="IndexViewHeading">Index View Heading </label>
                    <input type="text" name="IndexViewHeading" class="form-control" id="IndexViewHeading" value="<?php echo set_value('Heading',!empty($studymaterialsbyId['IndexViewHeading']) ? $studymaterialsbyId['IndexViewHeading'] : '')   ?>"  >
                    <?php if($validation->getError('Heading')) {?>
                    <div class='alert alert-danger mt-2'>
                      <?= $error = $validation->getError('Heading'); ?>
                    </div>
                  <?php }?>
                  </div>



                  <div class="form-group">
                    <label for="Heading">Heading</label>
                    <input type="text" name="Heading" class="form-control" id="Heading" value="<?php echo set_value('Heading',!empty($studymaterialsbyId['title']) ? $studymaterialsbyId['title'] : '')   ?>"  >
                <!-- Error -->
              <?php if($validation->getError('Heading')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Heading'); ?>
            </div>
          <?php }?>
             </div>
              
             <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" <?php //echo !empty($studymaterialsbyId['id']) ? 'disabled' : '';?> name="Description" class="form-control" id="Description" value="<?php echo  !empty($studymaterialsbyId['description']) ? $studymaterialsbyId['description'] : '' ?>" placeholder="Enter Description">
                    <?php if($validation->getError('Description')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('Description'); ?>
            </div>
             <?php }?>
                  </div>
				  
				        <div class="form-group">
                    <label for="Publication">Publication Date</label>
                  <input type="text" <?php //echo !empty($studymaterialsbyId['id']) ? 'disabled' : '';?> name="Publication_Date" class="form-control" id="Publication_Date" value="<?php echo  !empty($studymaterialsbyId['publication_date']) ? $studymaterialsbyId['publication_date'] : '' ?>" >
                  
                  <?php if($validation->getError('Publication_Date')) {?>
                  <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('Publication_Date'); ?>
                 </div>
                  <?php }?>
                 </div>
				  
                  <div class="form-group">
                   <label for="name" style="font-size: 12px;" >Upload Supporting Documents</label>
				        	<input type="file" id="filename" name="filename" class="form-control" accept="application/pdf" ></button>
					        
                  <?php if($validation->getError('filename')) {?>
                  <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('filename'); ?>
                 </div>
                  <?php }?>
                
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

<!--<table>
<thead>
  <tr>
    <th>Sl. No.</th>
    <th>title</th>
    <th>description</th>
    <th>Publication Date</th>
    <th>documents</th>
    <th>date</th>
    <th>Action</th>
  </tr>

</thead>
<tbody>

  <?php

  if(!empty($details ))
  {
  foreach ($details as $row)
  {
  ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['publication_date']; ?></td>
    <td><?php echo $row['documents']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td>
      <a href="<?php echo base_url('Home/study_materials/'.$row['id']);?>" class="btn btn-primary btn-sm">Edit</a>
      <a href="<?php echo base_url('Home/deleteDocuments/'.$row['id']);?>" class="btn btn-danger btn-sm">Delete</a>
    </td>
    </tr>
  <?php
  }
}else
{?>

  <tr col="4"><td>Data not found.</td></tr>
<?php  }
  ?>
</tbody>
</table>-->
	
	<?php include('include/footer.php'); ?> 
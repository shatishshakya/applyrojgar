<?php include('include/header.php');?> 


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">admission_report</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">admission_report</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>IndexViewHeading</th>
                            <th>Name of Post</th>
                            <th>Post Date / Update</th>
                            <th>Short Information</th>
                            <th>Department</th>
                            <th>Department Advt Details</th>
                            <th>Upload Date </th>
                            <th>Registration Start</th>
                            <th>Registration Fees</th>
                            <th>Admission Form Link</th>
                            <th>Official Website</th>
                            <th>UpdateDate</th>
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
                            <td><?php echo $row['IndexViewHeading']; ?></td>
                            <td><?php echo $row['NamePost']; ?></td>
                            <td><?php echo $row['PostDate']; ?></td>
                            <td><?php echo $row['ShortInformation']; ?></td>
                            <td><?php echo $row['Department']; ?></td>
                            <td><?php echo $row['DepartmentAdvtDetails']; ?></td>
                            <td><?php echo $row['UploadDate']; ?></td>
                            <td><?php echo $row['RegistrationStart']; ?></td>
                            <td><?php echo $row['RegistrationFees']; ?></td>
                            <td><?php echo $row['AdmissionFormLink']; ?></td>
                            <td><?php echo $row['OfficialWebsite']; ?></td>
                            <td><?php echo $row['UpdateDate']; ?></td>
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
                </table>
            </div>
        </div>
    </div>

</div>
	
<?php include('include/footer.php'); ?> 
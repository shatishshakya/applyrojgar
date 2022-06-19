<?php include('include/header.php');?> 
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">study_materials_report</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">study_materials_report</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>Sl. No.</th>
                        <th>Index View Heading</th>
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
                            <td><?php echo $row['IndexViewHeading']; ?></td>
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
                </table>
            </div>
        </div>
    </div>

</div>
	
<?php include('include/footer.php'); ?> 
<?php 
session_start();
include 'database.php';

?> 



<?php include 'inc/header.php' ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
			<div class="row">
			    <div class="col-lg-12">
			        <div class="card">
			            <div class="card-body">
			                        	<?php 
                                           $query = "SELECT * FROM concern";
                                           $result = mysqli_query($connection, $query);
			                        	?>			            	
			                <h4 class="card-title">Basic example</h4>
			                <p class="card-title-desc">For basic styling—light padding and
			                        only horizontal dividers—add the base class <code>.table</code> to any
			                        <code>&lt;table&gt;</code>.
			                </p>    

			                
                                        <?php if(isset($_SESSION['outcome'])){ ?>
                                            <span class="text-<?php echo $_SESSION['type'] ?>">
                                                <?php echo $_SESSION['outcome'] ?>
                                            </span>
                                        <?php }unset($_SESSION['outcome']) ?> 
			                
			                <div class="table-responsive">
			                    <table class="table mb-0">

			                        <thead>
			                            <tr>
			                                <th>#</th>
			                                <th class="w-25">Image</th>
			                                <th>Service</th>
			                                <th class="w-25">Short Description</th>
			                                <th class="w-25">Details</th>
			                                <th class="w-25">Action</th>
			                            </tr>
			                        </thead>
			                        <tbody>

			                        	<?php 
                                           $i = 1;
                                           foreach($result as $row):
			                        	?>
			                            <tr>
			                                <th scope="row"><?= $i ?></th>
			                                <td class="w-25"><img src="<?php echo $row['image'] ?>" alt="" style="width:200px; height: 200px;"></td>
			                                <td><?php echo $row['name'] ?></td>
			                                <td class="w-25"><?php echo $row['ShortDescription'] ?></td>
			                                <td class="w-25"><?php echo $row['LongDescription'] ?></td>
			                                <td class="w-25">
                                                <a href="concern-edit.php?edit=<?php echo $row['ID']; ?>" class="btn btn-warning">Update</a>
                                                <a href="concern-delete.php?delete=<?php echo $row['ID']; ?>" class="btn btn-danger">Delete</a>			                                	
			                                </td>
			                            </tr>
			                            <?php 
                                           $i =$i+1;
                                       endforeach;
			                            ?>

			                        </tbody>
			                    </table>
			                </div>

			            </div>
			        </div>
		        </div>
		    </div>                   	
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->

<?php include 'inc/footer.php' ?>
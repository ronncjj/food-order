<?php include('partials/menu.php') ?>
        
        <!-- Main content section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <br><br>

                <?php 
                    if(isset($_SESSION['add'])){
                        echo $_SESSION['add']; //Displaying Session Message
                        unset($_SESSION['add']); //Removing session Message
                    }
                ?>
                <br><br><br>
                <!-- Button to Add Admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br><br><br>
                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                    
                    <?php
                        // Query to get all admin 
                        $sql = "SELECT * FROM tbl_admin";
                        // Execute Query
                        $res = mysqli_query($conn, $sql);

                        // Check whether the Quey is Executed
                        if($res==TRUE){
                            // Count Rows to check whether we have data in database
                            $count = mysqli_num_rows($res); // Function to get all the rows in db
                            // Check num of rows

                            $sn = 1; //Create a variable for id

                            if($count>0){
                                // Have data in db
                                while($rows = mysqli_fetch_assoc($res)){
                                    // Using while loop to get all data from db
                                    // run as long as data within db
                                    
                                    // Get individual Data
                                    $id = $rows['id'];
                                    $full_name = $rows['full_name'];
                                    $username = $rows['username'];

                                    // Display the values in table
                                    ?>
                                    <tr>
                                        <td><?php echo $sn ?></td>
                                        <td><?php echo $full_name; ?></td>
                                        <td><?php echo $username; ?></td>
                                        <td>
                                            <a href="#" class="btn-secondary">Update Admin</a>
                                            <a href="" class="btn-danger">Delete Admin</a>   
                                        </td>
                                    </tr>
                                    <?php $sn++;
                                }
                            }
                            else{
                                // No data in db
                            }

                        }
                    ?>

                </table>

            </div>

        </div>
        <!-- Main content section Ends -->

<?php include('partials/footer.php') ?>
<?php
  include("./header.php");
  include("./connection.php");


  $sql = "select * from role";
  $result = mysqli_query($conn, $sql);
?>
     

     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Document</title>
     </head>
     <body>
        
     <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>


                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Role_name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                             <?php
                                             while($row = mysqli_fetch_assoc($result)){

                                              ?>

                                              <td><?php echo $row['id'] ?></td>
                                              <td><?php echo $row['role_name'] ?></td>
                                              <td><a href="role_update.php?id=<?php $row['id'] ?>">Edit <i class="bi bi-pencil"></i></a></td>
                                              <td><a href="role_update.php?id=<?php $row['id'] ?>">Delete <i class="bi bi-trash3"></i></a></td>
                                              </tr>
                                            <?php } ?>
                                                
                                            
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>








<?php

        include("./footer.php");

?>

     </body>
     </html>
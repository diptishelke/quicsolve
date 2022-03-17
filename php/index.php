<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Ajax CRUD in PHP.</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>

      <div class="container mt-2">
         <div class="row">
            <div class="col-md-8 mt-1 mb-1">
               <h2 class="text-white bg-dark" text align-center;>USER LIST</h2>
            </div>
            <div class="col-md-8 mt-1 mb-2"><button type="button" id="addNewUser" class="btn btn-success">Add</button></div>
            <div class="col-md-8">
               <table class="table"border=4;>
                  <thead>
                     <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                       <th scope="col">City</th>
                       <th scope="col">pincode</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        include 'db.php';
                        $query="select * from user limit 150"; 
                        $result=mysqli_query($dbCon,$query);
                        ?>
                     <?php if ($result->num_rows > 0): ?>
                     <?php while($array=mysqli_fetch_row($result)): ?>
                     <tr>
                        <th scope="row"><?php echo $array[0];?></th>
                        <td><?php echo $array[1];?></td>
                        <td><?php echo $array[2];?></td>
                        <td><?php echo $array[3];?></td>
                        <td><?php echo $array[4];?></td>
                        <td><?php echo $array[5];?></td>
                        
                        <td> 
                           <a href="javascript:void(0)" class="btn btn-primary edit" data-id="<?php echo $array[0];?>">Edit</a>
                           <a href="javascript:void(0)" class="btn btn-primary delete" data-id="<?php echo $array[0];?>">Delete</a>
                     </tr>
                     <?php endwhile; ?>
                     <?php else: ?>
                     <tr>
                        <td colspan="3" rowspan="1" headers="">No Data Found</td>
                     </tr>
                     <?php endif; ?>
                     <?php mysqli_free_result($result); ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- boostrap model -->
      <div class="modal fade" id="user-model" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="userModel"></h4>
               </div>
               <div class="modal-body">
                  <form action="javascript:void(0)" id="userInserUpdateForm" name="userInserUpdateForm" class="form-horizontal" method="POST">
                     <input type="hidden" name="id" id="id">
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="" maxlength="50" required="">
                        </div>
                     </div>
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="" maxlength="50" required="">
                        </div>
                     </div>
                        <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Pincode</label>
                        <div class="col-sm-12">
                           <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" value="" maxlength="50" required="">
                        </div>
                     </div>
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="addNewUser">Save changes
                        </button>
                     </div>
                  </form>
               </div>
               <div class="modal-footer"></div>
            </div>
         </div>
      </div>
      <!-- end bootstrap model -->
      <script type = "text/javascript" >
    $(document).ready(function($) {
        $('#addNewUser').click(function() {
            $('#userInserUpdateForm').trigger("reset");
            $('#userModel').html("Add New User");
            $('#user-model').modal('show');
        });
        $('body').on('click', '.edit', function() {
            var id = $(this).data('id');
            // ajax
            $.ajax({
                type: "POST",
                url: "edit.php",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    $('#userModel').html("Edit User");
                    $('#user-model').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                     $('#email').val(res.email);
                     $('#address').val(res.address);
                     $('#city').val(res.city);
                     $('#pincode').val(res.pincode);
                }
            });
        });$('body').on('click', 'add', function() {
            
            // ajax
            $.ajax({
                type: "POST",
                url: "add1.php",
                data: {
                    
                },
                dataType: 'json',
                success: function(res) {
                    $('#userModel').html("Edit User");
                    $('#user-model').modal('show');
                    $('#id').val(res.id);
                    $('#name').val(res.name);
                     $('#email').val(res.email);
                     $('#address').val(res.address);
                     $('#city').val(res.city);
                     $('#pincode').val(res.pincode);
                }
            });
        });
        $('body').on('click', '.delete', function() {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');
                // ajax
                $.ajax({
                    type: "POST",
                    url: "delete1.php",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#name').html(res.name);
                         $('#email').html(res.email);
                          $('#address').html(res.address);
                         $('#city').html(res.city);
                        $('#pincode').html(res.pincodes);
                        window.location.reload();
                    }
                });
            }
        });
        $('#userInserUpdateForm').submit(function() {
            // ajax
            $.ajax({
                type: "POST",
                url: "add.php",
                data: $(this).serialize(), // get all form field value in 
                dataType: 'json',
                success: function(res) {
                    window.location.reload();
                }
            });
        });
    }); 
</script>
   </body>
</html>
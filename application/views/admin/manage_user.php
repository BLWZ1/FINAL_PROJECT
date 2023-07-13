
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Manage User</h4>
                  <p class="card-description">
                    <button class="btn btn-primary btn-md"><a style="text-decoration:none;color:white;" href="/admin/add_user">Add User</a></button>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Partport</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php 
                        if($listUsers){ 
                          foreach($listUsers as $row){
                        ?>
                        <tr>
                          <td><?=$row->customerId?></td>
                          <td><?=$row->customerName?></td>
                          <td><?=$row->email?></td>
                          <td><?=$row->phone?></td>
                          <td><?=$row->address?></td>
                          <td><?=$row->passport?></td>
                          <td>
                            <a href="<?=base_url('admin/edit_user/'.$row->customerId)?>" class="btn btn-md btn-success">Edit</a>
                            <a href="<?=base_url('admin/delete_user/'.$row->customerId)?>" class="btn btn-md btn-danger">Delete</a>
                          </td>
                        </tr>
                        <?php } } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
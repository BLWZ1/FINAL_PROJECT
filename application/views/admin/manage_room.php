
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center display-1">Manage Room</h4>
                  <p class="card-description">
                    <button class="btn btn-primary"><a style="text-decoration:none;color:white;" href="/admin/add_room">Add Room</a></button>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Tools</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($listRooms){ 
                          foreach($listRooms as $row){  
                        ?>
                        <tr>
                          <td><?=$row->roomId?></td>
                          <td><?=$row->roomName?></td>
                          <td><?=$row->kindRoom?></td>
                          <td>$<?=number_format($row->price, 2)?></td>
                          <td><?=$row->quantity?></td>
                          <td><?=$row->title?></td>
                          <td>
                            <?php if($row->statusRoom == 'available'){
                              ?>
                            <button class="btn btn-xs btn-primary">Available</button>
                            <?php }

                            else{
                              ?>
                             <button class="btn btn-xs btn-danger">Reverse</button> 
                              <?php
                            }
                            ?>
                          
                          </td>
                          <td>
                            <a class="btn btn-md btn-success" href="/admin/edit_room/<?=$row->roomId?>"> Edit</a>
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
    
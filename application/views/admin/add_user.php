
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Add User</h4>
                  <?php
                  if(isset($message)){
                    echo "<p>".$message."</p>";
                  }
                  ?>
                  <form class="forms-sample" method = "POST" >
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="number" class="form-control" id="Phone" name = "phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="address">
                    </div>
                    <div class="form-group">
                        <label for="passport">Passport</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Name" name="passport">
                    </div>
                    <div class=" text-center">
                    <button type="submit" class="btn btn-primary mr-2 " name="Submit" value="Submit">Submit</button>
                    <button class="btn btn-light ">Cancel</button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        
      </div>
      
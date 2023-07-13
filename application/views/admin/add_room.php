
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Add room</h4>
                  <?php
                  if(isset($message)){
                    echo "<p>".$message."</p>";
                  }
                  ?>
                  <form class="forms-sample" method = "POST" >
                    <div class="form-group">
                      <label for="exampleInputName1">Name of Room</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="type">Type of Room</label>
                      <select name="type" class="form-control" required>
                        <option value="">Select Room</option>
                        <option value="Normal">Normal</option>
                        <option value="Standard">Standard</option>
                        <option value="Vip">VIP</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="phone">Price</label>
                      <input type="number" class="form-control" id="price" name = "price" required>
                    </div>
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input type="number" class="form-control" id="quantity" name = "quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" id="exampleInputName1"  name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="partport">Image</label>
                        <input type="text" class="form-control" name="image" placeholder="imagelink1|imagelink2...." required>
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
      <!-- main-panel ends -->
    
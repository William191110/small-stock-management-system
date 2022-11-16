<?php  __include('templates/admin-bar');?>
<div class="col-8 mx-auto grid-margin stretch-card">

              <div class="card mt-4">
                <div class="card-body">
                  <h4 class="card-title">Create News</h4>
                  
                  <form method="POST" action="<?php echo base_URL('update_news');?>" class="forms-sample">
                    <!-- <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div> -->
                    <div class="form-group">
                      
                      <label for="exampleInputEmail3">News headline</label>
                      <input type="text" class="form-control" name="head" id="exampleInputEmail3" placeholder="Headline" required>
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleTextarea1">News</label>
                      <textarea required class="form-control" placeholder="News" name="info" id="exampleTextarea1" required></textarea>
                    </div>
                    <input type="submit" name="updateNews" class="btn btn-light me-2" value="Submit">
                
                  </form>
                </div>
              </div>
            </div>
<?php  __include('templates/admin-cst');?>
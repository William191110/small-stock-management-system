<?php  __include('templates/admin-bar');?>
<?php $user = $data['user'][0];?>

<div class="col-md-8 mx-auto grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update User</h4>
                 <hr>
                  <form method="POST"  action="<?php echo base_URL('update&id='.$_GET['id']) ?>" class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">First name</label>
                      <input type="text" class="form-control" name="fname" id="exampleInputUsername1" value="<?php echo $user->fname;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Surname</label>
                      <input type="text" class="form-control" name="lname" id="exampleInputEmail1" value="<?php echo $user->lname;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Type of farming</label>
                      <input type="text" name="tof" class="form-control" id="exampleInputPassword1" value="<?php echo $user->tof;?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
<?php  __include('templates/admin-cst');?>
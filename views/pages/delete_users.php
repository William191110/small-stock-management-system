<?php  __include('templates/admin-bar');?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Delete Users</h4>
                  <p class="card-description">
                     <code> Delete users who have completed studying the course</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Full name</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                               foreach ($data['items'] as $value) {?>
                                <tr>
                          <td><?php echo ucfirst($value->fname.' '.$value->lname); ?></td>
                          <td><?php echo $value->email; ?></td>
                          <td><?php echo $value->contact; ?></td>
                          <td><a href="http://localhost/ssllp/index.php?page=delete_users&user=<?php echo $value->email;?>" class="badge badge-danger">Delete</a></td>
                        </tr>
                               <?php }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php  __include('templates/admin-cst');?>
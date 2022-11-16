<?php  __include('templates/admin-bar');?>
<div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Users feedback</h4>
                            
                                </div>
                                <ul class="bullet-line-list">
                                  <?php 
                                       foreach ($data['items'] as $value) {?>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div>
                                           <span class="text-light-green">
                                              <?php echo '<b>User Email</b> :'.$value->email;?></span> <br> 
                                              <?php echo '<b>Feedback</b> :'.$value->msg;?>
                                      </div>
                                    </div>
                                  </li>
                                       <?php } ?>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
<?php  __include('templates/admin-cst');?>
<?php  __include('templates/barner');?>
 <?php  __include('templates/top-nav');?>
 <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
        
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php __include('templates/nav');?>
      <!-- partial -->
      <?php __include('templates/main-panel');?>
      
      <style>
  .card.table-new {
    background: #1E283D url("images/dashboard/train.jpg");
    height: 40vh;
}
</style>
                
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        
                       
                        <div class="row flex-grow">
                          
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <h4 class="card-title card-title-dash">Trainings <br>
                                  <p>SSLLP is offering following Trainings to all farmers</p>
                                  <hr>
                                </h4>
                                  <p class="mb-0">SSLLP</p>
                                </div>
                                <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded table-new">
                              <div class="card-body">
                                <div class="col-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                  Combating poverty in.
                                  </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                                <ul class="bullet-line-list">
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Farming</span> <br>
                                       Planning to conduct a meeting in Chiladzuro. <br>
                                       <a 
                                       
                                       <?php if(isset($_SESSION['user'])) {?>
                                        href="<?php echo base_URL('trainings');?>" onclick="alert('You Have been enrolled');"
                                              <?php } else {?>
                                                href="<?php echo base_URL('trainings');?>" onclick="alert('You are required to register');"
                                              <?php } ?>
                                       
                                        class="fw-bold text-primary">Enroll <i class="mdi mdi-arrow-right ms-2"></i></a>
                                      </div>
                        
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Animal Production</span> <br>
                                       To offer a free session in Lilongwe to combat poverty among farmers. <br>
                                       <a 
                                       <?php if(isset($_SESSION['user'])) {?>
                                        href="<?php echo base_URL('trainings');?>" onclick="alert('You Have been enrolled');"
                                              <?php } else {?>
                                                href="<?php echo base_URL('trainings');?>" onclick="alert('You are required to register');"
                                              <?php } ?> class="fw-bold text-primary">Enroll <i class="mdi mdi-arrow-right ms-2"></i></a>
                                       </div>
                                      
                                    </div>
                                  </li>
                                  <li>
                                    <div class="d-flex justify-content-between">
                                      <div><span class="text-light-green">Water Sanitary</span> <br>
                                       To offer a free session in Lilongwe to combat poverty among farmers. <br>
                                       <a 
                                       <?php if(isset($_SESSION['user'])) {?>
                                        href="<?php echo base_URL('trainings');?>" onclick="alert('You Have been enrolled');"
                                              <?php } else {?>
                                                href="<?php echo base_URL('trainings');?>" onclick="alert('You are required to register');"
                                              <?php } ?> class="fw-bold text-primary">Enroll <i class="mdi mdi-arrow-right ms-2"></i></a>
                                       </div>
                                      
                                    </div>
                                  </li>
                                </ul>
                                <div class="list align-items-center pt-3">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
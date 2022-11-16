<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_URL('home');?>">
              <i class="mdi mdi-format-align-justify menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item nav-category">Menu</li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_URL('information');?>" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-book-open-page-variant"></i>
              <span class="menu-title">Animal Production</span>
              <i class="menu-arrow"></i>
            </a>  
          </li>


          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_URL('trainings');?>" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Trainings</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_URL('news');?>" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-file-document-box"></i>
              <span class="menu-title">News</span>
              <i class="menu-arrow"></i>
            </a>
          </li>

          <?php 
            
            if (isset($_SESSION['user'])) {?>
          <li class="nav-item">
            <a class="nav-link"  href="<?php echo base_URL('feedback');?>" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-comment-account-outline"></i>
              <span class="menu-title">Feedback</span>
              <i class="menu-arrow"></i>
            </a>
            
          </li>
          <?php } ?>
          
          <li class="nav-item nav-category">System</li>
          <li class="nav-item">
            
            <?php 
            
            if (!isset($_SESSION['user'])) {?>
            <a class="nav-link" href="<?php echo base_URL('login');?>" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-login"></i>
              <span class="menu-title">Login</span>
              <i class="menu-arrow"></i>
            </a>

            <a class="nav-link" href="<?php echo base_URL('register');?>" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Register</span>
              <i class="menu-arrow"></i>
            </a>
            <?php }?>
            <?php 
            
            if (isset($_SESSION['user'])) {?>
            <a class="nav-link" href="<?php echo base_URL('home&logout');?>" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-export"></i>
              <span class="menu-title">Log Out</span>
              <i class="menu-arrow"></i>
            </a>

            <?php }?>
                      </li>
        </ul>
      </nav>
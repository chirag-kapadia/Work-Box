<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images\faces\face30.png" alt="image">
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Chirag
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Dashboard.php">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php 
             if($_SESSION['IsSuper']==1)
            {
          ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-Admin" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-Admin">
              <ul class="nav flex-column sub-menu">
                <!-- <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="new_Admin.php">Add New Admin</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="admin_Details.php">Admin Details</a></li>
              </ul>
            </div>
          </li>
        <?php }?>
          <li class="nav-item">
            <a class="nav-link" href="Client.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Client</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Freelancer.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Freelancer</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="OnlineProject.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Online Projects</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-Skills" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Skills</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-Skills">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="view_Skill.php">View Skills</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_Skill.php">Add New Skills</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-Category" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-Category">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="view_Category.php">View Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_Category.php">Add New Category</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="payment_Details.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Payment</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inquiry.php">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Inquiry</span>
            </a>
          </li>
           
        
        </ul>
      </nav>
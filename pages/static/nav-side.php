<?php
  session_start();
  if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>Ahlijati Nuraminah</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <ul class="sidebar-menu">
        <li>
          <a href="../../connector.php?page=dashboard">
            <i class="fa fa-dashboard"></i> Dashboard
          </a>
        </li>
        <?php
          if($_SESSION['page']=='kelola') {
            echo "<li class='treeview active'>";
          } else { 
            echo "<li class='treeview'>";
          }
        ?>
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Kelola Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <?php
              if($_SESSION['subpage']=='education') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-education'><i class='fa fa-circle-o'></i> Data Education</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-education'><i class='fa fa-circle-o'></i> Data Education</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='project-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-project-experience'><i class='fa fa-circle-o'></i> Data Project Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-project-experience'><i class='fa fa-circle-o'></i> Data Project Experience</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='pengabdian-masyarakat') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-pengabdian-masyarakat'><i class='fa fa-circle-o'></i> Data Pengabdian Masyarakat</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-pengabdian-masyarakat'><i class='fa fa-circle-o'></i> Data Pengabdian Masyarakat</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='leadership-experience') {
                echo "<li class='active'><a href='../../connector.php?page=kelola-leadership-experience'><i class='fa fa-circle-o'></i> Data Leadership Experience</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-leadership-experience'><i class='fa fa-circle-o'></i> Data Leadership Experience</a></li>";
              }
            ?>
            <?php
              if($_SESSION['subpage']=='personal-details') {
                echo "<li class='active'><a href='../../connector.php?page='kelola-personal-details'><i class='fa fa-circle-o'></i> Data Personal Details</a></li>";
              } else { 
                echo "<li><a href='../../connector.php?page=kelola-personal-details'><i class='fa fa-circle-o'></i> Data Personal Details</a></li>";
              }
            ?>
          </ul>
        </li>
        <?php
          if($_SESSION['page']=='public') {
            echo "<li class='treeview active'>";
          } else { 
            echo "<li class='treeview'>";
          }
        ?>
          <ul class="treeview-menu">          </ul>
        </li>
      </ul>
    </section>
  </aside>
<?php
} else {
  header('location:index.php');
}
?>
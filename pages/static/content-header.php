<section class="content-header">
  <h1>
    <?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "Dashboard";
	    	}
	    	else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='education') {
	    			echo "Kelola Data Education";
	    		}
	    		else if($_SESSION['subpage']=='project-experience') {
	    			echo "Kelola Data Project Experience";
	    		}
	    		else if($_SESSION['subpage']=='skill') {
	    			echo "Kelola Data Skill";
	    		}
	    		else if($_SESSION['subpage']=='leadership-experience') {
	    			echo "Kelola Data Leadership Experience";
	    		}
	    		else if($_SESSION['subpage']=='personal-details') {
	    			echo "Kelola Data Personal Details";
	    		}
	    	}
	    	else if($_SESSION['page']=='education') {
	    		echo "Education";
	    	}
	    	else if($_SESSION['page']=='skill') {
	    		echo "Skill";
	    	}
	    	else if($_SESSION['page']=='leadership-experience') {
	    		echo "Leadership Experience";
	    	}
	    	else if($_SESSION['page']=='personal-details') {
	    		echo "Personal Details";
	    	}
	    	else if($_SESSION['page']=='project-experience') {
	    		echo "Project Experience";
	    	}
	    } else {
	    	echo "Dashboard";
	    }
    ?>
  </h1>
  <ol class="breadcrumb">
  	<?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    	}
	    	else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='education') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Education</li>";
	    		}
	    		else if($_SESSION['subpage']=='project-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Project Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='skill') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Skill</li>";
	    		}
	    		else if($_SESSION['subpage']=='leadership-experience') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Leadership Experience</li>";
	    		}
	    		else if($_SESSION['subpage']=='personal-details') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Personal Details</li>";
	    		}
	    	}
	    	else if($_SESSION['page']=='education') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Education</li>";
	    	}
	    	else if($_SESSION['page']=='skill') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Skill</li>";
	    	}
	    	else if($_SESSION['page']=='leadership-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Leadership Experience</li>";
	    	}
	    	else if($_SESSION['page']=='personal-details') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Personal Details</li>";
	    	}
	    	else if($_SESSION['page']=='project-experience') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Project Experience</li>";
	    	}
	    	
	    } else {
	    	echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    }
    ?>
  </ol>
</section>
<?php 
	session_start();
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				header('location:index.php');
				$_SESSION['page'] = "dashboard";
				$_SESSION['subpage'] = "";
				break;
			case 'kelola-personal-details':
				header('location:pages/kelola-data/personal-details.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "personal-details";
				break;
			case 'kelola-education':
				header('location:pages/kelola-data/education.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "education";
				break;
			case 'kelola-leadership-experience':
				header('location:pages/kelola-data/leadership-experience.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "leadership-experience";
				break;
			case 'kelola-project-experience':
				header('location:pages/kelola-data/project-experience.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "project-experience";
				break;
			case 'kelola-writing-experience':
				header('location:pages/kelola-data/writing-experience.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "writing-experience";
				break;
			case 'kelola-skill-experience':
				header('location:pages/kelola-data/skill-experience.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "skill-experience";
				break;
			case 'blog':
				header('location:pages/public/blog.php');
				$_SESSION['page'] = "dashboard";
				$_SESSION['subpage'] = "";
				break;	
			case 'login':
				header('location:pages/public/login.php');
				$_SESSION['page'] = "login";
				$_SESSION['subpage'] = "";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	} else {
		header('location:index.php');
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	}
?>
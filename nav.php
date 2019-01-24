<?php
switch ($_GET['page']){

	case 'laporan':
		if ($_GET['page']){
			include './modul/laporan/laporan.php';
			$content = $laporan;
		}
        break;
    case 'delete':
		if ($_GET['page']){
			include './modul/laporan/delete.php';
			$content = $delete;
		}
		break;
	
	
	default:
		include 'modul/home.php';
		$content = $home;
		break;
}
?>

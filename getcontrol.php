<?php

include ('getmodal.php');

if (isset($_REQUEST['action'])) {

	if ($_REQUEST['action'] == 'getitems') {
		
		$dobj = new ModalOperations();
		
		$itemsarr = array();
		
		$campres = $dobj -> getdriverdata();
		
		if ($campres -> num_rows > 0) {

		while ($row = $campres -> fetch_assoc()) {
			$itemsarr['id'][] = $row['id'];
			$itemsarr['user'][] = $row['user'];
			$itemsarr['email'][] = $row['email'];
			$itemsarr['pass'][] = $row['pass'];
			$itemsarr['phone'][] = $row['phone'];
			$itemsarr['cnic'][] = $row['cnic'];
			$itemsarr['choose'][] = $row['choose'];

		}

		}
		echo json_encode($itemsarr);
	}	
}
if (isset($_REQUEST['action'])) {

	if ($_REQUEST['action'] == 'getuser') {
		
		$dobj = new ModalOperations();
		
		$itemsarr = array();
		
		$campres = $dobj -> userlogin();
		
		if ($campres -> num_rows > 0) {

		while ($row = $campres -> fetch_assoc()) {
			$itemsarr['id'][] = $row['id'];
			$itemsarr['user'][] = $row['user'];
			$itemsarr['email'][] = $row['email'];
			$itemsarr['pass'][] = $row['pass'];
			$itemsarr['phone'][] = $row['phone'];
			$itemsarr['cnic'][] = $row['cnic'];
			$itemsarr['choose'][] = $row['choose'];

		}

		}
		echo json_encode($itemsarr);
	}	
}
?>
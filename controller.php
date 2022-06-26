<?php

include ('model.php');
	//--------------------------Customer Module-------------------//
if ($_REQUEST['action'] == 'adddata') {
		
		$addobj = new ModalOperations();
		
		$id = $addobj -> addformdata($_REQUEST['user'],$_REQUEST['email'], $_REQUEST['pass']);
		
		echo json_encode($id);
		
	}
	//--------------------------DRIVER MODULE-------------------//
	if($_REQUEST['action'] == 'driverdata'){
		$driverobj = new ModalOperations();
		$datadriver = $driverobj -> adddriverdata($_REQUEST['user'],$_REQUEST['email'],$_REQUEST['pass'],$_REQUEST['phone'], $_REQUEST['cnic'], $_REQUEST['choose']);
		echo json_encode($id);
	}
    if ($_REQUEST['action'] == 'getitems') {
        $dobj = new ModalOperations();
    
        $itemsarr = array();
    
        $campres = $dobj -> getdriverdata();
    
        if ($campres -> num_rows > 0) {
            while ($row = $campres -> fetch_assoc()) {
                $itemsarr['email'][] = $row['email'];
                $itemsarr['pass'][] = $row['pass'];
                $itemsarr['phone'][] = $row['phone'];
            }
        }
        echo json_encode($itemsarr);
    }
?>
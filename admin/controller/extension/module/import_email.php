<?php

class ControllerModuleImportEmail extends Controller {

    
    public function index() {   
        $filename='email.csv';    
	
	$file = fopen(DIR_UPLOAD.$filename, "r"); //path to website root directory
        
        $first_row = true;
	$email_list='';
	while (!feof($file)) {
	    if ($first_row == true) { //Eliminating first title row of sheet
		$row = fgetcsv($file);
		$first_row = false;
		continue;
	    }

	    $row = fgetcsv($file);

	    if ($row[0] == '') { //to eliminate last null row
		continue;
	    }
            $email_id=$row[0];
            $newsletter=1;
            $result=$this->db->query("SELECT email from ".DB_PREFIX."customer WHERE email ='".$email_id."'");
            if($result->num_rows == 0){
            $this->db->query("INSERT INTO ".DB_PREFIX."customer (`customer_id`, `customer_group_id`, `store_id`, `firstname`, `lastname`, `email`, `telephone`, `fax`, `password`, `salt`, `cart`, `wishlist`, `newsletter`, `address_id`, `custom_field`, `ip`, `status`, `approved`, `safe`, `token`, `date_added`) VALUES (NULL, '1', '0', '', '', '".$email_id."', '', '', '', '', NULL, NULL, '".$newsletter."', '0', '', '', '', '', '', '', '')");
            $email_list.=$email_id.'<br>';
	    }else{
		$this->db->query("UPDATE ".DB_PREFIX."customer set newsletter=1 where email ='".$email_id."'");
	    }

	}

	fclose($file);
        echo 'Added below emails successfully to customer table in database.<br><br>';
        print_r($email_list);
	}
}


<?php
require_once '../../config.php';
require_once '../db/connect_bare.php';

 if(isset($_POST["Upload"])){

    $entryTime = $now;
    $current_user = $_POST['userId'];
    $transType = $_POST['transType'];
    $page = $_GET["from"];
		$filename=$_FILES["file"]["tmp_name"];


		 if($_FILES["file"]["size"] > 0)
    		 {
    		  $file = fopen($filename, "r");

            $flag = true;
    	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
    	         {
                  if($flag) { $flag = false; continue; }

                  // Variables for this Script
                  $acctNo = $getData[0];
                  $acctName = $getData[1];
                  $acctDesc = $getData[2];
                  $acctParent = $getData[3];
                  $acctType = $getData[4];
                  $amount = $getData[5];
                    $newdate = strtotime($getData[6]);
                  $balanceDate = date('Y-m-d',$newdate);

                  // Upload to Accounts Table
                  $stmt1 = $con->prepare("INSERT INTO accounts (account_id, account_name, description, parent_account, account_type) VALUES (?,?,?,?,?)");
                  $stmt1->bind_param("isssi", $acctNo, $acctName, $acctDesc, $acctParent, $acctType);
         					$stmt1->execute();

                  // GL Tansaction
                  $string1 = 'Starting Balance';
                  $stmt2 = $con->prepare("INSERT INTO gl_tran (trans_date, trans_type, trans_details, encoded_by, encodeDate) VALUES (?,?,?,?,?)");
                  $stmt2->bind_param("sisis", $balanceDate, $transType, $string1, $current_user, $entryTime);
                  $stmt2->execute();

                  $stmt3 = $con->prepare("SELECT * FROM gl_tran WHERE encoded_by = ? AND encodeDate = ?");
                  $stmt3->bind_param("ss", $current_user, $entryTime);
                  $stmt3->execute();
                  $result = $stmt3->get_result();
                  while($row = $result->fetch_array(MYSQLI_BOTH)) {
                    $transID = $row['tran_id'];
                  }

                  // GL Tans Details
                  $stmt4 = $con->prepare("INSERT INTO gl_tran_details (tran_id, account, amount) VALUES (?,?,?)");
                  $stmt4->bind_param("iid", $transID, $acctNo, $amount);
                  $stmt4->execute();

                  $stmt5 = $con->prepare("SELECT * FROM gl_tran_details WHERE tran_id = ? AND account = ? AND amount = ?");
                  // ECHO $transID . ' ' . $acctNo . " " . $amount . '<br />';
                  $stmt5->bind_param("iid", $transID, $acctNo, $amount);
                  $stmt5->execute();
                  $result2 = $stmt5->get_result();
                  while($row = $result2->fetch_array(MYSQLI_BOTH)) {
                    $transDetailID = $row['entry_id'];
                  }

                  // Audit Trail
                  $add = 'Add';
                  $update = 'Update';
                  $delete = 'Delete';
                  $details = 'Created Account - ' . $acctName;

                  $stmt6 = $con->prepare("INSERT INTO audit_trail_acct (date, action, details, gl_trans_id, gl_details_id, new_value, user) VALUES (?,?,?,?,?,?,?)");
                  $stmt6->bind_param("sssiidi", $entryTime, $add, $details, $transID, $transDetailID, $amount, $current_user);
                  $stmt6->execute();

    	         }

               if(!isset($stmt6))
       				{
       					echo "<script type=\"text/javascript\">
       						alert(\"Invalid File:Please Upload CSV File.\");
       						window.location = \"$url$page\"
       					  </script>";
       				}
       				else {
                 echo "<script type=\"text/javascript\">
       						alert(\"CSV File has been successfully Imported.\");
                  window.location = \"$url$page\"
       					</script>";
       				}

               $con->close();

    	    fclose($file);
    		 }
}



 ?>

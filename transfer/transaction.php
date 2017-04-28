<?php 
require_once("app_config.php");
require_once("database_connection.php");
//$donor_id = $_SESSION['id];
$donor_id = 1;
$take_donor = sprintf("SELECT * FROM users WHERE id='%d' ", 1);
$result = mysqli_query($link, $take_donor)
    or handle_error("smth goes while take data donor from db", "");
$donor= mysqli_fetch_assoc($result);
$donor['balance']-= $_POST['value'];
$recipient_id = $_POST['id_rec'];
$take_rec = sprintf("SELECT * FROM users WHERE id='%d' ", $recipient_id);

$res_rec = mysqli_query($link, $take_rec)
or handle_error("smth goes while take data recipient from db", "");
$recipient = mysqli_fetch_assoc( $res_rec);
$recipient['balance'] += $_POST['value'];

$upd_donor = sprintf("UPDATE users SET balance = '%d' WHERE id='%d'",$donor['balance'] ,1);
 mysqli_query($link, $upd_donor)
 or handle_error("try to update donor - failed", "");
$upd_rec = sprintf("UPDATE users SET balance = '%d' WHERE id='%d'",$recipient['balance'] ,$recipient_id);
 mysqli_query($link, $upd_rec)
 or handle_error("try to update recipient - failed", "");
 if(!isset($error_arr))
{
	echo "<p>All goes fine</p>" ;
}

<?php

/* For the Red LED I have hooked it to the BCM Pin 21 so I will set
 * that as the pin then alternate between on or off when page is called 
 * using shell_exec commands as seen bellow. */

shell_exec('gpio -g mode 21 out'); // Set Red LED Pin to output

/* Store if the Pin is currently On or Off so we can flip it.*/
$status = shell_exec('gpio -g read 21');

if ($status < "1") { // If Pin is Off, turn it On, else turn it Off 
	shell_exec('gpio -g write 21 1'); // Set Red to On
}
else {
	shell_exec('gpio -g write 21 0'); // Set Red to Off
}

/* Keep the user on the index.php page to continue selecting options */
header("Location: index.php");
exit();

?>

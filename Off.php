<?php

/* For the 3 LEDs I have hooked them to the BCM Pins 16, 20, and 21
 * going from green, yellow and red. Then as a pin variable to indicate 
 * that I am looping in the Loop file, I set the 12 pin up as well. In 
 * order to make sure all lights are off and no more looping is occuring
 * I set all four pins to 0 which will let the Loop file know to stop
 * looping. This is simply done through shell_exec commands. */

shell_exec('gpio -g mode 16 out'); // Set Green LED Pin to output
shell_exec('gpio -g mode 20 out'); // Set Yellow LED Pin to output
shell_exec('gpio -g mode 21 out'); // Set Red LED Pin to output
shell_exec('gpio -g mode 12 out'); // Set Loop Variable Pin to output

shell_exec('gpio -g write 16 0'); // Set Green Pin to Off with 0
shell_exec('gpio -g write 20 0'); // Set Yellow Pin to Off with 0
shell_exec('gpio -g write 21 0'); // Set Red Pin to Off with 0
shell_exec('gpio -g write 12 0'); // Set Loop Variable to Off with 0

/* Keep the user on the index.php page to continue selecting options */
header("Location: index.php");
exit();

?>

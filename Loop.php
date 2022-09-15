<?php

/* For the 3 LEDs I have hooked them to the BCM Pins 16, 20, and 21
 * going from green, yellow and red. Then as a pin variable to indicate 
 * that I am currently looping, I set the 12 pin up as well. In order to
 * Loop I will use a continous loop to write each pin one by one using 
 * shell_exec commands and have them stay on for a small amount of time
 * with the sleep command. Then before switching to the next light I
 * will check to make sure pin 12 is still active to know I should keep
 * looping. If it is not, I will break the while loop. */

shell_exec('gpio -g mode 21 out'); // Set Red LED Pin to output
shell_exec('gpio -g mode 20 out'); // Set Yellow LED Pin to output
shell_exec('gpio -g mode 16 out'); // Set Green LED Pin to output
shell_exec('gpio -g mode 12 out'); // Set the loop variable to output

shell_exec('gpio -g write 21 0'); // Set Red Pin to Off with 0
shell_exec('gpio -g write 20 0'); // Set Yellow Pin to Off with 0
shell_exec('gpio -g write 16 0'); // Set Green Pin to Off with 0
shell_exec('gpio -g write 12 1'); // Set loop variable Pin to On with 1

while (1 == 1) { // Infinitely loop until broken
	shell_exec('gpio -g write 16 1'); // Set Green to On
	sleep(3); // Stay on for 3 seconds
	shell_exec('gpio -g write 16 0'); // Set Green to Off
	/* Check if this should keep looping by seeing if the variable Pin
	 * is still on. If it is off then break the while loop. */
	if (shell_exec('gpio -g read 12') < 1) {
		break;
	}

	shell_exec('gpio -g write 20 1'); // Set Yellow to On
	sleep(1); // Stay on for 1 seconds
	shell_exec('gpio -g write 20 0'); // Set Yellow to Off
	/* Check if this should keep looping by seeing if the variable Pin
	 * is still on. If it is off then break the while loop. */
	if (shell_exec('gpio -g read 12') < 1) {
		break;
	}

	shell_exec('gpio -g write 21 1'); // Set Red to On
	sleep(2); // Stay on for 2 seconds
	shell_exec('gpio -g write 21 0'); // Set Red to Off
	/* Check if this should keep looping by seeing if the variable Pin
	 * is still on. If it is off then break the while loop. */
	if (shell_exec('gpio -g read 12') < 1) {
		break;
	}
}
/* Keep the user on the index.php page to continue selecting options */
header("Location: index.php");
exit();

?>

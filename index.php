<html>

<head> <!-- Simple HTML Header words  -->
<title>Home Webpage</title>
<h1>Home Webpage</h1>
<h2>Stoplight</h2>
</head>
<body>  <!-- The buttons to control the LEDS  -->
<!-- Each of the below buttons are simply forms that call the associated pages when the button is pressed. They are also given some color with inline css  -->
<form method="get" action=Off.php><button type="submit" style="background-color:grey">Off</button></form>
<form method="get" action=Red.php><button type="submit" style="background-color:red">Red</button></form>
<form method="get" action=Yellow.php><button type="submit" style="background-color:yellow">Yellow</button></form>
<form method="get" action=Green.php><button type="submit" style="background-color:lightGreen">Green</button></form>
<form method="get" action=Loop.php><button type="submit" style="background-color:lightGrey">Loop</button></form>
<!-- For details on each action, please see the associated php files like Red.php or Loop.php
</body>
</html>

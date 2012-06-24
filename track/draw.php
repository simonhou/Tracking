<?php
echo "hello world test";
 $awkCode=$_POST["awkCode"];

 echo "<br>";
 echo "The code you input is:";
 echo "<br>";
 echo "$awkCode";
 echo "<br>";
   echo "<form name=\"terForm\" method=\"post\" action=\"test.php\">";
	echo "<input type=\"submit\" value=\"ReSubmit\" />";
   echo "</form>";

 echo "Results:";
 echo "<br>";
 echo exec("$awkCode");
    //echo "<form name=\"traForm\" method=\"post\" action=\"trace.php\">";
    echo "<form name=\"traForm\" method=\"post\" action=\"trace.html\">";

	echo "<input type=\"submit\" value=\"ShowTrace\" />";
   echo "</form>";

?>

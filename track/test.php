<?php
   session_start(); 
   echo "<br>";
   echo exec("/bin/bash ./test.sh");
   echo "<br>";
   echo exec("/bin/ls -l");
   echo "<br>";
   echo system("cd /home/simon/opencv/OpenCV-2.3.1/samples/cpp/; ./track");
   
  
   echo "<form name=\"terForm\" method=\"post\" action=\"draw.php\">";
//   echo "<textarea class=\"pt\" id=\"runcode0\" rows=\"5\" cols=\"40\"style='padding:3px; font-family:\"Courier New\",Courier,monospace;'>";
//   echo "</textarea>";
//    echo "<button class=\"pn\" onclick=\"runCode($('runcode0'))\" name=\"clickbutton[]\" type=\"button\"><em>Run</em></button>";
//    echo "<button class=\"pn\" onclick=\"copycode($('runcode0'))\" name=\"clickbutton[]\" type=\"button\"><em>Copy</em></button>";
//    echo "<button class=\"pn\" onclick=\"saveCode($('runcode0'))\" name=\"clickbutton[]\" type=\"button\"><em>Save as</em></button>";
	echo "<input type=\"text\" size=40 name=\"awkCode\" value=\"\">";
//	echo "<input type=\"text\" style= \"overflow:visible;width: 80\" name=\"run\" value= \"\"> ";
	echo "<input type=\"submit\" value=\"Draw Trace\" />";
	echo "</form>";

	echo "<form name=\"form1\" method=\"post\" action=\"track.html\" ><input type=\"submit\" value=\"ReTrack\" name=\"sub\" /> </form>";
?>

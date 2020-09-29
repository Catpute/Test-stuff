
<?php

echo "tonst";
 
 $pocket = rand(1,5111); 
sleep(1);
echo $pocket;
sleep(1);
If($pocket > 2) { 
echo "the test works!"; }
else { echo "Uh oh! something went wrong!"; }

$Evening = fopen("GoodEvening!.txt", "w") or die("Unable to open file!");
$txt = "Zachary \n";
fwrite($Evening, $txt);
$txt = "Good evening\n";
fwrite($Evening, $txt);
$txt = "How has your day been?"
fwrite =$Evening, $txt);

fclose($myfile);

stream_get_line(STDIN, 1024, PHP_EOL);

?>

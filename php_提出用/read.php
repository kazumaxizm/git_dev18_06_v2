
<link rel="stylesheet" type="text/css" href="test.css">

<table class="type06">

<?php
// ファイルを開く
$fp = fopen('data/data.txt', 'r');
 
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($date,$name,$address,$eiga) = explode("\t",$line);
        print "<tr>\n";
        print "<td>$date</td><td>$name</td><td>$address</td><td>$eiga</td>";
        print "</tr>\n";
    }
}

// ファイルを閉じる
fclose($fp);

?>

</table>
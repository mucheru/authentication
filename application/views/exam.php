<html>
<head>
<title>try</title>
</head>
<body>

<?php 
if (!isset($_POST['submit'])) {
    echo "<form method=post action='#'>";
    echo "<table border=0>";
    foreach($educationcontent as $opt1):

    //while ($row = mysql_fetch_array($display)) 
    $opt1->question;
        $question = $row["question"];
        $opt1->$row["ans1"];
        $opt2 = $row["ans2"];
        $opt3 = $row["ans3"];
        $opt4 = $row["ans4"];
        $opt5 = $row["ans5"];
        $answer = $row["ans"];
        echo "<tr><td colspan=3><br><b>$question</b></td></tr>";
        echo "<tr><td>$opt1 <input type=radio name=q$id value=\"$opt1\"></td><td>$opt2     <input type=radio name=q$id value=\"$opt2\"></td><td>$opt3 <input type=radio name=q$id value=\"$opt3\"></td><td>$opt4 <input type=radio name=q$id value=\"$opt4\"></td><td>$opt5 <input type=radio name=q$id value=\"$opt5\">q$id</td></tr>";
    
    echo "</table>";
    echo "<input type='submit' value='See how you did' name='submit'>";
    echo "</form>";
    }



?>


</body>
</html>
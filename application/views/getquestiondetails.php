<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>

<h2>Question and Answer tables administration view</h2>

<table style="width:100%">
  <caption>The admin can create question and answers</caption>
  <tr>
    <th>Questions</th>
    <th>Answers A</th>
    <th>Answers B</th>
    <th>Answers C</th>
    <th>Answers D</th>
    <th>Correct Answer</th>
  </tr>
  <tr>
    <td> <?php

foreach ($educationcontent as $show):
    ?>
      <tr>
        <td><?php echo $show->question?></td>
        <td><?php echo $show->AnswerA?></td>
        <td><?php echo $show->AnswerB?></td>
        <td><?php echo $show->Answerc?></td>
        <td><?php echo $show->AnswerD?></td>
        <td><?php echo $show->Correct_Answer?></td>
      </tr>
  

    <?php

endforeach;
?>
       
   

</table>

</body>
</html>

<html>
<head>
<title>
</title>exam page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script  type="text/JavaScript">
$(document).ready(function(){

    
   
    $('[type="checkbox"]').click(function() {

        if(this.checked){

        //$('.check').not(this).prop('checked', false);
        }
    });
});
</script>
</head>
<body>
<form action="getresults" method="Get">
<?php foreach($educationcontent as $exam):?>

<input type="hidden" value="check" class=<?php $exam->id?> id=<?php $exam->id ?>>
<?php echo($exam->question); ?><br>
<input type="checkbox" class="check"  name="answer[]" value="<?php echo($exam->AnswerA);?>">
<?php echo($exam->AnswerA); ?><br>
<input type="checkbox" class="check"  name="answer[]" value="<?php echo ($exam->AnswerB);?>">
<?php echo($exam->AnswerB); ?><br>
<input type="checkbox" class="check"  name="answer[]" value="<?php echo ($exam->Answerc);?>">
<?php echo($exam->Answerc); ?><br>
<input type="checkbox" class="check"  name="answer[]" value="<?php echo($exam->AnswerD);?>">
<?php echo($exam->AnswerD); ?><br>

<?php endforeach?>
<button type="submit" class="btn btn-success btn-lg btn-block">Submit results</button>
</body>
</html>


<html>
<head>
<title> get login events
</title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
.error {color: #FF0000;}
</style>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">create questions</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo validation_errors(); ?>
        <form action="question" method="post">
          <div class="form-group">
          <span class="error">*</span>
            <label for="Question" class="col-form-label">Question:</label>
            <input type="text" class="form-control" id="Question" name="question">
          </div>
          <div class="form-group">
            <label for="Answer:A" class="col-form-label">Answer:A</label>
            <span class="error">*</span>

            <input type="text" class="form-control" id="AnswerA" name="AnswerA">
          </div>

          <div class="form-group">
            <label for="Answer:B" class="col-form-label">Answer:B</label>
            <span class="error">*</span>
            <input type="text" class="form-control" id="AnswerB" name="AnswerB">
          </div>
          <div class="form-group">
            <label for="Answer:C" class="col-form-label">Answer:C</label>
            <span class="error">*</span>
            <input type="text" class="form-control" id="AnswerC" name="Answerc">
          </div>

          <div class="form-group">
            <label for="Answer:D" class="col-form-label">Answer:D</label>
            <span class="error">*</span>
            <input type="text" class="form-control" id="AnswerD" name="AnswerD">
          </div>

          <div class="form-group">
            <label for="Correct_Answer" class="col-form-label">Correct Answer</label>
            <span class="error">*</span>
            <input type="text" class="form-control" id="AnswerD" name="Correct_Answer">
          </div>

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class ="btn btn-secondary"name="submit">submit quiz</button>

      </div>

        </form>
      </div>
      
    </div>
  </div>
</div>
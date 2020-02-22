<!DOCTYPE html>
<?php $url = dirname($_SERVER['PHP_SELF']); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="<?php echo $url?>/style.css">

  <script>var url = "<?php echo $url?>"</script>

  <title>ORCA</title>
</head>
<body>

  <div class="page-container">
    <div class="all-squeaks-container">
      <h4> Ocean Rescue Conservancy Agency</h4>
      <main class="all-squeaks">

      </main>
    </div>

    <div class="new-squeak-form-container card">
      <form id="new-squeak-form">
      <h4>New Events</h4>
      <input type="text" name="username" placeholder="Event Title">
      <input type="text" name="message" placeholder="Event Details">
  
      
     
      <button class="waves-effect waves-light btn" placeholder="message">Submit</button>
      </form>
    </div>
  </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?php echo $url?>/script.js"></script>

</body>
</html>

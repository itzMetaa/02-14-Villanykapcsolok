<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My name is skrillex</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="wrapper">
  	<?php echo $comments; ?>
  	<form class="comment_form">
      <div>
        <label for="name">Név:</label>
      	<input type="text" name="nev" id="nev">
      </div>
      <div>
      	<label for="comment">Ár:</label>
      	<input type="number" name="ar" id="ar">
      </div>
      <div>
      	<label for="szin">Szín:</label>
      	<input type="text" name="szin" id="szin">
      </div>
      <div>
      	<label for="tipus">Keret:</label>
      	<input type="text" name="keret" id="keret">
      </div>
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
  	</form>
  </div>
</body>
</html>
<!-- Add JQuery -->
<script src="jquery-3.4.1.min.js"></script>
<script src="scripts.js"></script>
<?php 
$title="rsvp";
include "../included/header.php";
 ?>

<h1>rsvp</h1> 

<div class="container">
<form action="/included/insert.php" method="post">
Name: <input type="text" name="name" required><br>
Number of guests attending: <input type="number" name="number" required><br>
Dietary restrictions: <input type="text" name="food"><br>
<br>
<input type="submit">
</form>
</div>

<?php include "../included/footer.php"; ?>
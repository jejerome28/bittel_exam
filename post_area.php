<form action="index.php" method="post">
<textarea name="post_area" id="post_area" cols="50" rows="2" maxlength="150" placeholder="What happened today?">
</textarea>
<br>
<br>
<input type="submit" value="Post">
</form>

<?php 
    $get_post = $_POST['post_area'];


?>
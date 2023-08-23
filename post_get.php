<?php
echo $_POST['name'];
echo $_POST['age'];
?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Narain&age=30">Click </a>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<label for="name" aria-placeholder="name">name:</label>
<input type="text" name="name">
</div>
<div action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="age" aria-placeholder="age">age:</label>
<input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>
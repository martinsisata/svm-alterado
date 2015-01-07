<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
</head>
<body>
<form>
	<select>
		                 <?php for ($i=1; $i < 13 ; $i++) { 
                                        ?>
                                        <option><?php echo "$i"; ?></option>

                                        <?php
                                    } ?>
	</select>
</form>
</body>
</html>
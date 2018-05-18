<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
<script type="text/javascript" src="form.js"></script>
</head>
<body>
<h1><center>Insert Data </center></h1>

<form method="post" action="project1.php" id="form_reg">

Nom:    <input type="text" name="lastname" /><br><br>

Prénom: <input type="text" name="firstname" /><br><br>

Email: <input type="text" name="email" /><br><br>

Téléphone: <input type="text" name="phonenumber" /><br><br>

Code postal: <input type="text" name="zip_code" /><br><br>

Ville: <input type="text" name="city" /><br><br>

Message: <input type="text" name="message" /><br><br>

<input type="submit" value="Envoyer"/>

</form>
</body>
</html>

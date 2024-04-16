<!DOCTYPE html>
<html>
<head>
    <title>
        Tugas 1 HTML
    </title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="post">
@csrf
<label>First Name:</label><br><br>
<input type="text" name="firstname"><br><br>
<label>Last Name:</label><br><br>
<input type="text" name="lastname"><br><br>
<label>Gender:</label><br><br>
<input type="radio">Male<br>
<input type="radio">Female<br>
<input type="radio">Other<br><br>
<label>Nationality:</label><br><br>
<select name="Nationality">
    <option value="Indonesian">Indonesian</option>
    <option value="Indonesian">Singapore</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Indonesian">Australia</option>
</select><br><br>
<label>Languange Spoken:</label><br><br>
<input type="checkbox" name="bahasa">Bahasa Indonesia<br>
<input type="checkbox" name="bahasa">English<br>
<input type="checkbox" name="bahasa">Other<br><br>
<label>Bio:</label><br><br>
<textarea name="bio" rows="10" cols="30"></textarea><br>
<input type="submit" name="signup" value="Sign Up">
</form>
</html>

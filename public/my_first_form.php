<?php  

var_dump($_GET);
var_dump($_POST);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Forms</title>
	<meta charset "utf-8">
</head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Name">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password">
    </p>
    <p>
        <button type="submit" name="logInButton">Submit</button>
    </p>
</form>

<h2>Compose an Email</h2>
<form method="POST" action="/my_first_form.php">
	<p>
        <label for="to">To</label>
        <input id="to" name="to" type="text" placeholder="Name">
    </p>
    <p>
        <label for="from">From</label>
        <input id="from" name="from" type="text" placeholder="Name">
    </p>
    <p>
        <label for="subject">Subject</label>
        <input id="subject" name="subject" type="text" placeholder="Subject">
    </p>
    <textarea name="textArea" placeholder="Your message goes here."></textarea>
        <button type="submit" name="emailButton">Submit</button>
        <label for="mailing_list">
    <input type="checkbox" id="mailing_list" name="mailing_list"  value="yes" checked>
    <label for="mailing_list">Sign me up for the mailing list!</label>
</label>
    </p>
</form>
<h2>Multiple Choice Test</h2>
<form method="POST" action="/my_first_form.php">
	<p>What is the capital of Alaska?</p>
<label>
    <input type="radio" id="q1a" name="q1" value="Juneau">
    Juneau
</label>
<label>
    <input type="radio" id="q1b" name="q1" value="Fairbanks">
    Fairbanks
</label>
<label>
    <input type="radio" id="q1c" name="q1" value="Anchorage">
    Anchorage
</label>
<label>
    <input type="radio" id="q1d" name="q1" value="Barrow">
    Barrow
</label>

    <p>Where have you lived?</p>
<label><input type="checkbox" id="os1" name="os[]" value="Texas"> Texas</label>
<label><input type="checkbox" id="os2" name="os[]" value="Alaska"> Alaska</label>
<label><input type="checkbox" id="os3" name="os[]" value="Georgia"> Georgia</label>
<p>
<label for="os">What foods do you like? </label>
<select id="os" name="os[]" multiple>
    <option value="Asian">Asian</option>
    <option value="American">AmericanX</option>
    <option value="German">German</option>
</select>
        <button type="submit" name="QuizButton">Submit</button>
    </p>
</form>
<h2>Select Testing</h2>
<form method="POST" action="/my_first_form.php">
<label for="question">Are you human?: </label>
<select id="question" name="question">
    <option value="1">Yes</option>
    <option value="0">No</option>
</select>
<p>
        <button type="submit" name="TestButton">Submit</button>
    </p>
</form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Video Game Preferences </title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/record.css">
</head>
<body>
<div id="container">
<h1>Video Game Preference Database: Enter New Games</h1>

<p id="info"> What makes video games so special is that we can all experience them in different ways! Using this form, list the name of your favorite game, the genre that best fits the title, the sytem you play the game on (PC, Xbox, Playstation, Mobile, Arcade Cabinet, etc.) and let us know why it's your favorite game!</p>

<div id="games">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="gameform" method="post" action="" autocomplete="off">

  <label for="game">Game </label>
	<input type="text" name="game" id="game" maxlength="140" required>

  <label for="genre">Genre </label>
  <input type="text" name="genre" id="genre" maxlength="40" required>

  <label for="system">System</label>
	<input type="text" name="system" id="system" maxlength="40" required>

  <label for="why">Why is this game your favorite? </label>
	<input type="text" name="why" id="why" maxlength="999" required>

  <input type="submit" id="submit" value="Submit">

  <p class="middle"><a href="gamelog_update.php">View full log</a></p>

</form>
<!-- close the form -->
</div> <!-- close #socks -->
<!-- empty div -->
<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>

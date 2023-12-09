<?php
session_start();
$user_id=$_SESSION['user_id'];
?>
<html lang="en">

<head>
	<title>Save your Progress</title>

	<!-- link the CSS file here -->
	<link rel="stylesheet" href="css/game.css">
</head>

<body>
	<div class="main_container">

		<div class="container">
			<div class="header">
				<div class="wpm">
					<div class="header_text">WPM</div>
					<div class="curr_wpm">100</div>
				</div>
				<div class="cpm">
					<div class="header_text">CPM</div>
					<div class="curr_cpm">100</div>
				</div>
				<div class="errors">
					<div class="header_text">Errors</div>
					<div class="curr_errors">0</div>
				</div>
				<div class="timer">
					<div class="header_text">Time</div>
					<div class="curr_time">60s</div>
				</div>
				<div class="accuracy">
					<div class="header_text">% Accuracy</div>
					<div class="curr_accuracy">100</div>
				</div>
			</div>

			<div class="quote">
				Click on the area below to start.
			</div>
			<textarea class="input_area" placeholder="start typing here..." oninput="processCurrentText()"
				onfocus="startGame()">
</textarea>
			<button class="restart_btn" onclick="resetValues()">
				Restart
			</button>
		</div>
		<div class="container2">
			<form action="submission/save_score.php" method="post">
				<span class="att">WPM:</span> <input type="number" name="wpm" id="fwpm" readonly required><br>
				<span class="att">CPM:</span> <input type="number" name="cpm" id="fcpm" readonly required><br>
				<span class="att">Accuracy:</span><input type="number" name="accuracy" id="faccuracy" readonly required><br>
				<input type="submit" value="Save">
			</form>
			<div class="desc" style="color: red; text-align: justify; padding: 20px; text-shadow: 1px 1px 1px black;">
				Note: If you want to save the above result make sure to press save button if failed to do so the above result will not be saved.
			</div>
			<input type="submit" value="Dashboard" style="background-color: green; color: yellow;" onclick="document.location='dashboard.php'">
			<input type="reset" value="Logout" style="background-color: red; color: yellow;">
		</div>
	</div>

	<!-- link the JavaScript file here -->
	<script src="script/game.js">
	</script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>Frame</title>
</head>
<body>
	<style type="text/css">
		body {
			background-image: linear-gradient(to right, #F9FFC7, #F9FFE4);
		}
	</style>
	<div class="search">
		<span class="searchformspan">
			<form autocomplete="off" id="searchform" action="answerteams.php" method="post">
				<input style="margin-top: 100px;" placeholder="answer" autocomplete="off" id="searchid" type="text" name="game">
			</form>
		</span>
	</div>












<style type="text/css">

	body {
		background-color: #ffffff;
	}

	input:focus {
		outline: none;
	}

	#searchform {
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 8px;
	}

	#searchid {
		margin-top: -5px;
		border: solid;
		font-size: 22px;
		background-color: transparent;
		border-color: transparent;
		border-bottom-color: #000000;
		border-width: 1px;
		width: 400px;
		height: 25px;
	}
	#menu {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	background-color: #000000;
	border: solid;
	border-color: #000000;
    clip-path: circle(50px at 15px 14px);
	padding: 35px;
	transition: 0.5s;
	z-index: 50;
}

#menu:hover {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	border: solid;
	border-color: #ffffff;
	border-bottom-color: #000000;
    clip-path: circle(100%);
	background-color: #ffffff;
	padding: 33px;
	transition: 0.85s;
	z-index: 50;
}
.a1 {
	padding: 2px 7px;
	text-decoration: none;
	color: #000000;
	border: solid;
	border-color: transparent;
	background-color: transparent;
	border-radius: 7px;
	font-size: 25px;
	transition: 0.5s;
}

.a1:hover {
	padding: 2px 7px;
	text-decoration: none;
	color: #ffffff;
	border: solid;
	border-color: #000000;
	background-color: #000000;
	border-radius: 15px;
	font-size: 25px;
	transition: 0.6s;
}

#links {
	position: absolute;
	margin-left: 48.5%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
}

#menulogo {
	width: 30px;
	height: auto;
	position: absolute;
	top: 16px;
	left: 12px;
}
</style>

</body>
</html>
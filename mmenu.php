<!DOCTYPE HTML>
<html>

<head>
	<title>TECH-STORE</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/mmenu.css">
	<link rel="stylesheet" href="/css/gamburger.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/mmenu.js"></script>
	<scrript src="js/gamburger.js"></scrript>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav id="nav">
			<ul>
				<li><a href="main.php">Главная</a></li>
				<li><a href="siteselection.php">Акция</a></li>
				<li><a href="faq.php">Блог</a></li>
				<li><a href="index.php">Контакты</a></li>
				<li><a href="index.php">Доставка</a></li>
				<li><a href="index.php">Оплата</a></li>
				<li><a class="velcom-li">+375 29 170 12 39</a></li>
				<li><a class="mts-li">+375 29 860 13 49</a></li>
				<li><a class="location-li">Логойский тракт 22а</a></li>
				<li><a class="clock-li">Пн. - Пт.: 9 00 - 18 00</a></li>
			</ul>
			<span class="menu"><button class="cmn-toggle-switch cmn-toggle-switch__htx menu">
<span>toggle menu</span>
</button></span>
		</nav>


	<script>
	(function() {

"use strict";

var toggles = document.querySelectorAll(".cmn-toggle-switch");
 
for (var i = toggles.length - 1; i >= 0; i--) {
var toggle = toggles[i];
toggleHandler(toggle);
};
 
function toggleHandler(toggle) {
toggle.addEventListener( "click", function(e) {
e.preventDefault();
(this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
});
}
 
})();
	</script>
	</body>
</html>
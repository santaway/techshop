<!DOCTYPE HTML>
<html>

<head>
  <title>TECH-STORE</title>
  <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/demo.css">
		<link rel="stylesheet" type="text/css" href="css/cs-select.css">
		<link rel="stylesheet" type="text/css" href="css/cs-skin-elastic.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  
</head>

	<body>

				<select class="cs-select cs-skin-elastic">
					<option value="" disabled selected>Все варианты</option>
					<option value="france" data-class="flag-france">Франция</option>
					<option value="brazil" data-class="flag-brazil">Бразилия</option>
					<option value="argentina" data-class="flag-argentina">Аргентина</option>
					<option value="south-africa" data-class="flag-safrica">Южная Африка</option>
				</select>

		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>
	</body>
</html>
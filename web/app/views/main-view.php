<!DOCTYPE html>
<html>
	<head>

		<title> URL Shortener - Jeno Rigor </title>
		
		<meta charset="UTF-8">
		<meta name="description" content="URL Shortener">
		<meta name="keywords" content="URL Shortener">
		<meta name="author" content="Jeno Rigor">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
		<script type="text/javascript" src="/assets/js/angular.min.js"> </script>
		<script type="text/javascript" src="/assets/js/angular-route.min.js"> </script>
		<script type="text/javascript" src="/assets/js/angular-sanitize.min.js"></script>

		<style>

			body {
				background: #616161;  /* fallback for old browsers */
				background: -webkit-linear-gradient(to right, #9bc5c3, #616161);  /* Chrome 10-25, Safari 5.1-6 */
				background: linear-gradient(to right, #9bc5c3, #616161); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
				color : white;
			}

			.btn {

				border-radius: 0;

			}

			.btn:hover {
				background-color : #77a2a0;
				border-color: #77a2a0;
			}

			.btn-primary, .btn-primary.disabled, .btn-primary:disabled  {
				background-color: #95bbb9;
    			border-color: #95bbb9;
			}


			.top5 { margin-top:5px; }
			.top7 { margin-top:7px; }
			.top10 { margin-top:10px; }
			.top15 { margin-top:15px; }
			.top17 { margin-top:17px; }
			.top30 { margin-top:30px; }
			.topmid { margin-top:20%; }

			.alert {
				width : 100%;
			}

		</style>
	</head>
	
	
	<body ng-app="shortenurl">
		<div ng-view></div>
	</body>
	
	<script type="text/javascript" src="/assets/js/script.js" > </script>
	
</html>
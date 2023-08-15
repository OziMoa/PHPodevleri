<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ÜJ</title>

	<!-- Bootstrap css-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Kişisel CSS -->
    <link rel="stylesheet" href="style.css">


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<div class="p-3 bg-secondary mx-auto mt-5 w-50 ">
					<form action="app.php" method="post">
                        <h3 class="text-center text-light mt-5" >Bir Sayı Giriniz</h3>

                        <div id="cont">
                            <input type="number" name="number" class="mt-5 mb-2 rounded" id = "inp" placeholder="Sayı :">

                            <button type="submit" class="btn btn-danger mb-5" name="gönder" id = "send" >
                                Gönder
                            </button>
                        </div>

					</form>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>
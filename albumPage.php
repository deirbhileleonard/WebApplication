<!DOCTYPE html>
<html lang="en">
    <head>
	  <meta charset="utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	  <title>Album</title>
	  <!-- Favicon -->
	  <link rel="shortcut icon" type="image/png" href="assets/logo.png">
	  <!-- Bootstrap icons -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
	  <!-- Font Awesome icons -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://kit.fontawesome.com/15ec1140f7.js" crossorigin="anonymous"></script>
	  <!-- jQuery -->
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	  <!-- Bootstrap CSS and JavaScript -->
	  <link href="css/styles.css" rel="stylesheet">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
	</head>
    <body>
	
<!-- Navigation-->
<nav class="topnav sticky-top">
	  <h2 style="color: #FF0000; text-align: left;">Rockin' Roll</h2>
	  <h2 style="color: white; text-align: left;">.com</h2>
	<form class="d-flex input-group ms-auto" style="max-width: 300px;">
	  <input
		type="search"
		class="form-control rounded"
		placeholder="Search"
		aria-label="Search"
		aria-describedby="search-addon"
	  />
	  <span class="input-group-text border-0" id="search-addon">
		<i class="fas fa-search"></i>
	  </span>
	</form>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container px-4 px-lg-5">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
				<li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#!">About</a></li>
				<li class="nav-item dropdown" style="z-index: 999;">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#!">Albums</a></li>
						<li><a class="dropdown-item" href="#!">Merchandise</a></li>
					</ul>
				</li>

			</ul>
			<form class="d-flex" action="shoppingcart.html">
				<button class="btn btn-outline-light" type="submit">
					<i class="bi-cart-fill me-1"></i>
					Cart
					<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
				</button>
			</form>
		</div>
	</div>
</nav>

<!-- Chat -->
<div class="chat-icon">
  <i class="fas fa-comments"></i>
</div>

<div class="modal fade" id="chat-modal" tabindex="-1" role="dialog" aria-labelledby="chat-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chat-modal-label">Have A Question?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="form-group">
            <label for="question">Question</label>
            <textarea class="form-control" id="question" rows="3" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-md">Submit</button>
		<button type="reset" class="btn btn-default btn-md">Clear</button>
      </div>
    </div>
  </div>
</div>


<!-- Header-->
<header class="bg-dark py-5">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		<div style="text-align: center;">
			<div class="carousel-item active">
				<img src="assets/queen.jpg" width = "auto" height = "auto" alt="Queen">
			</div>
			<div class="carousel-item">
				<img src="assets/queen.jpg" width = "auto" height = "auto" alt="Elvis Presley">
			</div>
			<div class="carousel-item">
				<img src="assets/queen.jpg" width = "auto" height = "auto" alt="Logo">
			</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</header>

<!-- Album Products -->
<section class="py-5">
	<div class="container px-4 px-lg-5 mt-5">
		<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
			<!-- Product 1 -->
			<?php
				// Connect to the database
				$conn = mysqli_connect("localhost", "root", "", "music");

				// Check connection
				if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
				}

				// Query to retrieve data from the database
				$sql = "SELECT * FROM product";

				// Execute the query
				$result = mysqli_query($conn, $sql);

				// Check if any rows were returned
				if (mysqli_num_rows($result) > 0) {
				  // Loop through the rows and retrieve data
				  while($row = mysqli_fetch_assoc($result)) {
					$product_name = $row["albumTitle"];
					$price = $row["sellPrice"];
					$description = $row["description"];
					// Display the data in HTML
					?>
					<div class="col mb-5">
					  <div class="card h-100">
						<div class="card-body p-4">
						  <div class="text-center">
							<h5 class="fw-bolder"><?php echo $product_name; ?></h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
							  <div class="bi-star-fill"></div>
							  <div class="bi-star-fill"></div>
							  <div class="bi-star-fill"></div>
							  <div class="bi-star-fill"></div>
							  <div class="bi-star"></div>
							</div>
							£<?php echo $price; ?>
						  </div>
						</div>
						<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
						</div>
					  </div>
					</div>
					<?php
				  }
				} else {
				  echo "No products found.";
				}

				// Close the connection
				mysqli_close($conn);
				?>

			<!-- Product 2 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/thePickOfDestiny.jpg" alt="Tenaious D The Pick Of Destiny" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Tenacious D <br> The Pick Of Destiny</h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
							</div>
							£17.50
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 3 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/dreamboatAnnie.jpeg" alt="Heart Dream Boat Annie" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Heart <br> Dreamboat Annie </h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
							</div>
							£28.99
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 4 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/littleHeart.jpeg" alt="Heart Little Queen" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Heart <br> Little Queen </h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
							</div>
							£19.99
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 5 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/badAnimals.jpeg" alt="Heart Bad Animals" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Heart <br> Bad Animals </h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
							</div>
							£21.00
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 6 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/aNightAtTheOpera.jpeg" alt="Queen A Night At The Opera" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Queen <br> A Night At The Opera</h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
								<div class="bi-star"></div>
							</div>
							£12.75
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 7 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/allTheRightReasons.jpg" alt="NickelBack All The Right Reasons" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">NickelBack <br> All The Right Reasons </h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
								<div class="bi-star"></div>
								<div class="bi-star"></div>
							</div>
							£12.75
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
			<!-- Product 8 -->
			<div class="col mb-5">
				<div class="card h-100">
					<img class="card-img-top" src="assets/slipperyWhenWet.jpeg" alt="Bon Jovi Slippery When Wet" />
					<div class="card-body p-4">
						<div class="text-center">
							<h5 class="fw-bolder">Bon Jovi <br> Slippery When Wet</h5>
							<div class="d-flex justify-content-center small text-warning mb-2">
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star-fill"></div>
								<div class="bi-star"></div>
							</div>
							£13.50
						</div>
					</div>
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<!-- Footer-->
	<footer class="py-5 bg-dark">
		<div class="container"><p class="m-0 text-center text-white">Copyright &copy; Rockin' Roll 2023</p></div>
	</footer>


	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
  </body>
</html>
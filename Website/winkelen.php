<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="winkelen.css">

		<script src=".index.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Project-3</title>
	</head>
	<body>
    <?php
        include("nav.php")
    ?>
		<div id="slideshow"></div>
		<div class="wrapper">
			<div class="sidebar">
				<h2>XXL</h2>
				<ul>
					<aside>
						<form>
							<input type="range" id="price" name="price" min="0" max="200" value="0">
							<p class="prijs">Prijs: <span id="price-value"></span>
							</p>
						</form>
					</aside>
					<script>
						var slider = document.getElementById("price");
						var output = document.getElementById("price-value");
						output.innerHTML = slider.value;
						slider.oninput = function() {
							output.innerHTML = "$" + this.value;
						}
					</script>
					<div>
						<h3 class="css1">Soort</h3>
					</div>
					<div>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Proteïne</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Creatine</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Hulp Middelen</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Gewichten</label>
						<br>
					</div>
					<div>
						<h3 class="css1">Merk</h3>
					</div>
					<div>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Whey</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Body & Fit</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">XXL Nutrition</label>
						<br>
						<input class="css2" type="radio" id="age1" name="age" value="30">
						<label for="age1">Kruidvat</label>
						<br>
					</div>
                    <br>    
                    <div>
                        <input class="css3" type="submit" value="Opslaan">
                    </div>
					<div class="product1">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 1</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $5</p>
						</div>
					</div>
					<div class="product2">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 2</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $10</p>
						</div>
					</div>
					<div class="product3">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 3</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $35</p>
						</div>
					</div>
					<div class="product4">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 4</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $60</p>
						</div>
					</div>
					<div class="product5">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 5</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $80</p>
						</div>
					</div>
					<div class="product6">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 6</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $100</p>
						</div>
					</div>
					<div class="product7">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 7</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $130</p>
						</div>
					</div>
					<div class="product8">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 8</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $155</p>
						</div>
					</div>
					<div class="product9">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 9</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $170</p>
						</div>
					</div>
					<div class="product10">
						<div>
							<img class="foto1" src="product1.jpg" alt="Product 1">
							<h3 class="product1-hoofdtekst">Product 10</h3>
							<p class="product1-hoofdtekst">####</p>
							<p class="product1-hoofdtekst ">Prijs: $195</p>
						</div>
					</div>
	</body>
	</body>
</html>
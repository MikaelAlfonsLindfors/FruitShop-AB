<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navigation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($thispage == "Startsida") { echo "active"; } ?>">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item <?php if($thispage == "Produkter") { echo "active"; } ?>">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="greens/fruits.php">Fruits </a>
          <a class="dropdown-item" href="greens/vegetables.php">Vegetables (current)</a>
          <a class="dropdown-item" href="greens/berries.php">Berries</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">

<div class="row-sm-4, row-md-8">	
    <div class="col-sm-4">
			<img src="https://www.bellavitashop.co.uk/1462-large_default/cucumber-each.jpg">
			<h2>Cucumber</h2>
		</div>
    <div class="col-sm-4">
			<img src="https://www.azernews.az/media/2017/08/10/pomidor-dlya-volos.jpg">
			<h2>Tomato</h2>
		</div>
</div>
</div>
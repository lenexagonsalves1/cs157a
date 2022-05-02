
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bernadette’s Bakery</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Bernadette’s Bakery</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#" class="desktop-link">Cake</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="index.php">Cake</a></li>
              <li><a href="cookie.php">Cookie</a></li>
              <li><a href="#">CupCake</a></li>
              <li><a href="#">Pastry</a></li>
              <li><a href="bread.php">Bread</a></li>
            </ul>
          </li>
          <li><a href="#">About</a></li>
          <li><a href="#">Feedback</a></li>
          <li>
            <a href="#" class="desktop-link">Location</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="#">Manresa Bread</a></li>
              <li><a href="#">Boudin Bakery</a></li>
              <li><a href="#">Della Fattoria</a></li>
              <li><a href="#">Berkshire Mountain Bakery</a></li>
              <li><a href="#">Porto's</a></li>
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <div class="dummy-text">
<h1>List of Cookies</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th>Product</th>
      <th>Flavor</th>
      <th>Description</th>
      <th>Texture</th>
      <th>Allergens</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
   <?php
$conn = mysqli_connect("localhost", "root", "", "bakery");
$sql = "SELECT * FROM cookie";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_all();
    foreach ($row as $r) {
       
        echo "<tr>
        <td><img src='{$r[1]}' width = '10%' height= '5%'></td>
        <td>{$r[2]}</td>
        <td>{$r[3]}</td>
        <td>{$r[4]}</td>
        <td>{$r[5]}</td>
        <td>{$r[6]}</td>
        </tr>";
    }

   

} else {
    echo "No Result";
}

$conn->close();

?>
  </tbody>
</table>
  </div>

</body>
</html>
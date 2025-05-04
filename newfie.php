<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background: #333;
      color: #fff;
      padding: 10px 20px;
      text-align: center;
    }

    nav {
      margin: 10px 0;
      text-align: center;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #333;
    }

    nav a:hover {
      color: #007BFF;
    }

    main {
      padding: 20px;
      text-align: center;
    }

    footer {
      background: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <header>
    <h1>Welcome to My Home Page</h1>
  </header>
  <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </nav>
  <main>
    <h2>Hello, World!</h2>
    <p>This is a simple PHP home page template.</p>
    <?php
    echo "<p>Today's date is: " . date("Y-m-d") . "</p>";
    ?>
  </main>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
  </footer>
</body>

</html>
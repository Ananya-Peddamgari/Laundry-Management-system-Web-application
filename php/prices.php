<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prices</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url("../images/2.png");
      margin: 0;
      padding: 0;
      background-size: cover;
      background-repeat: no-repeat;
    }

    header {
      background-color: rgb(186, 12, 47);
      color: white;
      padding: 0px 0;
      text-align: center;
    }
    .navbar-custom {
      background-color: rgb(186, 12, 47);
    }

    .navbar-custom .navbar-brand {
      color: white;
      margin-right: 2rem;
    }

    .navbar-custom .navbar-nav .nav-link {
      color: white;
    }

    .navbar-custom .navbar-toggler-icon {
      background-color:  rgb(186, 12, 47);
    }

    .navbar-custom .dropdown-menu .dropdown-item:hover {
      background-color: rgb(186, 12, 47);
      color: azure;
    }

    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
    }

    caption {
      text-align: center;
      font-weight: bold;
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: rgb(186, 12, 47);
      color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tbody tr:hover {
      background-color: #f2f2f2;
    }

    td:first-child {
      text-align: center;
    }

    td:last-child {
      text-align: right;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <div class="container">
        <a class="navbar-brand" href="#">Nmims - Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../index.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prices.php"><i class="fas fa-info-circle"></i> Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php"><i class="fas fa-circle"></i> Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fas fa-address-book"></i> Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Login/Signup
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="singin.php"><i class="fas fa-user"></i> User</a>
                <a class="dropdown-item" href="admin_signin.php"><i class="fas fa-user-shield"></i> Admin</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container">
    <h1 class="mt-5 text-center">Prices</h1>

    <div class="table-responsive">
      <table class="table">
      <tr>
        <th>S.NO</th>
        <th>Services</th>
        <th>Unit</th>
        <th>Unit Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Cloth (Washing & Iron)</td>
        <td>Per Cloth</td>
        <td>₹ 15</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cloth (Only Iron)</td>
        <td>Per Cloth</td>
        <td>₹ 7</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Towel (Wash)</td>
        <td>Each</td>
        <td>₹ 10</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Napkin (Wash)</td>
        <td>Each</td>
        <td>₹ 8</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Bedsheet (Single)</td>
        <td>Each</td>
        <td>₹ 25</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Blanket (Wash)</td>
        <td>Each</td>
        <td>₹ 50</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Pillow Cover</td>
        <td>Each</td>
        <td>₹ 8</td>
      </tr>
      <tr>
        <td>
            </td>
            <td>Dry Cleaning</td>
            <td>Each- Blazer</td>
            <td>₹100</td>
            </tr>
            </tbody>
            </table>
  </div>
  </div>
            
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            </body>
            </html>
            
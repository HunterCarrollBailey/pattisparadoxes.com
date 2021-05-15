<?php 
$URI = $_SERVER['REQUEST_URI'];
$dashboard = "dashboard";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Patti's Paradoxes: An independent software solutions company providing the best web applications at the best time. ">
    <meta name="author" content="Patti's Paradoxes | Hunter Patti">
    <title>Patti's Paradoxes: Software Consulting and Development</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css/main.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/93e46e2d38.js" crossorigin="anonymous"></script>
  </head>
  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
    <div class="row container-fluid g-0 bg-primary text-light px-2">
      <div class="col-2">
        <h1 class="display-6">Patti's Paradoxes</h1>
      </div>
      <div class="col-9 bg-primary">
        
      </div>
      <div class="col-1">
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
            <strong>$USERNAME</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/login">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <body>
    <section id="mainContent">
      <div class="container-fluid row p-0">
        <section id="adminSidebar" class="col-2">
            <div class="d-flex flex-column p-3 text-white bg-dark" style="height: 94.3vh;">
              <h4 class="text-center">Administration</h6>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                  <li>
                  <a href="#" id="dashboardButton" class="nav-link text-white">Dashboard</a>
                  </li>
                  <li>
                  <a href="#" id="ordersButton" class="nav-link text-white">Orders</a>
                  </li>
                  <li>
                  <a href="#" id="productsButton" class="nav-link text-white">Products</a>
                  </li>
                  <li>
                  <a href="#" id="customersButton" class="nav-link text-white">Customers</a>
                  </li>
              </ul>
              <hr>
            </div>
        </section>
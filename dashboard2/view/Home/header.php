<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Administration 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
   <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  
      <div class="logo"><a href="index.php?action=get&controller=Home" class="simple-text logo-normal">
          ADMINISTRATEUR </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="http://localhost/material-dashboard-master/dashboard2/index.php?action=getAll&controller=Produit">
              <i class="material-icons">produits</i>
              <p>produits</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/material-dashboard-master/dashboard2/index.php?action=getAll&controller=Categorie">
              <i class="material-icons">categorie</i>
              <p>categorie</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/material-dashboard-master/dashboard2/index.php?action=getAll&controller=Commande">
              <i class="material-icons">commande</i>
              <p>commande</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/material-dashboard-master/dashboard2/index.php?action=getAll&controller=Lignecommande">
              <i class="material-icons">ligne de commande</i>
              <p>ligne de commande</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost/material-dashboard-master/dashboard2/index.php?action=getAll&controller=Client">
              <i class="material-icons">clients</i>
              <p>clients</p>
            </a>
          </li>
        
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          
        
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
            
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
               
                  <a class="dropdown-item" href="index.php?action=getAll&controller=Home">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
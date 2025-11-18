<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background-color: #f8f9fa;
    }
    header.navbar {
      background-color: #0d6efd;
      color: #fff;
    }
    .sidebar {
      width: 250px;
      min-height: 100vh;
      background-color: #343a40;
      color: white;
      position: fixed;
      top: 56px; /* header height */
      left: 0;
      padding-top: 20px;
    }
    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #495057;
      color: white;
    }
    main {
      margin-left: 250px;
      padding: 20px;
      margin-top: 56px; /* header height */
    }
    footer {
      background-color: #212529;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: auto;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="navbar navbar-dark fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-speedometer2"></i> My Dashboard</a>
      <div class="d-flex align-items-center">
        <span class="me-3">Hello, Admin</span>
        <a href="#" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </header>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#" class="active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
    <a href="{{route('users.list')}}"><i class="bi bi-person me-2"></i> Users</a>
    <a href="{{route('leads.list')}}"><i class="bi bi-basket me-2"></i> Leads</a>
   
  </div>

  <!-- Main Content -->
  <main>
    <div class="container-fluid">
      <h3 class="mb-4">Dashboard Overview</h3>
      <div class="row g-3">
        <div class="col-md-3">
          <div class="card text-center shadow-sm">
            <div class="card-body">
              <h5>Total Users</h5>
              <h2>1,250</h2>
            </div>
          </div>
        </div>
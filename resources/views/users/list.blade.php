<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    header {
      background-color: #0d6efd;
      color: white;
      padding: 15px 0;
    }
    footer {
      background-color: #212529;
      color: white;
      padding: 10px 0;
      margin-top: auto;
    }
    .login-card {
      max-width: 400px;
      margin: 60px auto;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="text-center">
    <h2>My Application</h2>{{ $login_name}}<a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown my-acc">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user"></i> {{ $login_name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <!--<li><a class="dropdown-item" href="#">Profile</a></li>-->
              
              <li><a class="dropdown-item" href="{{ route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
  </header>

  <!-- Login Form -->
  <div class="card login-card">
    <div class="card-body">
      <h4 class="card-title text-center mb-4">User</h4>
        <div class="float-end"><a class="btns" href="{{ route('usercreate')}}"><i class="lni lni-plus"></i>Add New</a></div>
    @if (session('success_msg'))
    <div style="color:green; font-size:20px;"> {{ session('success_msg') }}</div>
    @endif
    @if (session('error_msg'))
    <div style="color:red; font-size:20px;"> {{ session('error_msg') }}</div>
    @endif
     <table  class="table table-striped table-bordered" >
    <thead>
      <tr>
      <th>#</th>
        <th>Name</th>
        <th>Phone</th>
          <th>Status</th>
       
      </tr>
    </thead>
    <tbody>
    @php $i = 1; @endphp
    @forelse($records as $record)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $record->employ_name }}</td>
            <td>{{ $record->employ_phone }}
           </td>
            <!-- Status Column -->
            @if($record->status == '1') 
                <td><a href="#" class="btn btn-pending">Active</a></td>
            @elseif($record->status == '0')
                <td><a href="#" class="btn btn-pending">Inactive</a></td>
            @endif

            <!-- Actions Dropdown -->
          
        </tr>
        @php $i++; @endphp
    @empty
        <tr>
            <td colspan="4" class="text-center">There is no data found</td>
        </tr>
    @endforelse
</tbody>

<!-- Pagination Links -->
@if($records->hasPages())
    <tfoot>
        <tr>
            <td colspan="4">
               {{ $records->links('vendor.pagination.default') }}
            </td>
        </tr>
    </tfoot>
@endif


    </tbody>
  </table>

    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center">
    <p class="mb-0">&copy; 2025 My Application. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

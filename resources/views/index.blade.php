<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-outline-success " aria-current="page" href="{{ route('create') }}">Add</a>
          </li>
        </ul>
        <div class="d-flex">
          <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <i class="ri-shut-down-line align-middle mr-1 text-danger"></i> <span key="t-logout" class="btn btn-outline-primary">Logout</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <table class="table border mt-3">
      <tr>
        <th>Sr.No</th>
        <th>Category Name</th>
        <th>Operation </th>
      </tr>
      @php
      $key=0;
      @endphp
      @foreach ($categorys as $category )
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $category->categoryname }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('edit', ['id' => $category['id']]) }}">Edit</a>
          <a class="btn btn-danger" href="{{ route('delete', ['id' => $category['id']]) }}">delete</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>
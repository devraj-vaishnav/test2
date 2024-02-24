<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">  
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-outline-success" aria-current="page" href="{{ route('expensecreate') }}">Add</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
              <table class="table border mt-3">
                <tr>
                    <th>Sr.No</th>
                    <th> Expense name </th>
                    <th>Category Name</th>
                    <th>Operation </th>
                </tr>
                @php 
                $key=0;
                @endphp
                @foreach ($expenses as $expense )
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $expense->expense_name; }}</td>
                        <td>{{ $expense->category->categoryname;}}</td>
                      <td>
                    <a class="btn btn-primary" href="{{ route('expenseedit', ['id' => $expense['id']]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('expensedelete', ['id' => $expense['id']]) }}">Delete</a>
                      </td>
                    </tr>
                @endforeach
            </table>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
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
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class=" btn btn-outline-success " aria-current="page" href="{{ route('expenseindex') }}">List</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <div class="container">
        <form method="HEAD" action="{{ route('expenseupdate',$data->id) }}">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label"> Expense Name</label>
                    <input type="text" name="expense_name" value="{{ $data->expense_name }}" class="form-control" id="name" aria-describedby="emailHelp">
                    <span class="text-danger">{{ $errors->first('expense_name') }}</span>
                      </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="mb-3 mt-3">
                        <label  class="form-label"> Category Select</label>
                        <select class="form-select" name="category_id"> 
                          <option value=""> Select Category</option>
                          @foreach ($categorys as $category)
                              <option value="{{ $category->id }}" {{( $category->id == $data->category_id) ? 'selected' : '' }}>{{ $category->categoryname }}</option>   
                          @endforeach
                            {{-- {{( $expense->category->id == $data->category_id) ? 'selected' : '' }} --}}
                        </select>
                        <span class="text-danger">{{ $errors->first('Select Category') }}</span>
                    </div>
                </div>
            </div>
  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <title>Laravel Demo</title>
</head>
<body>
    <div class="container">
    <table class="table">
        <tr>
            <th>Sr No</th>
            <th>Client Name</th>
          <th>Name</th>
        </tr>
        @php
        $key=0;
        @endphp
    @foreach ($users as $user )
<tr>

    <td>{{ ++$key }}</td>
    <td>
        {{ $user->expense_name }}
    </td> 
    <td>
        {{ $user->categoryname}}
    </td>
   
</tr>
        
    @endforeach
</table>
</div>
</body>
</html>
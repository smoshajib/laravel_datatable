<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <div>
            <div class="col-1"></div>
            <div class="col-10">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function() {
    $('#example').DataTable({
        "pagingType": "full_numbers",
        // "scrollY":        "200px",
        // "scrollCollapse": true,
        // "paging":         false
    });
    
} );
    </script>
</body>
</html>
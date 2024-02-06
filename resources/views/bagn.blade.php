<!DOCTYPE html>
<html>
<head>
<title>Laravel 9 Pagination Example </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h3 align="center">Laravel 9 Pagination Example </h3> <br />
    <div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>ID </th>
                <th>Car Name </th>
                <th>lugge </th>
                <th>doors </th>
                <th>Postal Code </th>
                <th>Country </th>
                </tr>
            </thead>
            <tbody>
           @if(!empty($data) && $data->count())
               @foreach($data as $rs)
                <tr>
                    <td>{{ $rs->id }} </td>
                    <td>{{ $rs->Cartitle }} </td>
                    <td>{{ $rs->luggage }} </td>
                    <td>{{ $rs->doors}} </td>
                    <td>{{ $rs->price}} </td>

                </tr>
               @endforeach

           @else

                <tr>
                    <td colspan="6">There are no data. </td>
                </tr>
           @endif
        </tbody>
    </table>
</div>
</div>
</div>
<div class="row">{{ $data->links() }} </div>
</div>
</body>
</html>

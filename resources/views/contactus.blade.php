<!doctype html>
<html lang="en">
<head>
</head>
<body>
<div class="container" style=" width: 50vw;">

    <table class="table">
        <tr>
            <td>From: </td>
            <td>{{$firstname}}</td>
        </tr>
        <tr>
            <td>From: </td>
            <td>{{$lastname}}</td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>{{$email}}</td>
        </tr>


    </table>

    <div style="border: 1px solid #e5e5e5; border-radius: 4px; padding: 30px 20px ">{{$contact['message'] }}</div>
    {{-- <p>{{$contact['message']}}</p> --}}

</div>

</body>
</html>

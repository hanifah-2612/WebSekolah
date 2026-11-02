<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h3>View Customers</h3>
    <table border=1 bgcolor="pink">
        <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Addres</th>
            <th>Member_Status</th>
            <th><a href="{{route('customers.create')}}">+add Customers</a></th>
        </tr>
    <thead>
    <tbody>
    @foreach ($datacustomers as $v)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->customers_name}}</td>
        <td>{{$v->phone}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->address}}</td>
        <td>{{($v->member_status) ? 'member' : 'Non-member'}}</td>
        <td>
            <form action="{{ route('customers.destroy',$v->customers_id)}}" method="POST" style="display: inline">
            {{csrf_field() }}
            @method('DELETE')
            <a href="{{ route('customers.edit',$v->customers_id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Apakah anda yakin ingin memnghapus?')">Delete</button>
</form>
    </td>
</tr>
    @endforeach
    <tbody>
        <table>
</body>
</html>
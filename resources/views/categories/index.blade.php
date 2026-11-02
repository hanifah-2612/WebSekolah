<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h3>View Categories</h3>
    <table border=1 cellpadding=10 cellspacing=0>
        <tr>
            <th>No</th>
            <th>Categories Name</th>
            <th>Categories Description</th>
            <th><a href="{{route('categories.create')}}">+add categories</a></th>
        </tr>
    <thead>
    <tbody>
    @foreach ($datacategories as $v)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$v->categorie_name}}</td>
        <td>{{$v->description}}</td>
        <td>
            <form action="{{ route('categories.destroy',$v->categorie_id)}}" method="POST" style="display: inline">
            {{csrf_field() }}
            @method('DELETE')
            <a href="{{ route('categories.edit',$v->categorie_id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Apakah anda yakin ingin memnghapus?')">Delete</button>
</form>
    </td>
</tr>
    @endforeach
    <tbody>
        <table>
</body>
</html>
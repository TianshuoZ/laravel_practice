<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Tennis Ranking</title>
</head>
<body>
<td>New Item</td>
<table border="1" width="800px" align="center" >
    <th>Date</th>
    <th>Gender</th>
    <th>Type</th>
    <th>Ranking</th>
    <th>Player</th>
    <th>Country</th>
    <th>Age</th>
    <th>Points</th>
    <th>Tournaments</th>
    <th>Actions</th>

    @foreach($data as $value)
        <tr>
            <td>{{$value->date}}</td>
            <td>{{$value->gender}}</td>
            <td>{{$value->type}}</td>
            <td>{{$value->ranking}}</td>
            <td>{{$value->player}}</td>
            <td>{{$value->country}}</td>
            <td>{{$value->age}}</td>
            <td>{{$value->points}}</td>
            <td>{{$value->tournaments}}</td>
            <td>edit&delete</td>
        </tr>
    @endforeach
</table>
</body>
</html>

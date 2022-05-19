<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban No 6</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Nama
            </th>
            <th>
                Password
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($person as $p)
        <tr>
            <td>{{ $p['id']  }}</td>
            <td>{{ $p['name'] }}</td>
            <td>{{ $p['password'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

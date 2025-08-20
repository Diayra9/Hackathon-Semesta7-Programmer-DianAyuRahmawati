<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Admin Dashboard</h1>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Unit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($residents as $resident)
        <tr>
          <td>{{ $resident->name }}</td>
          <td>{{ $resident->photo }}</td>
          <td>{{ $resident->id_unit }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
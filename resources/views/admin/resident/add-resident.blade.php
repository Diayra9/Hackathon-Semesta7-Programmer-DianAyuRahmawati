<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <h1>Add Resident</h1>
        </div>
        <div>
            <h3>Fill Data</h3>
            <div>
                <div>
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div>
                        <label>Photo</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div>
                    <a href="{{ url('') }}" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create New Resident">
                </div>
            </div>
        </div>
    </form>
</body>
</html>
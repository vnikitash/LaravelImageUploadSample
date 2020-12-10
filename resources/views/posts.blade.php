<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Image uploader example</h3>

    <form action="/posts" method="POST" class="form-group" enctype="multipart/form-data">
        <input type="text" placeholder="Name" name="name" class="form-control"><br>
        <input type="file" class="form-control" name="file"><br>
        <input type="submit" value="Create" class="btn btn-success">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>CreatedAt</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['name']}}</td>
                    <td><img src="{{$post['image']}}" width="100" alt="image"/></td>
                    <td>{{$post['created_at']}}</td>
                </tr>
            @endforeach
        </tbody>


    </table>
</div>


</body>
</html>
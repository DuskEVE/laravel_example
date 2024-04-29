<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Basic form</h2>
        <div class="text-center">
            <a class="btn btn-success" href="./basic/create">add</a>
        </div>
        <table class="table align-middle text-center">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>name</th>
                    <th>amount</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($id))
                    <tr>
                        <td>{{$data['NO']}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['amount']}}</td>
                        <td>
                            <button class="btn btn-success">edit</button>
                            <button class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                @else
                    @foreach($datas as $data)

                    <tr>
                        <td>{{$data['NO']}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['amount']}}</td>
                        <td>
                            <button class="btn btn-success" onclick="location.href='./basic/edit/{{$data['id']}}'">edit</button>
                            <button class="btn btn-danger">delete</button>
                        </td>
                    </tr>

                    @endforeach
                @endif
                {{-- <tr>
                    <td>0</td>
                    <td>test</td>
                    <td>1</td>
                    <td>
                        <button class="btn btn-success">edit</button>
                        <button class="btn btn-danger">delete</button>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div>    
</body>
</html>
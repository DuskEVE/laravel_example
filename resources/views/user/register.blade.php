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
        <h2 class="text-center">User register</h2>

        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <form action="" method="POST" class="form w-50 p-3 bg-secondary text-light rounded">
                @csrf
                <label class="form-label fs-3" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <p class="text-danger fs-4">{{$message}}</p>
                @enderror
    
                <label class="form-label fs-3" for="amount">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password')
                    <p class="text-danger fs-4">{{$message}}</p>
                @enderror
    
                <label class="form-label fs-3" for="amount">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                @error('email')
                    <p class="text-danger fs-4">{{$message}}</p>
                @enderror
    
                <div class="text-center m-3">
                    <input type="submit" class="btn btn-success" value="Create">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>
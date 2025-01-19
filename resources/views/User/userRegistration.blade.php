<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/style.css" />


</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="userRegistration" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" value="{{old('name')}}" class="{{$errors->first('name')?'input-error':''}}">
<span class="error">@error('name'){{$message}}@enderror</span>

            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="{{old('email')}}"    class="{{$errors->first('email')?'input-error':''}}" >
                <span class="error">@error('email'){{$message}}@enderror</span>

            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"  class="{{$errors->first('password')?'input-error':''}}">
                <span class="error">@error('password'){{$message}}@enderror</span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Register</button>
                <a class="btn btn-secondary">Cancel</a>
            </div>
            <a href="login"  class="login-link">Login ?</a>
        </form>
    </div>
</body>

</html>
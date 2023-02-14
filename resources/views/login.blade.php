<!DOCTYPE html>

<head>
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('design-asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <section class="h-100" id="loginSection">
    <form action="login" class="login" id="logform" method="POST">
      @csrf
        <h4 class=" text-center text-primary"><span class="glyphicon glyphicon-user text-primary "></span>Login</h4>

        <label for="email" class="form-label text-primary" style="margin-left: 1px">Email:</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email" required>

        <label for="password" class="form-label text-primary" style="margin-left: 10px">Password:</label>
      <input type="password" class="form-control " placeholder="Enter password" name="password" required>
        <button type="submit" class=" btn btn-lg btn-primary text-center mt-3 "
             id="primary">Log in</button>
        <hr class="new1">

        <div style="display: flex; justify-content: space-between;">
          <p class="text-primary"><a href="{{ route('forget-password') }}">forgot password?</a></p>
          <p  class="text-success"><a href="register">sign up</a></p>
        </div>
          </div>
    </form>
    

     {{-- <h5 class=" text-primary" id="food">Food.<i class="text-dark">ie</i></h5> --}}
   
    </section>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

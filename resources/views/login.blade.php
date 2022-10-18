<!DOCTYPE html>

<head>
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('design-asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="col-md-10">
        <h5 class=" text-primary" id="food">Food.<i>ie</i></h5>
        {{-- <p>Get in touch</p> --}}
    </div>
    <form action="login" class="login form-horizontal" id="logform" method="POST">
      @csrf
        <h4 class=" text-center text-primary"><span class="glyphicon glyphicon-user text-primary "></span>Login</h4>

        <label for="email" class="form-label text-primary" style="margin-left: 10px">Email:</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email" required>

        <label for="password" class="form-label text-primary" style="margin-left: 10px">Password:</label>
      <input type="password" class="form-control " placeholder="Enter password" name="password" required>


        <button type="submit" class=" btn btn-lg btn-primary text-center mt-3"
            style="margin-left: 90px;width:250px">Log in</button>
        <hr class="new1">

        <button type="submit" class="btn btn-lg btn-success" id="green"
            style="margin-left: 100px;width:200px"> <a href="register"></a> create new account</button>

    </form>


    {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
      Logout
  </a>    
  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form> --}}
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/order-list.js') }}"></script>

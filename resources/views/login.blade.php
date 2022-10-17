<!DOCTYPE html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('design-asset/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-link">
    <div class="col-md-10">
        <h5 class=''>Login</h5>
    </div>
<form action="/login" class="was-validated" method="POST">
   <h4><span class="glyphicon glyphicon-user text-center" style="margin-left: 80px"></span>Login</h4>   
    <div class="mb-3 mt-3">
      <label for="email" class="form-label"  style="margin-left: 10px">Email:</label>
      <input type="text" class="form-control"   placeholder="Enter email" name="email" required>
      
    </div>
    <div class="mb-3">
      <label for="password" class="form-label" style="margin-left: 10px">Password:</label>
      <input type="password" class="form-control "  placeholder="Enter password" name="password" required>
    </div>
  
      <button type="submit" class=" btn btn-lg btn-info text-center" style="margin-left: 100px;width:250px">Submit</button>
        <hr class="text-dark">

        <button type="submit" class="btn btn-lg btn-success" style="margin-left: 100px;width:200px">create new account</button>
  
  </form>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('js/order-list.js') }}"></script>

<html>
<head>
<title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action='logs' method='post' enctype="multipart/form-data" target='_self'>
    <label for='email'>Email</label><br>
    <input type='email' id='email' name='email' placehoder='email@email.com'>
    {{@csrf_field()}}<br>
    <label for='pwd'>Password</label><br>
    <input type='password' id='pwd' name='pwd' placehoder='password'><br>
    <input type='submit' name='login' value='login'><br>
    </form>
</body>
</html>
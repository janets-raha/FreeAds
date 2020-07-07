<html>
<head>
<title>Register</title>
</head>
<body>
    <h1>Create account</h1>
    <form action='usercontroller' method='post' enctype="multipart/form-data" target='_self'>
    <label for='firstname'>First name</label><br>
    <input type='text' id='firstname' name='firstname' placehoder='first name'><br>
    <label for='lastname'>Last name</label><br>
    <input type='text' id='lastname' name='lastname' placehoder='last name'><br>
    <label for='pseudo'>Pseudo</label><br>
    <input type='text' id='pseudo' name='pseudo' placehoder='pseudo'><br>
    <label for='email'>Email</label><br>
    <input type='email' id='email' name='email' placehoder='email@email.com'><br>
    <label for='pwd'>Password</label><br>
    <input type='password' id='pwd' name='pwd' placehoder='password'><br>
    <label for='pwd_conf'>Password confirmation</label><br>
    <input type='password' id='pwd_conf' name='pwd_conf' placehoder='password confirmation'><br>
    <label for="phone">Enter your phone number</label><br>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"> <br>
    <label for='lastname'>Address</label><br>
    <input type='text' id='address' name='address' placehoder='address'><br>
    <label for='postalcode'>Postal code</label><br>
    <input type='text' pattern="[0-9]{5}" name="postalcode"><br>
    <label for='city'>City</label><br>
    <input type='text' id='city' name='city' placehoder='city'><br>
    <input type="hidden" name="status_seller" value="1">
    <input type='submit' name='submit' value='submit'><br>
    </form>
</body>
</html>
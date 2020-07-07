<html>
<head>
<title>Create product</title>
</head>
<body>
    <h1>Product for sale</h1>
    <form action='productcontroller' method='post' enctype="multipart/form-data" target='_self'>
    {{@csrf_field()}}<br>
    <label for='name'>Name of product</label><br>
    <input type='text' id='name' name='name' placehoder='my_product'><br>
    <label for="category">Choose a category:</label>
    <select id="category" name="category">
        <option value="books">books</option>
        <option value="electronics">electronics</option>
        <option value="toys">toys</option>
        <option value="furniture">furniture</option>
    </select><br>
    <label for='description'>Description</label><br>
    <textarea id='description' name="description" rows="10" cols="30"></textarea><br><br>
    <label for="image">Add a photo</label>
    <input type="file" id="image" name="image" ><br>
    <label for="condition">Condition</label>
    <select id="condition" name="condition">
        <option value="new">new</option>
        <option value="like_new">like new</option>
        <option value="excellent">excellent</option>
        <option value="good">good</option>
        <option value="fair">fair</option>
        <option value="salvage">salvage</option>
    </select><br>
    <label for='postalcode'>Postal code</label><br>
    <input type='text' pattern="[0-9]{5}" name="postalcode"><br>
    <label for="price">Price</label><br>
    <input type='number' id='price' name='price' placehoder='price'><br>
    <input type='submit' name='submit' value='submit'><br>
    </form>
</body>
</html>
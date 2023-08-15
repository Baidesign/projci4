<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is just trial</h1>
    <form action="/admin/blog/new" method="post">
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
            
        </div>
        <div>
            <label for="description">Description</label>
             <textarea name="description" id="" cols="30" rows="10"></textarea>
            
        </div>
        <div>
            <input type="submit" value="Create">
        </div>

    </form>
</body>
</html>
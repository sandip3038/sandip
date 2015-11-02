<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form method="post" action="uploads.php" enctype="multipart/form-data">
        <p>Photo:</p>
        <input type="file" name="Filename"> 
        <p>Description</p>
        <textarea rows="10" cols="35" name="Description"></textarea>
        <br/>
        <input TYPE="submit" name="upload" value="Add"/>
    </form>


</body>
</html>
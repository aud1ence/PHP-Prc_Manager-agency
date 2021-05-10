<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them nhan vien</title>
</head>
<body>
<form action="behavior/init.php" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first"></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last"></td>
        </tr>
        <tr>
            <th>Birth day</th>
            <td><input type="text" name="date"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="add"></td>
        </tr>
        <tr>
            <th>Job Position</th>
            <td><input type="text" name="position"></td>
        </tr>
        <tr>
            <th></th>
            <td><button type="submit">Add</button></td>
        </tr>
        <td>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="imgToUpload">
                <input type="submit" value="Upload image" name="submit">
            </form>
        </td>
    </table>
</form>

</body>
</html>

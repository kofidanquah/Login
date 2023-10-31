<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
        background-image: url("background\ image.jfif");
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
    }
    
    form {
        background-color: rgba(255, 255, 255, 0.5);
        width: 240px;
        padding: 20px;
        margin: auto;
        border-radius: 20px;
        height: 50vh;
    }
    
    h2 {
        text-align: center;
        font-size: 30px;
        margin-bottom: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    
    input {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

    <title>login</title>
</head>
<body>
    <form method="post" action=welcome.php>
        <h2>Log in</h2>
        username<br><input type="text" name="name"><br>
        password<br><input type="password" name="password"><br><br>
        <input type="submit" value="Log in"><br>
    </form>
</body>
</html>


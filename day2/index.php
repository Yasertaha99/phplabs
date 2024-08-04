<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singup</title>
</head>
<body>
    <form action="admin.php"  method="post">
        <label for="fname">f name:</label>
        <input type="text" id="fname" name="fname" required>
        <br>
        <label for="lname">l name:</label>
        <input type="text" id="lname" name="lname" required>
        <br>
        <label for="address">Your adress: </label>
        <textarea id="address" name="address" rows="1"></textarea>
        <br>
        <label for="country">Choose Your country:</label>
        <br>
        <select name="country" id="country">
            <option value="egypt">egypt</option>
            <option value="Sarabia">Sarabia</option>
            <option value="USA">USA</option>
            <option value="Phastene">Phastene</option>
        </select><br><br>
        <label >gender :</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">female</label><br>
        <br>
        <label >skills</label>
        <input type="checkbox" id="php" name="skills[]" value="php">
        <label for="php">php</label>
        <input type="checkbox" id="mysql" name="skills[]" value="mysql">
        <label for="mysql"> mysql</label><br>
        <input type="checkbox" id="html" name="skills[]" value="html">
        <label for="html"> html</label>
        <input type="checkbox" id="css" name="skills[]" value="css">
        <label for="css"> css</label>
        <input type="checkbox" id="js" name="skills[]" value="JS">
        <label for="js"> JS</label><br>
        <label for="username">username:</label>
        <input type="username" id="username" name="username" required>
        <br>
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="department">department:</label>
        <input type="department" id="department" name="department" required>
        <br>
        <label for="code">insert this code     <br>     code: 1op3e44r  <br></label>
        <input type="code" id="code" name="code" required>
        <br>
        <input type="submit" value="singup"> <span>   </span><input type="reset"
            value="reset">
    </form>

    
</body>

</html>
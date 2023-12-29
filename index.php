<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <table border = "2" align = "center">
       <tr><th> <h1 align = "center">PERSONAL INFORMATION FORM</h1></th></tr>
        <tr>
            <th>
            <Form action = "submit.php" method = "post">
          <label >USERNAME :</label>
          <input type = "email" name = "username" required placeholder = "Enter email address..."><br>
          <label >PASSWORD :</label>
          <input type = "password" name = "password" required placeholder = "Enter password..."><br>
          <label >FIRST NAME :</label>
          <input type = "text" name = "fname" required placeholder = "Enter your fist name..."><br>
          <label >LAST NAME :</label>
          <input type = "text" name = "lname" required placeholder = "Enter your last name..."><br>
          <label >MIDDLE NAME :</label>
          <input type = "text" name = "middlename" required placeholder = "Enter your middle name..."><br>
          <label >BIRTH DATE :</label>
          <input type = "date" name = "birthdate" required placeholder = "Enter your birthdate..."><br>
          <label >BIRTH PALCE :</label>
          <input type = "text" name = "birthplace" required placeholder = "Enter your birth place..."><br>
          <label >ADDRESS :</label>
          <input type = "text" name = "address" required placeholder = "Enter your address..."><br>
          <label >AGE :</label>
          <input type = "text" name = "age" required placeholder = "Enter your age..."><br>
          <label >COURSE :</label>
          <input type = "text" name = "course" required placeholder = "Enter your course..."><br>
          <label >YEAR LEVEL</label>
          <input type = "text" name = "year" required placeholder = "Enter your year level..."><br>

          <button type = "submit" >Save</button>
        </Form>
            </th>
        </tr>
    </table>
</body>
</html>
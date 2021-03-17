<?php include("../../../header.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="form.css">
</head>
<body style="background:green;">
    <h1>Feedback Form</h1>
    <H3>Please fill the following form and help us to improve our services.</H3>
    <form action="https://localhost/resumeGenerator/Cv_ without frame/Footer_and_header/top-menu/feedback/CreateDatabase.php" method="post">
    Name:
    <br>
    <input type="text" name="name" required >
    <br>
    <br>
    Gender:
    <br>
    Male
    <input type="radio" name="gender" value="male" required>
    Female
    <input type="radio" name="gender" value="female" required>
    <br>
    <br>
    Email:
    <br>
    <input type="email" name="email" required>
    <BR>
        <br>
    Rate US:
    <select name="rate" id="rt" required>
        <option value="one">1</option>
        <option value="two">2</option>
        <option value="three">3</option>
        <option value="four">4</option>
        <option value="five">5</option>
    </select>
    <br>
    <br>
    Your Feedback:
    <br>
    <textarea name="comments" id="comments" cols="30" rows="10" required></textarea>
    <br>
    <br>
    <input type="checkbox" name="checkbox" required>I agree that my name and email will be visible to others<br>
    <input type="submit" value="Submit" style="width: 20%; background-color: black; color: white; border-radius: 20%; margin-top: 2%;" required>
    </form>

</body>
<?php include("../../../footer.php");?>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cylinders</title>
</head>
<body>
<div style="text-align: center; text-decoration: double underline" >
    <h1>YOU NEED VALUES OF TWO CYLINDERS</h1>
    <p>We need values of both cylinders</p>
</div>
<div style="display: flex">
    <div style="width: 50%; text-align: center ">
        <h1>Cylinder One</h1>
        <p>Were calculating the volume of your cylinder. <br> We need its parameters as indicated below.</p>
        <form action="cylinders_handler.php">
            <input required name="radius_1" placeholder="Enter the Radius of cylinder one" type="text"> <br><br>
            <input required name="height_1" placeholder="Enter the height of cylinder one" type="text"><br><br>
            <input value="Compute_1" type="submit">
        </form>

    </div>
    <div style="width: 50%; text-align: center ">
        <h1>Cylinder Two</h1>
        <p>Were calculating the volume of your cylinder. <br> We need its parameters as indicated below.</p>
        <form name="input" action="cylinders_handler.php">
            <input required name="radius_2" placeholder="Enter the Radius of cylinder two" type="text"><br><br>
            <input required name="height_2" placeholder="Enter the Height of cylinder two" type="text"><br><br>
            <input name="compute_2" placeholder="Calculate" type="submit">
        </form>
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<style>
    #lblEmail
    {
        font-size: 1.5em;
    }
    #lblPassword
    {
        font-size: 1.5em;
    }
    .container
    {
        width: 80%;
    }
    #buttonContainer{
        margin-top: 1em;
        border: 1px solid red;
    }
    .btn{
        margin-right: 1em;
    }
    .btn-signup:hover
    {
        background-color: #E2E2E2;
    }


</style>
<body>
    <div class="container">
        <form action="" method="post"> 
        <div>
            <h2 id="lblEmail">Email :</h2>
            <input type="text" name="email" class="form-control">
        </div>
        <div>
            <h2 id="lblPassword">Password :</h2>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="" id="buttonContainer">
            <button class="btn btn-primary">Log-In</button>
            <button class="btn btn-light btn-signup">Sign-Up</button>
        </div>
        </form>
    </div>
</body>
</html>
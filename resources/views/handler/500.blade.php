<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Server Error</title>
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .content {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <img src="{{url('handler/pageNotFound.jpg')}}" width="300px"> 
            <h1 style="margin-left:50px;"><b>Internal Server Error</b></h1>
        </div>
    </div>
</body>
</html>
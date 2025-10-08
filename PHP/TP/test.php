<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            background:  #2c3e50;

        }
        .content{
      
            width:300px;
            height:300px;
            background: black;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap:10px
        }

        .content  div{
            width: 100px;
            height:100px;
            background-color:gray;
            border-radius: 15px;
        }

    </style>
</head>
<body>
    <div class='content'>
        <div></div>
        <div></div>
        <div></div>

    </div>
    
</body>
</html>
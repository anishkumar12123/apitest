<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
</head>
<body>
    <button id="btnButton">Get Data</button>
    <div id="output"></div>


    <script>
      $(document).ready(function(){
        $("#btnButton").click(function(){
            $.get('http://127.0.0.1:8000/api/students',
            // $.get('https://fakestoreapi.com/users',
             (data) => {
                    $('#output').html('<pre>' + JSON.stringify(data, null,1) + '</pre>');
            });
        })
      })
    </script>
</body>
</html>

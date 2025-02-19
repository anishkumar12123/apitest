<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table-container {
            width: 90%;
            margin: auto;
            text-align: center;
        }
        h2 {
            background: linear-gradient(to right, red, orange);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h2>Student List</h2>
        <button id="btnButton">Get Data</button>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address </th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody id="output">
            </tbody>
        </table>
    </div>

    <script>
      $(document).ready(function(){
        $("#btnButton").click(function(){
            $.get('http://127.0.0.1:8000/api/students', function(data) {
                let output = "";
                data.forEach(student => {
                    output += `
                        <tr>
                            <td>${student.name}</td>
                            <td>${student.address}</td>
                            <td>${student.email}</td>
                            <td>${student.phone}</td>
                        </tr>
                    `;
                });
                $("#output").html(output);
            });
        });
      });
    </script>

</body>
</html>

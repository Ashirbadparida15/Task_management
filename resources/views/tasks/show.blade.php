<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

       

        th:first-child, td:first-child {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>Task Details</h1></center>
        <table>
            <tr>
                <th>Title</th>
                <td>{{ $task->title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $task->description ?: 'N/A' }}</td>
            </tr>
            <tr>
                <th>Due Date</th>
                <td>{{ $task->due_date ?: 'N/A' }}</td>
            </tr>
        </table>
    </div>
</body>
</html>

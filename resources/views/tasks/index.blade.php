<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a.button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 10px;
        }
        a.button:hover {
            background-color: #45a049;
        }
        form.inline-form {
            display: inline;
        }
        button.delete-button {
            background-color: #f44336;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button.delete-button:hover {
            background-color: #da190b;
        }
        .create-button{
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 10px;
            margin-left:80%;
        }
        .card {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            align-items: center;
            
        }
        .form label {
            margin-left: 10px;
        }
        .form input[type="date"],
        .form button {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form button:hover {
            background-color: #45a049;
        }

        .filter {
            margin-top: 20px;
        }

        .filter label {
            display: block;
            margin-bottom: 5px;
        }

        .filter input[type="date"],
        .filter button {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
        .filter button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .filter button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Task List</h1>
    <div class="card">
    <a href="{{ route('tasks.create') }}" class="create-button">Create New Task</a>
    <form class="filter"action="{{ route('tasks.index') }}" method="GET">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date">
        
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date">
        
        <button type="submit">Filter</button>
    </form>

    </div>
    
    @if ($tasks->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Sl No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @php $serial = 1; @endphp 
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}" class="button">
                                Edit
                            </a>
                            <a href="{{ route('tasks.show', $task) }}" class="button">
                                View
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this task?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tasks found.</p>
    @endif
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Subscription</title>
</head>
<body>
    <h1>Add Subscription</h1>
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('subscriptions.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
    
        <label for="price">Price:</label>
        <input type="number" name="price" required>
        <br>
    
        <label for="duration_in_days">Duration (in days):</label>
        <input type="number" name="duration_in_days" required>
        <br>
    
        <label for="can_do_exercises">Can do exercises:</label>
        <select name="can_do_exercises" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <br>
    
        <label for="can_view_lectures">Can view lectures:</label>
        <select name="can_view_lectures" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <br>
    
        <button type="submit">Add Subscription</button>
    </form>
    
</body>
</html>

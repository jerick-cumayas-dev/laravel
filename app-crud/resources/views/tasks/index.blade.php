<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
</head>
<body>
    <div class="kanban">
        <div class="add-task-container">
            <form method = "post" action="{{route('task.create')}}">
                @csrf 
                @method('post')
                <label for="">Title</label>
                <input type="text" name = "title" placeholder = "input task">
                <label for="">Description</label>
                <input type="text" name = "description" placeholder = "description">
                <label for="">Start</label>
                <input type="text" name = "start" placeholder = "Input start date">
                <label for="">Due</label>
                <input type="text" name = "due" placeholder = "Input due date">
                <label for="">Status</label>
                <input type="text" name ="status" placeholder = "Input status">

                <input type="submit" value = "Add task">
            </form>
            
        </div>
        <h1>Tasks</h1>
        <div class="tasks-container">
            @foreach($tasks as $task)
            <div class="task" style = "border-style: solid;">
                <p>Title: {{$task->title}}</p>
                <p>Description: {{$task->description}}</p>
                <p>Start: {{$task->start}}</p>
                <p>Due: {{$task->due}}</p>
                <p>Status: {{$task->status}}</p>
            </div>
            @endforeach
        </div>
        <div class="progress-container">

        </div>
        <div class="done-container">

        </div>
    </div>
</body>
</html>
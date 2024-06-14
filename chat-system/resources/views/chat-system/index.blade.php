<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat System</title>
</head>
<body>
    <div>
        <div class="message-container">
            @foreach ($chats as $chat)
                <p>{{$chat->message}}</p>
            @endforeach
        </div>
        <form method = "post" action="{{ route('chat.send') }}">
            @csrf 
            @method('post')
            <input type="text" name = "message" placeholder = "Text message">
            <input type="submit" value = "Send">
        </form>
    </div>
</body>
</html>
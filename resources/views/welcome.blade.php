<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

<h>Chat Window</h>


<ul>
    @foreach($messages as $message)

            <li>{{$message->messagebody}}</li>

    @endforeach
</ul>


Enter message below:

<form action="/message" method="POST">
    Message:<br>

    <input type="text" name="message"><br>

    <button type="submit" value="Send">Send</button>

    {{csrf_field()}}
</form>

</body>
</html>
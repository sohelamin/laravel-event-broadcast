<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>

        <h2>User's List</h2>
        <ul id="user-list">
        </ul>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.6/socket.io.min.js"></script>
        <script>
            var socket = io('http://localhost:3000');

            socket.on("test-channel:App\\Events\\UserRegisteredEvent", function(message){
                console.log(message);

                // Appending user to user's list
                var ul = document.getElementById("user-list");
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(message.user));
                ul.appendChild(li);

            });
        </script>
    </body>
</html>

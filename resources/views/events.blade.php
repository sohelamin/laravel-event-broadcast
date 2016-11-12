@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer-script')
    <script>
        Echo.channel('test-channel')
            .listen('UserRegisteredEvent', function (e) {
                console.log(e);
            });

            console.log(Echo);
        // var socket = io('http://localhost:3000');

        // socket.on("test-channel:App\\Events\\UserRegisteredEvent", function(message){
        //     console.log(message);

        //     // Appending user to user's list
        //     var ul = document.getElementById("user-list");
        //     var li = document.createElement("li");
        //     li.appendChild(document.createTextNode(message.user));
        //     ul.appendChild(li);

        // });
    </script>
@endsection

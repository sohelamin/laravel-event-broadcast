# Laravel Event Broadcasting Example
Laravel event broadcasting with Node.js, Redis &amp; Socket.io

### Requirements
    Node.js
    Redis
    Socket.io

## Installation

1. Clone the the repository
    ```
    git clone https://github.com/sohelamin/laravel-event-broadcast.git
    ```

2. Navigate to your project directory and run
    ```
    composer install
    npm install
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    php artisan key:generate
    ```

## Usage

1. Start your project
    ```
    php artisan serve
    ```

2. Run socket.io using node
    ```
    node socket.js
    ```

3. Broadcast your event via ```http://localhost:8000/broadcast``` & listen via ```http://localhost:8000/listen```

### Via Docker

1. Start the docker's containers
    ```
    docker-compose up -d
    ```

1. Migrate tables & Listen the queues
    ```
    docker exec -it laraveleventbroadcast_app_1 bash
    cd /var/www
    php artisan migrate
    php artisan queue:listen
    ```

3. Run node
    ```
    docker exec -it laraveleventbroadcast_app_1 bash
    cd /var/www
    node socket.js
    ```

3. Broadcast your event via ```http://localhost/broadcast``` & listen via ```http://localhost/listen```

##Author

[Sohel Amin](http://www.sohelamin.com)

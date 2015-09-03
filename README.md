# Laravel Event Broadcasting Example
Laravel event broadcasting with NodeJS, Redis &amp; Socket.io

### Requirements
    NodeJS
    Redis
    Socket.io
    
## Installation

1. Clone the source from github into your desire directory
    ```
    git clone https://github.com/sohelamin/laravel-event-broadcast.git
    ```

2. Navigate to your project directory and run
    ```
    composer install
    ```

3. Install npm and relevant packages
    ```
    npm install
	npm install ioredis
	npm install socket.io    
    ```

## Usage

1. Start your project
    ```
	php artisan serve
    ```

2. Run redis server
    ```
	redis-server
    ```
    Note: If you've not installed redis server yet then run **apt-get install redis-server** or follow [this link](http://redis.io/download).
3. Run socket.io file via node
    ```
	node socket.js
    ```

4. Finally you can fire or broadcast event via this url **http://localhost:8000/broadcast/** and can listen event via **http://localhost:8000/listen/**    

##Author

[Sohel Amin](http://www.sohelamin.com)

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
    composer require predis/predis
    composer update
    ```

3. Install npm and relevent packages
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
	node socket.js
    ```

3. Run socket.io file via node
    ```
	node socket.js
    ```

4. Finally you can fire or broadcast event via the url **http://localhost:8000/broadcast/** and can listen event via **http://localhost:8000/broadcast**    

##Author

<a href="http://www.sohelamin.com">Sohel Amin</a>
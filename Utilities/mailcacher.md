## PHPMyAdmin

1. Starting the container

    ```bash
    cp .env.dist .env
    docker-compose -f docker-compose.mailcatcher.yaml up -d
    ```
2. Add `mailcatcher.aqarmap.local` to the hosts files
    ```
    sudo nano /etc/hosts
    # Add the following to the hosts file
    # 127.0.0.1 mailcatcher.aqarmap.local
    ```
3. open http://mailcatcher.aqarmap.local on your browser

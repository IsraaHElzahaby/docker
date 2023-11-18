### Traefik (Proxy Reverse) 

### How to run the containers
- Copy .env.dist to .env
- Edit .env file and change the variables value to your own values according to this section [Environment Variables
](#environment-variables).
- Run ```docker-compose -f docker-compose.traefik.yaml up -d```

### Environment Variables:
#### ```RABBITMQ_VIRTUAL_HOST```
This variable specifies the used domain for *RRabbitMQ* application. For local usage, it is recommended to use
```rabbitmq.local```.

#### ```NETWORK_NAME```
This variable specifies the used network between different loaded services.
For local usage, it is recommended to use ```aqarmap-network```

LAMP using the official images:  
 - PHP 5.6 + Apache 2.4
 - MySQL 5.7

Start containers with `docker-compose up` and remove with `docker-compose down`.  
Before running docker-composeup edit your paths and ip in the .env file. 

## PhpStorm settings for Xdebug 

### DBGp Proxy 
Go to File > Settings > Languages & Frameworks > PHP > Debug > DBGp Proxy
Set the following:  
- IDE Key: PHPSTORM same as XDEBUG_IDE_KEY in the .env file 
- Host: your IP address same as HOST_IP in the .env file 
- Port: 9001, same as xdebug.remote_port defined in the docker/php-apache/php-ini-overrides.ini 

### Debug 
Go to File > Settings > Languages & Frameworks > PHP > Debug 
- In the Xdebug section set the Debug port to 9001, same as xdebug.remote_port 

### Docker 
Go to File > Settings > Build, Execution, Deployment > Docker 
- Add + a new Docker connection 
- Set the connection to Docker
See the [PhpStorm Help](https://www.jetbrains.com/help/phpstorm/docker-connection-settings.html) for platform specific settings. 

### Servers 
Go to File > Settings > Languages & Frameworks > PHP > Servers 
- Check Use path mappings 
- Map local project path to `/src` mountpoint in the Docker container

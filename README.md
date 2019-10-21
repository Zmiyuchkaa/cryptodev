# Prerequisites
install docker

# project setup

clone the project

cd into project dir

build a custom image with "docker build -t php-apache ."


run the container with "docker run -p 80:80 -v absolute_path_to_src:/var/www/html php-apache"


navigate to http://localhost

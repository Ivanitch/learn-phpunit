sudo systemctl stop nginx
echo 'Nginx stopped'

sudo systemctl stop mysql
echo 'Mysql stopped'

docker stop $(docker ps -qa)
make restart
make server

```
git clone https://github.com/liaoshengping/dnmp.git
cd dnmp
cp .env.pro .env   #如果是开发环境: cp .env.dev .env  还要 mkdir /home/mysql/conf/ 还要 cp -r mysql.cnf /home/mysql/conf/mysql.cnf
docker-compose up
curl localhost
```

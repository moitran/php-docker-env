# php-docker-env
Setup nginx, mysql, memcached &amp; php env by docker

- [Containers version]($container-version)
- [How to use](#how-to-use)
- [License](#license)

Containers version
------------------
1. php 7.1
2. nginx latest version
3. mysql 5.7.23

How to use
----------
1. Download this repo into your local machine
``` bash
$ git clone git@github.com:moitran/php-docker-env.git
```
2. Run script to build & start all containers by this command (*If you already installed mysql in your local machine & it is using port 3306, please stop it before run this command*)
```
$ ./bin/run.sh
```
3. In this repo has two example projects (you can remove it and replace by your repositories):
  - *./www/site1/* this one will use *./etc/nginx/site1.conf*
  - *./www/site2/* this one will use *./etc/nginx/site2.conf*

  Now, Open your browser and go to: 

  - localhost:8080 you will see:
  
      ```
      Connected successfully
      Site1
      ```

  - localhost:8081 you will see:
  
      ```
      Connected successfully
      Site2
      ```

Well Done!!!!

4. Source code structure

```
├── bin
│   ├── run.sh      Run all docker containers
│   └── down.sh     Stop all docker containers
├── etc
│   ├── dbScripts   You can put all sql dump script into this folder. It will be automatic to run when start mysql container.
│   ├── nginx       Nginx conf files
│   └── php         php.ini config files
├── logs            All error.log & access.log of nginx will sync into this folder
├── mysql           Mysql container
├── nginx           NGINX container
├── php             PHP container
├── www             Put all php projects into this folder
└── docker-composer.yml
```

License
-------

This source code is under [MIT License](https://github.com/moitran/php-docker-env/blob/master/LICENSE)

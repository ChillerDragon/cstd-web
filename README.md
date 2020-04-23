# cstd-web
### Never roll your own paste service

-------------------------------------------------------------------------------------------

This is a very simple paste site using [pstd](https://github.com/fstd/pstd) under the hood.

I host this for you bois for free. But please do not hack me thangs lol...

https://zillyhuhn.com/cstd-web/


## setup

php and cstd dependencys

```
sudo apt install php
sudo wget -O /usr/local/bin/cstd https://paste.zillyhuhn.com/0 && sudo chmod +x /usr/local/bin/cstd
```

Then clone and run any php supporting web server as apache2 or nginx.
Make sure your webserver has write permissions in the current directory.

```
# simple local php quickstart
git clone https://github.com/ChillerDragon/cstd-web
php -S localhost:8000

# alternative using apache2
sudo apt install apache2
su - www-data -s /bin/bash
cd /var/www/html
git clone https://github.com/ChillerDragon/cstd-web
```

Connect to localhost:8000 in your browser and insert a paste.

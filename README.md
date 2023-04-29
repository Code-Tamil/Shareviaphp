# Shareviaphp
Share files with wifi fully save no need to use unknown apps

Just have these files in your /var/www/html


Create a folder named shares in /var/www/html your shared file will be there
```sh
sudo mkdir /var/www/html/shares
```
Copy the files you want to share

Don't forget to allow create and delete permission to that directory

```sh
sudo chmod 700 /var/www/html/shares
```

then run Your Apache Server
```sh
sudo service apache2 start
```


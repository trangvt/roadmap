How To Install Nginx on Ubuntu 18.04
	https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-18-04



# 3 – Checking your Web Server
$ systemctl status nginx

# 4 – Managing the Nginx Process
$ sudo systemctl stop nginx
$ sudo systemctl start nginx
$ sudo systemctl restart nginx
$ sudo systemctl reload nginx
$ sudo systemctl disable nginx
$ sudo systemctl enable nginx

# 5 – Setting Up Server Blocks
$ sudo mkdir -p /var/www/example.com/html
	-p flag to create any necessary parent directories

$ echo $USER
# Log file
	tail -f /var/log/nginx/error.log

# Config site
	sudo nano /etc/nginx/sites-available/xchange
---------------------------------------------

## Rewrite: Add to /etc/nginx/sites-available/xchange

# POST method
location ~ ^/V1/inventory/update {
	return 307 /catalog-service/inventory;
}

Truy cập {baseURL}/V1/inventory/update sẽ được điều hướng tới {baseURL}/catalog-service/inventory

# GET method
Rewrite ^rest/V1/order/readytoship /sales-service/orders/readytoship permanent;

Truy cập {baseURL}/rest/V1/order/readytoship sẽ được điều hướng tới {baseURL}/sales-service/orders/readytoship
---------------------------------------------

## Linux Restart Nginx Webserver
https://www.cyberciti.biz/faq/nginx-linux-restart/

# Debian/Ubuntu/RHEL/CentOS Linux
	/etc/init.d/nginx restart
	/etc/init.d/nginx reload

	service nginx restart
	service nginx reload

	sudo systemctl restart nginx
	sudo systemctl reload nginx

# View status
	service nginx status
	sudo systemctl status nginx
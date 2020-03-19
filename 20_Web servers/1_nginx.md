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

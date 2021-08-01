$ cat /etc/nginx/sites-available/malay
upstream fastcgi_backend {
    # use tcp connection
    # server  127.0.0.1:9000;
    # or socket
    server   unix:/run/php/php7.1-fpm.sock;
}

server {
    server_name my-staging.urbanfox.store;
    #set $MAGE_ROOT /var/www/html/urbanfox.store;
    set $MAGE_ROOT /var/www/urbanfox/current;
    include /var/www/html/urbanfox.store/nginx.conf.sample;
    #set $MAGE_MODE production;
    #set $MAGE_RUN_TYPE store;

    location /elb-status {
        access_log off;
        return 200;
    }

    location ~ /\.(svn|git)/* {
        deny all;
        access_log off;
        log_not_found off;
    }

    location ~ /\.ht {
        deny all;
        access_log off;
        log_not_found off;
    }

    #Hide the nginx version.
    server_tokens off;

    #Hide the PHP version.
    fastcgi_hide_header X-Powered-By;
    proxy_hide_header X-Powered-By;    

    listen 443 ssl; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/my-staging.urbanfox.store/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/my-staging.urbanfox.store/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot

}
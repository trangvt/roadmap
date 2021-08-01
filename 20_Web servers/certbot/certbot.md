certbot instructions
	https://certbot.eff.org/lets-encrypt/ubuntubionic-nginx


Delete a Certbot SSL Certificate
	https://mhagemann.medium.com/correct-way-to-delete-a-certbot-ssl-certificate-e8ee123e6e01
	$ sudo certbot delete --cert-name example.com

check Domain
	https://check-your-website.server-daten.de/

lists all certificates 
$ sudo certbot certificates
Saving debug log to /var/log/letsencrypt/letsencrypt.log

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Found the following certs:
  Certificate Name: my-staging.urbanfox.store
    Serial Number: 34390ef5af378aea04d1a167bddd9358231
    Key Type: RSA
    Domains: my-staging.urbanfox.store
    Expiry Date: 2021-06-16 07:30:12+00:00 (INVALID: EXPIRED)
    Certificate Path: /etc/letsencrypt/live/my-staging.urbanfox.store/fullchain.pem
    Private Key Path: /etc/letsencrypt/live/my-staging.urbanfox.store/privkey.pem
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

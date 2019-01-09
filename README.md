# OPTION GREEKS
Option Price and Greeks. PHP Webpage using Laravel.

## Installation of Laravel and Composer
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
composer global require "laravel/installer"
```
Add `export PATH=~/.composer/vendor/bin:$PATH` to .zshrc
Start a new laravel app using `laravel new app`

## Deployment using Lightsail
* Create a Linux Instance with a LAMP (PHP 7) blueprint and the minimum configurations as described in the [**Lightsail**](https://lightsail.aws.amazon.com/ls/docs/en/articles/getting-started-with-amazon-lightsail) documentation.
* Create a [**static IP**](https://lightsail.aws.amazon.com/ls/docs/en/articles/lightsail-create-static-ip) and attach it to an instance in Amazon Lightsail
* Create a [**DNS zone**](https://lightsail.aws.amazon.com/ls/docs/en/articles/lightsail-how-to-create-dns-entry) to manage your domain's DNS records. Include both an **A Record** and a **CNAME Record**.
* Include the Nameservers obtained from the above step under **Custom DNS** Nemservers in Namecheap where the domain is registered.
* Download the AWS key-pair and connect to the Bitnami Lightsail instance using SSH
```
ssh -i ~/.ssh/key-pair.pem bitnami@public_ip_address
```
or scp files to the instance from your local directory 
```
scp -i ~/.ssh/key-pair.pem *.php bitnami@public_ip_address/route_folder
```

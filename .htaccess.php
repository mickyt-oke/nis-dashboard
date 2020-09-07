<?php
RewriteEngine On
RewriteBase /
RewriteRule ^(.+?\.php)$ index.php?p=$1 [L,QSA,NC]

if ( authorized() ) {
    // show file
} else {
    die("Not Authorized to Access this File.");
}
RewriteCond %{HTTP_COOKIE} PHPSESSID=(\w+)
RewriteCond %{DOCUMENT_ROOT}/folder/logged/PHPSESSID_%1 -f
RewriteRule ^(.*)$ $1
RewriteRule .* /users/login [L]

RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

RewriteEngine On
RewriteBase /
RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
RewriteRule ^ %1 [R=301,L]
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^(.*?)/?$ $1.php [NC,END]
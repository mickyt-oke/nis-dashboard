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
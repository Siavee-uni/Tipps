    //Replace simplexml_load_string

    $replace = array("  "," ","_",".");
    $vCardUrl = $_SERVER['HTTP_ORIGIN'] . '/signatur/v-cards/' . str_replace($replace,"-",strtolower($pFirstName)) . '-' .     strtolower($pName) .'.vcf';

//Echo in php ohne Laravel:

    echo '<pre>' . print_r(str_replace($replace,"-",strtolower($pFirstName)), true) . '</pre>';

Deploy Laravel to sharedhosting via SSH

1. install composer if not isntalled 
```
mkdir /mybin
cd /mybin
curl -sS https://getcomposer.org/installer | php
chmod a+x composer.phar
mv composer.phar composer
export PATH="$PATH:/mybin"
echo export PATH="$PATH:/mybin" > ~/.profile
```
2. clone git ...
3. composer install
4. cp .env.example .env
5. .env db connection einrichten
6.  php artisan key:gen

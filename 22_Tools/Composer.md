https://getcomposer.org/doc/00-intro.md

Composer is a tool for dependency management in PHP.
It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.


https://topdev.vn/blog/composer-la-gi/

------------------------------------------------------------------------
Installation - Linux / Unix / macOS
    Globally
        + Upload composer file to server
            $ scp composer_1.10.5.phar MCCP-MY-UPGRADE:/home/ubuntu

        + Check PATH by command echo "$PATH"
            $ echo "$PATH"
            /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin

        + Move to PATH
            $ mv /home/ubuntu/composer_1.10.5.phar /usr/local/bin/composer

        + Activate composer
            $ sudo chmod -R 755 /usr/local/bin/composer
            $ composer
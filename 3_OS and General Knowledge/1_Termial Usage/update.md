$ sudo apt update
8 packages can be upgraded. Run 'apt list --upgradable' to see them.

$ apt list --upgradable
Listing... Done
containerd.io/bionic 1.4.6-1 amd64 [upgradable from: 1.3.7-1]
docker-ce/bionic 5:20.10.7~3-0~ubuntu-bionic amd64 [upgradable from: 5:19.03.13~3-0~ubuntu-bionic]
docker-ce-cli/bionic 5:20.10.7~3-0~ubuntu-bionic amd64 [upgradable from: 5:19.03.13~3-0~ubuntu-bionic]
libzstd1/bionic 1.4.8+dfsg-2+ubuntu18.04.1+deb.sury.org+4 amd64 [upgradable from: 1.3.3+dfsg-2ubuntu1.2]
php-common/bionic,bionic 2:82+ubuntu18.04.1+deb.sury.org+1 all [upgradable from: 2:76+ubuntu18.04.1+deb.sury.org+9]
php7.1/bionic,bionic 7.1.33-38+ubuntu18.04.1+deb.sury.org+1 all [upgradable from: 7.1.33-17+ubuntu18.04.1+deb.sury.org+1]
python3-httplib2/bionic,bionic 0.11.3-1+ubuntu18.04.1+deb.sury.org+1 all [upgradable from: 0.9.2+dfsg-1]
sublime-merge/apt/stable 2056 amd64 [upgradable from: 2032]


$ sudo apt install libzstd1

https://linuxize.com/post/how-to-install-and-use-mysql-workbench-on-ubuntu-18-04/
$ sudo apt search workbench
$ sudo apt install mysql-workbench


https://stackoverflow.com/questions/26571326/how-do-i-resolve-the-following-packages-have-unmet-dependencies/44287683
$ sudo apt-get install aptitude
$ sudo aptitude install <package-name>
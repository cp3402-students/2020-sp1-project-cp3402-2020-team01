# 2020-sp1-project-cp3402-2020-team01

Repository for project website for this team. 

## Getting Started

These instructions are a template set to get you set up in your local environment. This assumes you are setting up from a vanilla linux box (Ubuntu, Debian, etc.). 

### Prerequisites

Following software you will need to install.

```
git
mysql-server
apache2
php
ruby
wordmove
```

### Installing

From your linux terminal, run the following lines. These will install the prerequisties

```
apt update
apt install -y mysql-server httpd apache2 php7.2 apache2-php php-mysql php-cli ruby git
sudo gem install wordmove -v 4.0.1
```

### Git integration

Run the following lines to get your git repo up and runnning. This assumes you have not made any modifications to apache2.

```
cd /var/www/html
mkdir cp3402.2020.team01
cd cp3402.2020.team01
git clone https://github.com/cp3402-students/2020-sp1-project-cp3402-2020-team01.git
sudo service apache2 restart
```

### Get it running!

You will need to configure your database in mysql and create a wp-config.php based on the sample that matches. 

More to come upon wordmove setup. Stay tuned!

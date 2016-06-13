# [Vagrant](https://www.vagrantup.com/), [Ansible](https://www.ansible.com/) & [Fabric](http://www.fabfile.org/) for Wordpress
---
Quickly install Wordpress development environment with vagrant, ansible and fabric

## Getting Started
---
1. Download and Install [VirtualBox](https://www.virtualbox.org/)
2. Download and Install [Vagrant](https://www.vagrantup.com/)
3. Checkout Source code & Run Vagrant Up

```
git clone git@github.com:giappv/vagrant_wordpress.git
cd vagrant_wordpress
vagrant plugin install vagrant-hostmanager
vagrant up
```

After running `vagrant up` successfully, run `vagrant ssh` to login into VM

## Install Wordpress
---
### Download source code

```
cd /vagrant/devops/fabric
fab localhost init
```

### Install Wordpress

#### Database Connection
---
```
user: db
db: db
pass: 123456
root pass: 123456
```

Visit [http://Wordpress.dev][Wordpress.dev] to start installing Wordpress
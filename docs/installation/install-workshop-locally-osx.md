# OS X installation
* Download and install [Docker for Mac](http://www.docker.com/products/docker#/mac). After installation, start Docker and follow the instructions.
By using Docker containers, we make sure that everyone is using the same environment and settings. The images are provisioned during the boot of the container.
* Install [Homebrew](http://brew.sh/)
```bash
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

* Run the installation script in the root of the project. The script uses [Ansible](https://www.ansible.com/get-started) to setup the components.
```bash
./install-workshop
```

To see all the available tasks:
```bash
gulp help
```

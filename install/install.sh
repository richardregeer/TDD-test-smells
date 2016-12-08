#!/usr/bin/env bash

echo "To install the workshop, sudo rights are required. Please enter your password if required."

# Install pip (Python package manager)
sudo easy_install pip

# Use pip to provide latest available Ansible package
sudo pip install ansible

# Install workshop
cd install
ansible-playbook install-osx.yml -i hosts

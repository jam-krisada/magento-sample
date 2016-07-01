#!/bin/bash

cd /Applications/MAMP/htdocs/website/magento/.modman/marvelic-sample
git pull origin master
cd ../../
modman update-all

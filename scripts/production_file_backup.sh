#!/bin/bash

retentionDays=7
currentDate=$(date +"%d-%m-%Y")
path=/home/backerupper/backup/productionFiles
log=/home/backerupper/backup/production_file_backup_log.txt


aws s3 sync s3://studio4managementfiles2021 .

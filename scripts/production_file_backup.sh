#!/bin/bash

retentionDays=7
currentDate=$(date +"%d-%m-%Y")
path=/home/backerupper/backup/productionFiles
log=/home/backerupper/backup/production_file_backup_log.txt

echo -e "\n Script executed on $(date)" >> $log

mkdir -p $path
if [ $? -ne 0 ]; then
        echo "Production capture directory not created. Error code $?. Exiting..." >> $log
        exit 0
fi

echo "Beginning file downloads..." >> $log

aws s3 sync s3://studio4managementfiles2021 $path >> $log

if [ $? -ne 0 ]; then
        echo "Download failed. Error code $?. Exiting..." >> $log
        exit 0
else
        echo "Download completed." >> $log
fi

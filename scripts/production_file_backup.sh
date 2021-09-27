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

aws s3 sync s3://studio4managementfiles2021 $path/production_files_$currentDate >> $log

if [ $? -ne 0 ]; then
        echo "Download failed. Error code $?. Exiting..." >> $log
        exit 0
else
        echo "Download completed." >> $log
fi

if [ ! -z $path ];then
        cd $path
        count=$(find . -name "*production*" -type d -mtime +$retentionDays | wc -l)

        if [ $count -lt 1 ];then
                echo "no expired backups are present in the production file backup directory. Exiting..." >> $log
                exit 0
        else
                echo "Found $count backups to be deleted." >> $log
                echo "The Following directories and files within them  will be deleted." >> $log
                find . -name "*production*" -type d -mtime +$retentionDays >> $log
                find . -name "*production*" -type d -mtime +$retentionDays -exec rm -rf {} +

                if [ $? -ne 0 ]; then
                        echo "File(s) not deleted, something went wrong. Error code $?." >> $log
                        exit 0
                else
                        echo "$count File(s) were deleted." >> $log
                        exit 0
                fi

        fi
else
        echo "Production capture directory not found. Error code $?. Exiting..." >> $log
        exit 0
fi

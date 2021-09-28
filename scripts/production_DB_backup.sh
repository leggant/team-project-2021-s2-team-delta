#!/bin/bash 

retentionDays=7
currentDate=$(date +"%d-%m-%Y")
path=/home/backerupper/backup/productionDB
log=/home/backerupper/backup/productionDB_log.txt 


echo -e "\n Script executed on $(date)" >> $log

mkdir -p $path 
if [ $? -ne 0 ]; then
	echo "Production capture directory not created. Error code $?. Exiting..." >> $log
        exit 0
fi

echo "Beginning databaase capture..." >> $log

sudo -u backerupper heroku pg:backups:capture --app bit-studio-management >> $log

if [ $? -ne 0 ]; then
        echo "Production capture failed. Error code $?. Exiting..." >> $log
        exit 0
else
	echo "Successfully created a capture of the production database." >> $log 
fi

echo "Downloading backup to $path" >> $log

url=$(sudo -u backerupper heroku pg:backups:url --app bit-studio-management)
wget -q $url -O $path/production_capture_$currentDate.zip

if [ $? -ne 0 ]; then
        echo "Download failed. Error code $?. Exiting..." >> $log
        exit 0
else
        echo "Download completed." >> $log
fi


#making sure find commad is executed in the right directory 
if [ ! -z $path ];then 
	cd $path
	count=$(find . -name "*.zip" -type f -mtime +$retentionDays | wc -l)

	if [ $count -lt 1 ];then
		echo "no expired backups are present in the production backup directory. Exiting..." >> $log
		exit 0 
	else
		echo "Found $count files(s) to be deleted." >> $log
		echo "The Following file(s) will be deleted." >> $log 
		find . -name "*.zip" -type f -mtime +$retentionDays >> $log
		find . -name "*.zip" -type f -mtime +$retentionDays -delete 
		
		if [ $? -ne 0 ]; then 
			echo "File(s) not deleted, something went wrong. Error code $?." >> $log
			exit 0
		else 
			echo "$count File(s) were delted." >> $log
		        exit 0	
		fi

	fi
else
	echo "Production capture directory not found. Error code $?. Exiting..." >> $log
	exit 0
fi



#!/bin/bash

echo "Migration Started" 
php artisan migrate --force && 
echo "Migration Completed"

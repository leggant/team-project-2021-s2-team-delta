#!/bin/bash

echo "Migration Started" 
php artisan migrate --force && 
echo "Migration Completed" && 
echo "Seeding Started" && 
php artisan db:seed --force && 
echo "Seeding Completed"
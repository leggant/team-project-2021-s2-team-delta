#!/bin/bash

echo "Migration Started" 
php artisan migrate --force && 
echo "Migration Completed" && 
echo "Seeding Started" && 
## Shut off Seeders that are not needed, 
## these will error during release if they have data previously seeded
php artisan db:seed --class=PapersSeeder --force && 
php artisan db:seed --class=PermissionsSeeder --force && 
##php artisan db:seed --class=UserSeeder --force && 
echo "Seeding Completed"
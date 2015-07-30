mkdir -p app/tmp/cache/models
mkdir -p app/tmp/cache/persistent
mkdir -p app/tmp/logs
cp app/Config/database.php.dist app/Config/database.php
cp app/Config/core.php.dist app/Config/core.php
chown -R centresource:www-data .
chmod -R 755 .
chmod -R g+w app/tmp

#!/bin/bash
# rebuild.sh
php iphone/index.php > iphone/index.md
touch index.md  # Notifica a Hugo
echo "Component rebuilt and Hugo notified"

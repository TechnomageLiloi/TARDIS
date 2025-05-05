#!/usr/bin/env bash

echo "=-=-=-=-=-=-=-=-=-=";
echo "= Building Boyard =";
echo "=-=-=-=-=-=-=-=-=-=";

bash Less.sh
echo "Archiving in PHAR...";
php ./Archiver.php
echo "Done.";
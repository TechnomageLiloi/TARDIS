#!/usr/bin/env bash

echo "=-=-=-=-=-=-=-=-=-=";
echo "=  Building Rune  =";
echo "=-=-=-=-=-=-=-=-=-=";

bash Less.sh
echo "Archiving in PHAR...";
php ./Archiver.php
echo "Done.";
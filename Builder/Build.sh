#!/usr/bin/env bash

echo "=-=-=-=-=-=-=-=-=-=-=";
echo "=  Building BOYARD  =";
echo "=-=-=-=-=-=-=-=-=-=-=";

bash Less.sh
php ./Archiver.php
echo "Done building.";
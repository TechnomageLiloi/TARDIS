#!/usr/bin/env bash

echo "=-=-=-=-=-=-=-=-=-=-=";
echo "=  Building TARDIS  =";
echo "=-=-=-=-=-=-=-=-=-=-=";

bash Less.sh
php ./Archiver.php
echo "Done building.";
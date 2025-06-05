#!/usr/bin/env bash

echo "Compiling LESS...";

printf "\tEngine/Style"; lessc ../Engine/Style.less ../Engine/Style.css; printf "\n";
printf "\tDone compiling LESS to CSS\n";

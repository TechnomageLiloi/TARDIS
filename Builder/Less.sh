#!/usr/bin/env bash

echo "Compiling LESS...";

echo "Sources/Style"; lessc ../Sources/Style.less ../Sources/Style.css;
echo "Sources/API/Areas/Show/Style"; lessc ../Sources/API/Areas/Show/Style.less ../Sources/API/Areas/Show/Style.css;

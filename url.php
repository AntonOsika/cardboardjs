<?php
echo str_replace("\n","",shell_exec("./dl.py \"" . str_replace('"',"\"",$_REQUEST['url']) . "\" mp4"));

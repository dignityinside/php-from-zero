<?php

$arr = parse_ini_file('settings.ini', true);
echo($arr['info']['version']);
echo '<br>';
echo($arr['info']['developer']);
<?php

foreach ($cfg['Servers'] as $i => $value) {

    $cfg['Servers'][$i]['compress'] = false;
    $cfg['Servers'][$i]['connect_type'] = 'tcp';
    $cfg['Servers'][$i]['AllowNoPassword'] = true;
    $cfg['Servers'][$i]['hide_db'] = '^(information_schema|performance_schema|sys|mysql)$';
}

$cfg['DefaultCharset'] = 'utf8';
$cfg['DefaultConnectionCollation'] = 'utf8_general_ci';
$cfg['FilterLanguages'] = '^(ar|en)';

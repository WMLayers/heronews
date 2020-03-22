<?php

$title = 'Get started with Ionic';

$link = explode(' ', $title);
$dat = date('Y-m-d');
$link = $dat.'-'.implode('-', $link);


echo $link;
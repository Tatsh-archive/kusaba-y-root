<?php
// WARNING This file drops all tables (e.g. it destroys all data)!
// Only run this when you know what you are doing!
require './global.php';

kCore::enableDebugging();

$sql = file_get_contents('kusaba/model/model.sql', TRUE);
$db = kCore::getDatabase();

$db->translatedExecute($sql);

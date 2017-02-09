<?php

require_once __DIR__ . '/app/core/autoload.php';
require_once __DIR__ . '/app/config/path.php';
require_once __DIR__ . '/app/config/db.php';

Session::initSession();
Bootstrap::run();

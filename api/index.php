<?php

// 1. Prepare storage directories in /tmp for Vercel read-only serverless filesystem
$tmpStorage = '/tmp/storage';
@mkdir($tmpStorage . '/framework/views', 0755, true);
@mkdir($tmpStorage . '/framework/sessions', 0755, true);
@mkdir($tmpStorage . '/framework/cache', 0755, true);
@mkdir($tmpStorage . '/bootstrap/cache', 0755, true);
@mkdir($tmpStorage . '/logs', 0755, true);

$tmpLogFile = $tmpStorage . '/logs/laravel.log';
if (!file_exists($tmpLogFile)) {
    @touch($tmpLogFile);
    @chmod($tmpLogFile, 0666);
}

// 2. Prepare SQLite database in /tmp
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    $sourceDb = __DIR__ . '/../database/database.sqlite';
    if (file_exists($sourceDb)) {
        @copy($sourceDb, $dbPath);
    } else {
        @touch($dbPath);
    }
    @chmod($dbPath, 0666);
}

// 3. Set environment variables dynamically
$_ENV['STORAGE_PATH'] = $tmpStorage;
$_ENV['VIEW_COMPILED_PATH'] = $tmpStorage . '/framework/views';
$_ENV['DB_CONNECTION'] = 'sqlite';
$_ENV['DB_DATABASE'] = $dbPath;
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['LOG_STACK'] = 'stderr';
$_ENV['LOG_PATH'] = $tmpLogFile;

putenv('STORAGE_PATH=' . $tmpStorage);
putenv('VIEW_COMPILED_PATH=' . $tmpStorage . '/framework/views');
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=' . $dbPath);
putenv('LOG_CHANNEL=stderr');
putenv('LOG_STACK=stderr');
putenv('LOG_PATH=' . $tmpLogFile);

// 4. Forward request to public/index.php
require __DIR__ . '/../public/index.php';



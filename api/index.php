<?php

// Prepare storage directory in /tmp for Vercel read-only serverless filesystem
$tmpStorage = '/tmp/storage';
if (!file_exists($tmpStorage)) {
    @mkdir($tmpStorage . '/framework/views', 0755, true);
    @mkdir($tmpStorage . '/framework/sessions', 0755, true);
    @mkdir($tmpStorage . '/framework/cache', 0755, true);
}

// Forward request to public/index.php
require __DIR__ . '/../public/index.php';

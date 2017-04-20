<?php
/**
 * @file
 * Define and setup Silex application.
 */
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application([
  'debug' => true,
]);

$app->get('/', function() {
  return 'Hello World!';
});

return $app;

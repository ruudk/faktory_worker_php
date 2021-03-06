<?php
require __DIR__ . '/../vendor/autoload.php';

use Ramsey\Uuid\Uuid;

/*
 * Use nc to listen for connections
 *
 * nc -l 32769
 */

$client = new BaseKit\Faktory\FaktoryClient(getenv('FAKTORY_HOST'), getenv('FAKTORY_PORT'));
$job = new BaseKit\Faktory\FaktoryJob(Uuid::uuid4(), "somejob", [1, 2, 3]);
$client->push($job);

<?php

require_once '../vendor/autoload.php';

use ComposerTest\Test;

$test = new Test('custom str');
echo $test->getStr();

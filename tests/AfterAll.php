<?php

declare(strict_types=1);

namespace atk4\ui\tests;

use atk4\core\AtkPhpunit;

class AfterAll extends AtkPhpunit\TestCase
{
    public function testDumpStats()
    {
        $jistStatus = opcache_get_status();
        if ($jistStatus === false) {
            var_dump('Opcache/JIT not enabled');
        } else {
            unset($jistStatus['scripts']);
            print_r($jistStatus);
        }
    }
}

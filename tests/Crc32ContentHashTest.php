<?php

/*
 * This file is part of the Yo! Symfony Resource Watcher.
 *
 * (c) Attla <http://github.com/Attla>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Attla\ResourceWatcher\Tests;

use PHPUnit\Framework\TestCase;
use Attla\ResourceWatcher\Crc32ContentHash;

class Crc32ContentHashTest extends TestCase
{
    public function testHashMustReturnTheContentDisgestWithCRC32()
    {
        $filepath = sys_get_temp_dir() . '/test.txt';

        file_put_contents($filepath, 'acme');

        $crc32ContentHash = new Crc32ContentHash();
        $currentValue = $crc32ContentHash->hash($filepath);

        $this->assertEquals('8f7ecb57', $currentValue);

        unlink($filepath);
    }
}

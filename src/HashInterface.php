<?php

/*
 * This file is part of the Yo! Symfony Resource Watcher.
 *
 * (c) Attla <http://github.com/Attla>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Attla\ResourceWatcher;

/**
 * Interface for hashing a file.
 *
 * @author Victor Puertas <vpgugr@gmail.com>
 */
interface HashInterface
{
    /**
     * Calculates the hash of a file.
     *
     * @param string $filepath
     *
     * @return string Returns a string containing the calculated message digest.
     */
    public function hash($filepath);
}
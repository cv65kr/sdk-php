<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Internal\Declaration\Prototype;

use Temporal\Client\Internal\Repository\ArrayRepository;

/**
 * @template-covariant T of Prototype
 * @template-implements ArrayRepository<T>
 */
final class Collection extends ArrayRepository
{
}

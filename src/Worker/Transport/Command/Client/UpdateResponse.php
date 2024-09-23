<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Worker\Transport\Command\Client;

use Temporal\DataConverter\ValuesInterface;
use Temporal\Worker\Transport\Command\ResponseInterface;

final class UpdateResponse implements ResponseInterface
{
    public const COMMAND_VALIDATED = 'UpdateValidated';
    public const COMMAND_COMPLETED = 'UpdateCompleted';

    public function __construct(
        private readonly string $command,
        private ?ValuesInterface $values,
        private readonly ?\Throwable $failure,
        private string|int $updateId,
    ) {}

    public function getID(): int
    {
        return 0;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getPayloads(): ?ValuesInterface
    {
        return $this->values;
    }

    public function getFailure(): ?\Throwable
    {
        return $this->failure;
    }

    public function getOptions(): array
    {
        return ['id' => $this->updateId];
    }
}

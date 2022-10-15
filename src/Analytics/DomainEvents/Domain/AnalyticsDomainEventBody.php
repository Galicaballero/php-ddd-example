<?php

declare(strict_types=1);

namespace CodelyTv\Analytics\DomainEvents\Domain;

final class AnalyticsDomainEventBody
{
    public function __construct(public readonly array $value)
    {
    }

}

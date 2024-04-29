<?php

namespace Gricob\IMAP\Protocol\Response\Line\Data\Item;

final readonly class UidItem
{
    private const PATTERN = '/UID (?<uid>\d*)/';

    public function __construct(public int $uid)
    {
    }

    public static function tryParse(string $raw): ?self
    {
        if (!preg_match(self::PATTERN, $raw, $matches)) {
            return null;
        }

        return new self($matches['uid']);
    }
}
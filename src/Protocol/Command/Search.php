<?php

namespace Gricob\IMAP\Protocol\Command;

use Gricob\IMAP\Protocol\Command\Argument\Search\Criteria;

final readonly class Search extends Command
{
    public function __construct(
        bool $uid,
        Criteria ...$criteria,
    ) {
        parent::__construct(
            $uid ? 'UID SEARCH' : 'SEARCH',
            ...$criteria,
        );
    }
}
<?php

namespace App\Rewards\Achievements;

use App\Rewards\Criteria\CriteriaFactory;
use Mbsoft\Rewards\DTO\Achievement;

class ExclusiveEventAchievement extends Achievement
{
    public function __construct(
        public string $name = 'Exclusive Event Achievement',
        public array $metadata = []
    ) {
        $this->criteria[] = CriteriaFactory::make([
            'type' => 'event_participation',
            ...$this->metadata,
        ]);
        parent::__construct($name, $this->criteria, $metadata);
    }
}

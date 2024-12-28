<?php

namespace App\Rewards\Achievements;

use App\Rewards\Criteria\CriteriaFactory;
use Mbsoft\Rewards\DTO\Achievement;

class HighSpenderAchievement extends Achievement
{
    public function __construct(
        public string $name = 'High Spender Achievement',
        public array $metadata = []
    ) {
        $this->criteria[] = CriteriaFactory::make([
            'type' => 'high_spender',
            ...$this->metadata,
        ]);
        parent::__construct($name, $this->criteria, $metadata);
    }
}

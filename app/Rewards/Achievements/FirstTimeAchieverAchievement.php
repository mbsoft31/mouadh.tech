<?php

namespace App\Rewards\Achievements;

use App\Rewards\Criteria\CriteriaFactory;
use Mbsoft\Rewards\DTO\Achievement;

class FirstTimeAchieverAchievement extends Achievement
{
    public function __construct(
        public string $name = 'First Time Achiever Achievement',
        public array $metadata = []
    ) {
        $this->criteria[] = CriteriaFactory::make([
            'type' => 'first_purchase',
            ...$this->metadata,
        ]);
        parent::__construct($name, $this->criteria, $metadata);
    }
}

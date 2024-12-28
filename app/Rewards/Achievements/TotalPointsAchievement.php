<?php

namespace App\Rewards\Achievements;

use App\Rewards\Criteria\CriteriaFactory;
use Mbsoft\Rewards\DTO\Achievement;

class TotalPointsAchievement extends Achievement
{
    public function __construct(
        public string $name = 'Total Points Achievement',
        public array $metadata = []
    ) {
        $this->criteria[] = CriteriaFactory::make([
            'type' => 'score_threshold',
            'threshold' => 1000, // Earn over 1000 points in total
        ]);
        parent::__construct($name, $this->criteria, $metadata);
    }
}

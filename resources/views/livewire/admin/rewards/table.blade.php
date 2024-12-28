<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\{form, layout, state};
/** @var Array<\Mbsoft\Rewards\DTO\Badge> $badges*/
state(['badges' => []]);

$mount = function () {
    $this->badges = collect([
        new \App\Rewards\Badges\FirstPurchaseBadge(),
        new \App\Rewards\Badges\FrequentShopperBadge(),
        new \App\Rewards\Badges\MonthlySpenderBadge(),
    ]);
};

$mount();

?>

<div>

    <div class="flex space-y-10">
        @foreach($badges as $badge)
            <div>
                {{ $badge->name }}
            </div>
        @endforeach
    </div>

</div>

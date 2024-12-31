<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\{form, layout, state};

state([
    'badges' => collect([
        new \App\Rewards\Badges\FirstPurchaseBadge(),
        new \App\Rewards\Badges\FrequentShopperBadge(),
        new \App\Rewards\Badges\MonthlySpenderBadge(),
    ])->map(function($item) {
        $item = $item->toArray();
        $item['criteria'] = collect($item['criteria'])->map(fn($i) => $i->toArray())->toArray();
        return $item;
    })->toArray()
]);



?>

<div>

    <div class="flex space-y-10">

        @foreach($badges as $badge)
            <div>
                {{ $badge['name'] }}
            </div>
        @endforeach
    </div>

</div>

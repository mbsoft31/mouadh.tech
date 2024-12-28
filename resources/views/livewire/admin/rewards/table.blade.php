<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\{form, layout, state};
/** @var Array<\Mbsoft\Rewards\DTO\Badge> $badges*/
state(['badges' => [
    new \App\Rewards\Badges\FirstPurchaseBadge(),
    new \App\Rewards\Badges\FrequentShopperBadge(),
    new \App\Rewards\Badges\MonthlySpenderBadge(),
]]);

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
};

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

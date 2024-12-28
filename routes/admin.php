<?php

Route::view('admin/rewards', 'admin.rewards')
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.rewards');

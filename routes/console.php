<?php

use App\Console\Commands\GenerateRecurringTasks;
use Illuminate\Support\Facades\Schedule;

Schedule::command(GenerateRecurringTasks::class)->everyTenSeconds();

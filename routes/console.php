<?php

use Illuminate\Foundation\Inspiring;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('git:pull', function () {
    $command = 'git pull origin master';
    $info = system($command);
    dump($info);
})->describe('使用git pull 自动部署');

Artisan::command('git:push', function () {
    $command = 'git push origin master';
    $info = system($command);
    dump($info);
})->describe('使用git push 自动部署');


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;


class TestEnv extends Model
{
    use PresentableTrait;
    protected $presenter = 'App\Presenters\TestEnvPresenter';

}

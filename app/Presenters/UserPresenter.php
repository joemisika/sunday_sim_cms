<?php

namespace SundaySim\Presenters;

use Lewis\Presenter\AbstractPresenter;

class UserPresenter extends AbstractPresenter
{
    public function lastloginDifference()
    {
        return $this->last_login_at->diffForHumans();
    }
}
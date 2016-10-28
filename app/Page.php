<?php

namespace SundaySim;

use Baum\Node;

class Page extends Node
{
    protected $fillable = ['title', 'name', 'uri', 'content', 'template', 'hidden'];

    public function updateOrder($order, $orderPage)
    {
        $orderPage = $this->findOrFail($orderPage);

        if ($order == 'before') {
            $this->moveToLeftOf($orderPage);
        } elseif ($order == 'after') {
            $this->moveToRightOf($orderPage);
        } elseif ($order == 'childOf') {
            $this->makeChildOf($orderPage);
        }
    }

    public function SetNameAttribute($value)
    {
        $this->attributes['name'] = $value ?: null;
    }

    public function SetTemplateAttribute($value)
    {
        $this->attributes['template'] = $value ?: null;
    }
}

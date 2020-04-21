<?php


namespace WisdmLabs\Todolist;


use Illuminate\Support\Facades\Facade;

class TaskAction extends Facade
{
    protected static function getFacadeAccessor() { return 'taskaction'; }
}

<?php

namespace Zeek;

use Illuminate\Support\Str;

class Helper {
    
    public static function toSql($query)
    {
	    return Str::replaceArray('?', $query->getBindings(), $query->toSql());
    }
}
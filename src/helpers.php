<?php

use Illuminate\Support\Str;

/**
 * Retrieve sql with bindings from a query.
 * 
 * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
 * @return string
 */
function to_sql($query)
{
    return Str::replaceArray('?', $query->getBindings(), $query->toSql());
}
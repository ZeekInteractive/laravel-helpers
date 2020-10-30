<?php

use Illuminate\Support\Str;

/**
 * Retrieve sql with bindings from a query.
 *
 * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
 *
 * @return string
 */
function to_sql($query)
{
	$bindings = $query->getBindings();
	$rawSql   = $query->toSql();

	$rawSql = str_replace('?', "'?'", $rawSql);

	return Str::replaceArray('?', $bindings, $rawSql);
}

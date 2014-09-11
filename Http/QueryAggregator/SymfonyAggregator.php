<?php

namespace Guzzle\Http\QueryAggregator;

use Guzzle\Http\QueryString;
use Guzzle\Http\QueryAggregator;

/**
 * Aggregates nested query string variables using PHP style [] without the
 */
class SymfonyAggregator implements QueryAggregatorInterface
{
    public function aggregate($key, $value, QueryString $query)
    {
        $ret = array();

        foreach ($value as $k => $v) {
            $k = "{$key}[]";
            if (is_array($v)) {
                $ret = array_merge($ret, self::aggregate($k, $v, $query));
            } else {
                $ret[$query->encodeValue($k)] = $query->encodeValue($v);
            }
        }

        return $ret;
    }
}

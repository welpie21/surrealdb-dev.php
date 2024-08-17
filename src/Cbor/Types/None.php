<?php

namespace Surreal\Cbor\Types;


/**
 * We have to have this class to represent the NONE type that we retrieve in certain responses from SurrealDB.
 * This is a placeholder class that does nothing. It is used to represent the absence of a value.
 */
final class None
{
    /**
     * Check if the value argument is a None instance.
     * @param mixed $value
     * @return bool
     */
    public static function isNone(mixed $value): bool
    {
        return $value instanceof None;
    }
}

/**
 * A global singleton None value
 */
const NONE = new None();
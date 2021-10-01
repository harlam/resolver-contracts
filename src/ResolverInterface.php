<?php

namespace Pico\Resolver\Contracts;

/**
 * Interface ResolverInterface
 */
interface ResolverInterface
{
    /**
     * Resolve dependency by name
     * @return mixed
     */
    public function resolve(string $name);
}

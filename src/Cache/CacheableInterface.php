<?php


namespace TheCodingMachine\CMS\Cache;

/**
 * Objects implementing this interface can be cached.
 */
interface CacheableInterface
{
    /**
     * Returns the time to live of this object, in seconds.
     *
     * @return int
     */
    public function getTtl() : int;

    /**
     * Returns the tags applied to this object.
     * Useful for purging all elements by a certain tag.
     *
     * @return string[]
     */
    public function getTags() : array;

    /**
     * Returns the cache key for this object.
     *
     * @return string
     */
    public function getKey() : string;
}
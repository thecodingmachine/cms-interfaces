<?php


namespace TheCodingMachine\CMS\Page;


use Psr\Http\Message\UriInterface;

interface PageRegistryInterface
{
    public function getPage(UriInterface $uri): PageInterface;
}

<?php


namespace TheCodingMachine\CMS\Page;


use Psr\Http\Message\UriInterface;
use TheCodingMachine\CMS\Block\BlockInterface;

interface PageRegistryInterface
{
    public function getPage(UriInterface $uri): ?BlockInterface;
}

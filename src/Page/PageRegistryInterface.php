<?php


namespace TheCodingMachine\CMS\Page;


use Psr\Http\Message\ServerRequestInterface;
use TheCodingMachine\CMS\Block\BlockInterface;

interface PageRegistryInterface
{
    public function getPage(ServerRequestInterface $request): ?BlockInterface;
}

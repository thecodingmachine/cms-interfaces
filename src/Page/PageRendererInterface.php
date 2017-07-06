<?php


namespace TheCodingMachine\CMS\Page;

use Psr\Http\Message\StreamInterface;
use TheCodingMachine\CMS\Block\BlockInterface;

interface PageRendererInterface
{
    /**
     * Renders the page.
     * The HTML will be returned is a set of streams indexed by zone name.
     * This way, a page can write in many zones.
     *
     * TODO: what about writing in blocks instead?
     *
     * @param BlockInterface $page
     * @return StreamInterface[] A list of streams indexed by zone name
     */
    public function render(BlockInterface $page): array;
}

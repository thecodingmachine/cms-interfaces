<?php


namespace TheCodingMachine\CMS\Block;

use Psr\Http\Message\StreamInterface;

interface BlockRendererInterface
{
    /**
     * Renders a block.
     *
     * @param BlockInterface $page
     * @param mixed[] $additionalContext
     * @return StreamInterface
     */
    public function renderBlock(BlockInterface $page, array $additionalContext = []): StreamInterface;
}

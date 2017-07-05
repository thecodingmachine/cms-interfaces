<?php
namespace TheCodingMachine\CMS;


use Psr\Http\Message\StreamInterface;

interface RenderableInterface
{
    /**
     * Renders (as a stream) the data passed in parameter.
     *
     * @param mixed[] $context
     * @return StreamInterface
     */
    public function render(array $context): StreamInterface;
}

<?php


namespace TheCodingMachine\CMS\Block;


use TheCodingMachine\CMS\Theme\ThemeDescriptorInterface;

interface BlockInterface
{
    public function getThemeDescriptor(): ThemeDescriptorInterface;

    /**
     * @return mixed[]
     */
    public function getContext(): array;
}
<?php


namespace TheCodingMachine\CMS\Page;


use TheCodingMachine\CMS\Theme\ThemeDescriptorInterface;

interface PageInterface
{
    public function getThemeDescriptor(): ThemeDescriptorInterface;

    /**
     * @return mixed[]
     */
    public function getContext(): array;
}
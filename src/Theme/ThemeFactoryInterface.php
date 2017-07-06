<?php


namespace TheCodingMachine\CMS\Theme;


use TheCodingMachine\CMS\RenderableInterface;

interface ThemeFactoryInterface
{
    public function getTheme(ThemeDescriptorInterface $descriptor): RenderableInterface;
}

<?php


namespace TheCodingMachine\CMS\Theme;


use TheCodingMachine\CMS\RenderableInterface;

interface ThemeRegistryInterface
{
    public function getTheme(string $themeName): RenderableInterface;
}

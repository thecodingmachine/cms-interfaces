<?php


namespace TheCodingMachine\CMS\Theme;


interface ThemeDescriptorInterface
{
    /**
     * Returns the path of the theme.
     * This does not have to be an absolute path (it is relative to the theme directory)
     *
     * @return string|null
     */
    public function getPath(): ?string;
}

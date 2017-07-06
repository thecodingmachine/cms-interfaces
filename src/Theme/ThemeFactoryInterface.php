<?php


namespace TheCodingMachine\CMS\Theme;


use TheCodingMachine\CMS\RenderableInterface;

interface ThemeFactoryInterface
{
    /**
     * Creates a theme object based on the descriptor object passed in parameter.
     *
     * @throws \TheCodingMachine\CMS\Theme\CannotHandleThemeDescriptorExceptionInterface Throws an exception if the factory cannot handle this descriptor.
     */
    public function createTheme(ThemeDescriptorInterface $descriptor): RenderableInterface;

    /**
     * Returns true if this factory can handle the descriptor passed in parameter. False otherwise.
     */
    public function canCreateTheme(ThemeDescriptorInterface $descriptor): bool;
}

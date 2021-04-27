<?php
namespace Application\Theme\VibrantBrands;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
{
    public function registerAssets()
    {
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Vibrant Redux');
    }

    public function getThemeDescription()
    {
        return t('A Vibrant Page Theme');
    }

    /**
     * @return array
     */
    public function getThemeBlockClasses()
    {
        return [
            'feature' => ['feature-home-page'],
            'page_list' => [
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped',
            ],
            'next_previous' => ['block-sidebar-wrapped'],
            'share_this_page' => ['block-sidebar-wrapped'],
            'content' => [
                'block-sidebar-wrapped',
                'block-sidebar-padded',
            ],
            'date_navigation' => ['block-sidebar-padded'],
            'topic_list' => ['block-sidebar-wrapped'],
            'testimonial' => ['testimonial-bio'],
            'image' => [
                'image-right-tilt',
                'image-circle',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getThemeAreaClasses()
    {
        return [
            'Page Footer' => ['area-content-accent'],
        ];
    }

    /**
     * @return array
     */
    public function getThemeDefaultBlockTemplates()
    {
        return [
            'calendar' => 'bootstrap_calendar.php',
        ];
    }

    /**
     * @return array
     */
    public function getThemeResponsiveImageMap()
    {
        return [
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        ];
    }

    /**
     * @return array
     */
    public function getThemeEditorClasses()
    {
        return [
            ['title' => t('Subtle Link'), 'menuClass' => '', 'spanClass' => 'subtle-link', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link PV'), 'menuClass' => '', 'spanClass' => 'subtle-link-pv', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link UH'), 'menuClass' => '', 'spanClass' => 'subtle-link-uh', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link Belvedere'), 'menuClass' => '', 'spanClass' => 'subtle-link-belv', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link Sunmark'), 'menuClass' => '', 'spanClass' => 'subtle-link-sunmark', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link FCA'), 'menuClass' => '', 'spanClass' => 'subtle-link-fca', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link NEPA'), 'menuClass' => '', 'spanClass' => 'subtle-link-nepa', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link SFCU'), 'menuClass' => '', 'spanClass' => 'subtle-link-sfcu', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link Gold'), 'menuClass' => '', 'spanClass' => 'subtle-link-gold', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link White'), 'menuClass' => '', 'spanClass' => 'subtle-link-white', 'forceBlock' => '-1'],
            ['title' => t('Subtle Link Black'), 'menuClass' => '', 'spanClass' => 'subtle-link-black', 'forceBlock' => '-1'],
            ['title' => t('Animated Text'), 'menuClass' => '', 'spanClass' => 'animated-text', 'forceBlock' => '1'],
            ['title' => t('Blue Text'), 'menuClass' => '', 'spanClass' => 'blue', 'forceBlock' => '-1'],
            ['title' => t('Green Text'), 'menuClass' => '', 'spanClass' => 'green', 'forceBlock' => '-1'],
        ];
    }

    /**
     * @return array
     */
    public function getThemeAreaLayoutPresets()
    {
        $presets = [
            [
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-4"></div>',
                    '<div class="col-sm-8"></div>',
                ],
            ],
            [
                'handle' => 'right_sidebar',
                'name' => 'Right Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-sm-8"></div>',
                    '<div class="col-sm-4"></div>',
                ],
            ],
        ];

        return $presets;
    }
}

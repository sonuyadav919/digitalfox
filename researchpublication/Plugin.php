<?php namespace Digitalfox\Researchpublication;

use Backend;
use System\Classes\PluginBase;

/**
 * researchpublication Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'researchpublication',
            'description' => 'Manage Research Publications',
            'author'      => 'digitalfox',
            'icon'        => 'icon-book'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
          return [
            'Digitalfox\Researchpublication\Components\Books' => 'Books',
            'Digitalfox\Researchpublication\Components\Journals' => 'Journals',
            'Digitalfox\Researchpublication\Components\ResearchBriefs' => 'ResearchBriefs',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'digitalfox.researchpublication.some_permission' => [
                'tab' => 'researchpublication',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'researchpublication' => [
                'label'       => 'Research Publication',
                'url'         => Backend::url('digitalfox/researchpublication/journals'),
                'icon'        => 'icon-book',
                'permissions' => ['digitalfox.researchpublication.*'],
                'order'       => 500,
                'sideMenu' => [
                    'journals' => [
                        'label'       => 'Manage Journals',
                        'icon'        => 'icon-newspaper-o',
                        'url'         => Backend::url('digitalfox/researchpublication/journals'),
                        'permissions' => ['digitalfox.researchpublication.*'],
                    ],
                    'books' => [
                        'label'       => 'Manage Books',
                        'icon'        => 'icon-book',
                        'url'         => Backend::url('digitalfox/researchpublication/books'),
                        'permissions' => ['digitalfox.researchpublication.*'],
                    ],
                    'researchbriefs' => [
                        'label'       => 'Manage Research Briefs and Reports',
                        'icon'        => 'icon-graduation-cap',
                        'url'         => Backend::url('digitalfox/researchpublication/researchbriefs'),
                        'permissions' => ['digitalfox.researchpublication.*'],
                    ],

                ]
            ],
        ];
    }

}

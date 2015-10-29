<?php namespace Seven9\Project;

use System\Classes\PluginBase;
use Backend;

/**
 * Project Plugin Information File
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
            'name'        => 'Projects',
            'description' => 'Portfolio projects showcase plugin',
            'author'      => 'Seven9',
            'icon'        => 'icon-leaf'
        ];
    }


    public function registerNavigation()
    {
        return [
            'project'   => [
                'label'         => 'Project',
                'url'           => Backend::url('seven9/project/projects'),
                'icon'          => 'icon-puzzle-piece',
                'premissions'   => ['serven9.project.*'],
                'order'         => 500,

                'sideMenu'      => [
                    'projects'      => [
                            'label'         => 'Project',
                            'url'           => Backend::url('seven9/project/projects'),
                            'icon'          => 'icon-puzzle-piece',
                            'premissions'   => ['seven9.project.projects'],

                    ],
                    'categories'    => [
                            'label'         => 'Category',
                            'url'           => Backend::url('seven9/project/categories'),
                            'icon'          => 'icon-tag',
                            'premissions'   => ['seven9.category.categories'],
                    ],
                ],
            ],
        ];
    }

}

<?php namespace Rebel59\Blogtheming;

use Backend;
use System\Classes\PluginBase;

/**
 * blogtheming Plugin Information File
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
            'name'        => 'Rainlab Blog Theming',
            'description' => 'Adds theming options to the Rainlab.Blog plugin',
            'author'      => 'Rebel59',
            'icon'        => 'icon-eyedropper'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        // Extend all backend form usage
        Event::listen('backend.form.extendFields', function($widget) {

            // Only for the User model
            if (!$widget->model instanceof \RainLab\Blog\Models\Category) {
                return;
            }

            $widget->addFields([
                'theme_color' => [
                    'label'   => 'Theme Color',
                    'type'    => 'colorpicker',
                ]
            ]);
        });
    }
}

<?php namespace Rebel59\Blogtheming;

use Backend;
use Illuminate\Support\Facades\Event;
use System\Classes\PluginBase;

/**
 * Rebel59 's Blog Theming Plugin Information File
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
            'name'        => 'Rainlab Blog Colors',
            'description' => 'Adds color to the blog categories',
            'author'      => 'Rebel59',
            'icon'        => 'icon-eyedropper'
        ];
    }

    /**
     * @var array Plugin dependencies
     */
    public $require = ['Rainlab.Blog'];

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Event::listen('backend.form.extendFields', function($widget) {

            if (!$widget->model instanceof \RainLab\Blog\Models\Category) {
                return;
            }

            $widget->addTabFields([
                'theme_color' => [
                    'label'   => 'Theme Color',
                    'type'    => 'colorpicker',
                    'tab'     =>'Themes'
                ],
                'theme_css' => [
                    'label'   => 'Custom CSS',
                    'type'    => 'codeeditor',
                    'language'=> 'css',
                    'tab'     =>'Advanced Themes'
                ]
            ]);
        });

    }
}
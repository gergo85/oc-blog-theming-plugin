<?php namespace Rebel59\Blogthemes;

use Backend;
use Illuminate\Support\Facades\Event;
use RainLab\Blog\Controllers\Categories;
use RainLab\Blog\Models\Category;
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
            'name'        => 'rebel59.blogthemes::lang.plugin.name',
            'description' => 'rebel59.blogthemes::lang.plugin.description',
            'author'      => 'Rebel59',
            'icon'        => 'icon-eyedropper',
            'homepage'    => 'https://github.com/Rebel59/oc-blog-theming-plugin'
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
        Category::extend(function ($model) {
            $model->attachMany['theme_images'] = [
                'System\Models\File',
                'order'  => 'sort_order',
                'delete' => true
            ];
        });

        Categories::extendFormFields(function ($form, $model) {
            if (!$model instanceof Category) {
                return;
            }

            $form->addTabFields([
                'theme_images' => [
                    'label' => 'rebel59.blogthemes::lang.models.category.fields.theme_images',
                    'type'  => 'fileupload',
                    'mode'  => 'image',
                    'tab'   => 'rebel59.blogthemes::lang.tabs.theme'
                ],
                'color' => [
                    'label' => 'rebel59.blogthemes::lang.models.category.fields.color',
                    'type'  => 'colorpicker',
                    'tab'   => 'rebel59.blogthemes::lang.tabs.theme'
                ],
                'css' => [
                    'label'    => 'rebel59.blogthemes::lang.models.category.fields.css',
                    'type'     => 'codeeditor',
                    'language' => 'css',
                    'tab'      => 'rebel59.blogthemes::lang.tabs.advanced_theme'
                ]
            ]);
        });
    }
}

<?php namespace Eugene3993\Gallery;

use Backend;
use Schema;
use October\Rain\Database\Schema\Blueprint;
use System\Classes\PluginBase;

class Plugin extends PluginBase {
   public function pluginDetails() {
      return [
         'name'        => 'eugene3993.gallery::lang.plugin.details.name',
         'description' => 'eugene3993.gallery::lang.plugin.details.description',
         'author'      => 'Eugene3993',
         'icon'        => 'icon-image'
      ];
   }

   public function register() {}

   public function boot() {}

   public function registerComponents() {
      return [
         'Eugene3993\Gallery\Components\GalleryList' => 'galleryList',
         'Eugene3993\Gallery\Components\GalleryDetails' => 'galleryDetails'
      ];
   }

public function registerPermissions()
{
    return [
        'eugene3993.gallery.manage' => [
            'label' => 'Manage Gallery',
            'tab'   => 'Gallery',
        ],
    ];
}

   public function registerNavigation() {
      return [
         'gallery' => [
               'label'       => 'eugene3993.gallery::lang.plugin.menu.name',
               'url'         => Backend::url('eugene3993/gallery/Gallery'),
               'icon'        => 'icon-image',
               'permissions' => ['eugene3993.gallery.*'],
               'order'       => 500,
         ],
      ];
   }
}

<?php
 
namespace Drupal\simple_app\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class TaskController extends ControllerBase
{
    public function content()
    {
        return [
            "#markup" => '<div id="simple-app"></div>',
            "#attached" => [
                "library" => ["simple_app/simple_app"],
            ],
        ];
    }
}

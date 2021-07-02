<?php

namespace Drupal\custom_template_routing\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class CustomRoute extends ControllerBase {
    public function content() {
        return [
            '#theme' => 'template_overview',
            '#org_name' => "key2goal tutorials",
            '#website_link' => "https://www.key2goal.com/"
        ];
    }
}
<?php

namespace Drupal\curso_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class CursoController extends ControllerBase
{
    public function home()
    {
        return [
            '#markup' => 'É o markup do nosso controlador'
            ];
    }
}

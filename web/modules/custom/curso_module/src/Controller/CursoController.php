<?php

namespace Drupal\curso_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\Response;

class CursoController extends ControllerBase
{
    public function home($node)
    {
        return [
            '#markup' => 'A Etiqueta do node é: '.$node
            ];
    }
}

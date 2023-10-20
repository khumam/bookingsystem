<?php

namespace App\Traits;

trait DatatableModalTrait
{
    public $isModalShow = false;
    public $deleteRoute = null;

    public function showModal($route, $id)
    {
        $this->isModalShow = true;
        $this->setDeleteRoute($route, $id);
    }

    public function resetModal()
    {
        $this->isModalShow = false;
        $this->deleteRoute = null;
    }

    public function setDeleteRoute(string $route, $id)
    {
        $this->deleteRoute = route($route, $id);
    }
}

<?php


include_once 'Model/Model.php';
include_once 'View/View.php';

class Controller{

    private Model $model;
    private View $view;

    public function __construct(Model $newModel, View $newView)
    {
        $this->model = $newModel;
        $this->view = $newView;
    }

    // Getter setter Model
    public function getModel(): Model
    {
        return $this->model;
    }

    public function setModel(Model $newModel)
    {
        $this->model = $newModel;
    }

    // Gette setter View
    public function getView(): View
    {
        return $this->view;
    }

    public function setView(View $newView)
    {
        $this->view = $newView;
    }

    // Afficher 
    public function render()
    {
        $this->view->displayAll();
    }
}
<?php
class NameController 
{
    public $model;
    public function __construct(NameModel $model)
    {
        $this->model = $model;
    }
    public function listName()
    {
    include './view/Name.php';
    }
    public function saveName($data)
    {
        $this->model->saveName($data);
    }
}
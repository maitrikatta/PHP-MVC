<?php
  // Load the mode and the view

  class Controller
{
    public function model($model)
    {
      //require model file
      require_once '../app/models/' . $model . '.php';

      // Instantiate a models
      return new $model();
    }

// load the view (checks for the files)

    public function view($view, $data =[])
    {
      if (file_exists('../app/views/'. $view . '.php'))
      {
        require_once '../app/views/' . $view . '.php';
      }else{
        die("view does not exists ". $view);
      }
    }
}

 ?>

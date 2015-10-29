<?php namespace Seven9\Project\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Projects Back-end Controller
 */
class Projects extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Seven9.Project', 'project', 'projects');
    }
}
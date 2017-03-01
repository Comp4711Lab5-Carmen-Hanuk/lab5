<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mtce
 *
 * @author Hanuk
 */
class Mtce extends Application {

        public function index()
        {
                $this->data['pagetitle'] = 'TODO List Maintenance';
                $tasks = $this->tasks->all(); // get all the tasks

                // substitute the status name
                foreach ($tasks as $task)
                        if (!empty($task->status))
                                $task->status = $this->statuses->get($task->status)->name;

                // convert the array of task objects into an array of associative objects       
                foreach ($tasks as $task)
                        $converted[] = (array) $task;

                // and then pass them on
                $this->data['display_tasks'] = $converted;
                $this->data['pagebody'] = 'itemlist';
                $this->render();
        }

}

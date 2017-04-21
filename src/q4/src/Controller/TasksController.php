<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tasks Controller
 *
 * @property \App\Model\Table\TasksTable $Tasks
 */
class TasksController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('Tasks');
    }

    public function index()
    {
        $tasks = $this->Tasks->find('all');
        $this->set([
            'tasks' => $tasks,
            '_serialize' => ['tasks']
        ]);
    }

    public function view($id)
    {
        $task = $this->Tasks->get($id);
        $this->set([
            'task' => $task,
            '_serialize' => ['task']
        ]);
    }

    public function add()
    {
        $task = $this->Tasks->newEntity($this->request->getData());
        if ($this->Tasks->save($task)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'task' => $task,
            '_serialize' => ['message', 'task']
        ]);
    }

    public function edit($id)
    {
        $task = $this->Tasks->get($id);
        if ($this->request->is(['post', 'put'])) {
            $task = $this->Tasks->patchEntity($task, $this->request->getData());
            if ($this->Tasks->save($task)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $task = $this->Tasks->get($id);
        $message = 'Deleted';
        if (!$this->Tasks->delete($task)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}

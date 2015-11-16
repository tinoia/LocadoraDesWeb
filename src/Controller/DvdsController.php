<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dvds Controller
 *
 * @property \App\Model\Table\DvdsTable $Dvds
 */
class DvdsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('dvds', $this->paginate($this->Dvds));
        $this->set('_serialize', ['dvds']);
    }

    /**
     * View method
     *
     * @param string|null $id Dvd id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dvd = $this->Dvds->get($id, [
            'contain' => []
        ]);
        $this->set('dvd', $dvd);
        $this->set('_serialize', ['dvd']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dvd = $this->Dvds->newEntity();
        if ($this->request->is('post')) {
            $dvd = $this->Dvds->patchEntity($dvd, $this->request->data);
            if ($this->Dvds->save($dvd)) {
                $this->Flash->success(__('The dvd has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dvd could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dvd'));
        $this->set('_serialize', ['dvd']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dvd id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dvd = $this->Dvds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dvd = $this->Dvds->patchEntity($dvd, $this->request->data);
            if ($this->Dvds->save($dvd)) {
                $this->Flash->success(__('The dvd has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dvd could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dvd'));
        $this->set('_serialize', ['dvd']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dvd id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dvd = $this->Dvds->get($id);
        if ($this->Dvds->delete($dvd)) {
            $this->Flash->success(__('The dvd has been deleted.'));
        } else {
            $this->Flash->error(__('The dvd could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

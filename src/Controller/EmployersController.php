<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of EmployersController
 *
 * @author Administrator
 */
class EmployersController  extends AppController{
    //put your code here
    public function index(){
        $employers=$this->Employers->find('all');
        $this->set(compact('employers'));
    }
    public function add(){
        
       $employ=$this->Employers->newEntity();
       if($this->request->is('post')){
           $job=$this->Employers->patchEntity($employ,$this->request->data);
           if($this->Employers->save($employ)){
               $this->Flash->success(__('The User has been saved.'));
              return $this->redirect(['action' => 'index']);
           }
           else{
                $this->Flash->error(__('The User could not be saved. Please, try again.'));
           }
       }
       $this->set('employer',$employ);
    }
}

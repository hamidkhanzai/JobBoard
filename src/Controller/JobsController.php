<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use Cake\Mailer\Email;
use App\Model\Table;
/**
 * Description of JobsController
 *
 * @author Administrator
 */
class JobsController extends AppController{
   
   public function index(){
       
       $jobs=$this->Jobs->find("all");
       $this->set('jobs',$jobs);
   }
   
   public function view($id = null){
       $job=$this->Jobs->findById($id);
       $this->set('job',$job);
   }
   
   public function add(){
       $job=$this->Jobs->newEntity();
       if($this->request->is('post')){
           $job=$this->Jobs->patchEntity($job,$this->request->data);
           if($this->Jobs->save($job)){
               $this->Flash->success(__('The job has been saved.'));
              return $this->redirect(['action' => 'index']);
           }
           else{
                $this->Flash->error(__('The job could not be saved. Please, try again.'));
           }
       }
       $this->loadModel('Employers');
       
       
       $emp =$this->Employers->find("all")->select(['id','first_name'])->toArray();
$this->set(compact('emp')); // pass result dataset to the view
       $this->set('job',$job);
   }
   
   public function email($id=null,$emp_id){
      $emploers=$this->loadModel("Employers");
        $token= substr(md5(rand(9,999)), 1,30);
        $query = $emploers->query();
        $query->update()
            ->set(['token' => $token])
            ->where(['id' => $emp_id])
            ->execute();
      $employer=$emploers
        ->find()
         ->where(['id' => $emp_id])
          ->first();
       if($this->request->is('get')){
        $link = '<a href="http://localhost/testproject/jobs/edit/'.$id.'?token='.$token.'"><h2>This is link</h2> </a>';
       $email = new Email('default');
       $email->emailFormat('html');
        $email->from(['hamidkhanzai@gmail.com' => 'My Site'])
        ->to($employer->email)
        ->subject('About')
         
        ->send("<p>Dear Reviewer,</p> <p>You have been invited by the Head of Faculty  </p>".$link);

            $this->Flash->success(__('Email Successfuly sent. please clink on link to update the Jobs. Thanks .'));
        $this->redirect(['action'=>'index']);
       }
   }
   
   public function edit($id=null,$token=null){
       
        $emploers=$this->loadModel("Employers");
       $job = $this->Jobs->get($id);
       $employer=$emploers
        ->find()
        ->where(['id' =>$job->employer_id])
        ->first();
   if($this->request->is('get') && $employer->token!=$this->request->query('token')){
        $this->Flash->error(__('You are not allowed to update the job!'));
        $this->redirect(['action'=>'index']);
   }
	        if ($this->request->is(['post', 'put']) && $employer->token==$this->request->query('token')) {

	            $this->Jobs->patchEntity($job, $this->request->data);

	            if ($this->Jobs->save($job)) {

	                $this->Flash->success(__('Your Job has been updated.'));

	                return $this->redirect(['action' => 'index']);

	            }

	            $this->Flash->error(__('Unable to update your Job.'));

	        }

	     $this->set('token',$this->request->query('token'));
	        $this->set('job', $job);
   }
   
}

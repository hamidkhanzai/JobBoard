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
}

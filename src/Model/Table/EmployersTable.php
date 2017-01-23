<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;
/**
 * Description of EmployersTable
 *
 * @author Administrator
 */
class EmployersTable extends Table{
    //put your code here
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }
    
    public function Fill(){
        return $this->find("all")->select(['id','first_name'])->toArray();
    }
}

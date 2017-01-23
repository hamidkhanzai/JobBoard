<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JobesTable
 *
 * @author Administrator
 */
namespace App\Model\Table;
use Cake\ORM\Table;
class JobesTable extends \Cake\Database\Schema\Table{
    //put your code here
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}

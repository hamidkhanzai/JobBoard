<h2>List Jobs</h2>

        
        <table class="table">
            <tr>
            <th>Jobs Title</th>
            <th>Jobs Type</th>
            <th>Action</th>
           </tr>
       <?php foreach ($jobs as $job): ?>
            
            <tr>
                <td> <?= $job->title; ?></td>
                <td><?= ($job->type==1?"Software":"Other");?></td>
                <td>
              <?=  $this->Html->link('My Link',  ['action' => 'view', $job->id]) ?>
                    | <?= $this->Html->link("Edit",['action'=>'email', $job->id,$emp_id=$job->employer_id]) ?>
                    
                </td>
            </tr>
            
             <?php endforeach; ?>
        </table>
<?=$this->html->link("Create Jobs",['action'=>'add']) ?>
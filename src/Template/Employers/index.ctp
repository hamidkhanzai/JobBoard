<h2>List Jobs</h2>

        
        <table class="table">
            <tr>
            <th>Jobs Title</th>
            <th>Jobs Type</th>
            <th>Action</th>
           </tr>
       <?php foreach ($employers as $emp): ?>
            
            <tr>
                <td> <?= $emp->first_name."   ". $emp->last_name; ?></td>
                <td><?= $emp->email?></td>
                <td>
              <?=  $this->Html->link('My Link',  ['action' => 'view', $emp->id]) ?>
                    | <?= $this->Html->link("Edit",['action'=>'email', $emp->id]) ?>
                    
                </td>
            </tr>
            
             <?php endforeach; ?>
        </table>
<?=$this->html->link("Create Account",['action'=>'add']) ?>
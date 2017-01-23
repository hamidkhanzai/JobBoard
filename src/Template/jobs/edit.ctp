<h2>Create Job</h2>
<?php

echo $this->Form->create($job);
 
echo $this->Form->input('title');
echo $this->Form->input('type');
echo $this->Form->input('summery');


echo $this->Form->button(__('Update Job'));
 $this->Form->end();
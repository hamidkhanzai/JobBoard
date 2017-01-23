<h2>Create Job</h2>
<?php

echo $this->Form->create("Job");
echo "<select name='employer_id'>
  <option value='1'>Volvo</option>
  <option value='2'>Saab</option>
  <option value='3'>Fiat</option>
  <option value='4'>Audi</option>
</select>";
echo $this->Form->select('articles_categories_id', $emp) ;
echo $this->Form->input('title');
echo $this->Form->input('type');
echo $this->Form->input('summery');


echo $this->Form->button(__('Save Job'));
 $this->Form->end();
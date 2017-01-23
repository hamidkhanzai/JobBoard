<?php

echo $this->Form->create($employer);
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('email');
echo $this->Form->button(__('Save User'));
echo $this->Form->end();


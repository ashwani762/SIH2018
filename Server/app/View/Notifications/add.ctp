<?php

	echo $this->Form->create('Notification');
	echo $this->Form->input('train_no', ['type' => 'text', 'label'=>'Train No']);
	echo $this->Form->input('messages', array('type' => 'textarea', 'label' => 'Enter the message'));
	echo $this->Form->input('done', ['type' => 'checkbox', 'label'=>'Important','value' => 555]);
	echo $this->Form->end('Send');
?>
<?php

class NotificationsController extends AppController{

	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');

	public $isChecked = false;
	
	public function add(){
		if($this->request->is('post')){
			$this->Notification->create();
			if($this->Notification->save($this->request->data)){
				$this->Flash->success(__('Messages added'));
				$isChecked = $this->request->data["Notification"]["done"];
				if($isChecked){
					//TODO
					echo "done";
				}
				return $this->redirect(array('action' => 'add'));
			}

			$this->Flash->error(__('Error'));	
		}
	}

	public function fetch(){
		$messages = $this->Notification->find('all');
		$this->set(array(
			'notification' => $messages,
			'_serialize' => array('notification')
			));
	}
}
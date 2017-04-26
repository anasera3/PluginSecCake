<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author Anas
 */
class Post extends AppModel {
    
    
    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        
  
        
        $this->data['Post']['content']=Purifier::clean($this->data['Post']['content'], 'ConfigName');
        $this->data['Post']['test']=Purifier::clean($this->data['Post']['test'], 'ConfigName');
//        $this->data['Post']['test'];
//        $this->data['Post']['content'];
        
    }
    //put your code here
}

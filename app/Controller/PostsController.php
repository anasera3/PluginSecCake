<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostsController
 *
 * @author Anasfunction __construct() {
//		//The xml file is in its insecure default location.
//		//We would normally have all referenced libraries outside of the webroot.
//		$this->esapi = new ESAPI('/ESAPI.xml');
//		ESAPI::setEncoder(new DefaultEncoder());
//		ESAPI::setValidator(new DefaultValidator());
//		$this->encoder = ESAPI::getEncoder();
//		$this->validator = ESAPI::getValidator();
//	}
//        
 */
class PostsController extends AppController{

    public function index(){
//        header( "X-Content-Security-Policy: default-src 'self'" ); // Firefox
//header( "X-WebKit-CSP: default-src 'self'" ); // Chrome, Safari
//header( "Content-Security-Policy: default-src 'none' ;script-src 'self' 'unsafe-inline'" );
//        app::import('/Plugin/HtmlPurifier/Lib/src/ESAPI.php');
//

//
       app::import('/Plugin/HtmlPurifier/Vendor/HtmlPurifier/library/HTMLPurifier.auto.php');
      
    
        if ($this->request->is('post')) {
           
            
            
         
			$this->Post->create();
			if ($this->Post->save( $this->request->data)) {
				echo 'ok seccess';
			} else {
				//$this->Flash->error(__('The week could not be saved. Please, try again.'));
			
                            echo'error';
                            
                        }
		}
        
    }
    
    public function view(){
        
        
            //  App::uses('Xml', 'Utility');
//*
// if (file_exists('https://sourceforge.net/p/mutillidae/git/ci/master/tree/owasp-esapi-php/src/ESAPI.xml')) {
//    $xml = simplexml_load_file('https://sourceforge.net/p/mutillidae/git/ci/master/tree/owasp-esapi-php/src/ESAPI.xml');
// 
//    print_r($xml);
//} else {
//    exit('Failed to open test.xml.');
//}
//        header("Content-Security-Policy: default-src 'self' fonts.googleapis.com "
//                . "fonts.gstatic.com; media-src 'none'; object-src 'none'; frame-src 'none'; style-src"
//                . " 'self' fonts.googleapis.com 'unsafe-inline' ; script-src 'self' 'unsafe-inline'");
//        
////

 
 
   
        
           
    
             //echo HTMLPurifier_ESAPI::test();
        
        
        
        
   }

    //put your code here
}

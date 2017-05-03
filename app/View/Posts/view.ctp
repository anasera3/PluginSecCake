


<?php




//debug(App::uses('HtmlPurifierAppController','HtmlPurifier.Controller'));
//
//
//
App::uses('ESAPI', 'HtmlPurifier.Vendor');

//HtmlPurifierComponent::test();


//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier.includes.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier.safe-includes.php';
//require ' C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\reference\DefaultEncoder.php ';
//app::import('/Plugin/HtmlPurifier/Vendor/HtmlPurifier/library/HTMLPurifier/codecs/Base64Codec.php');
//app::import('/Plugin/HtmlPurifier/Vendor/HtmlPurifier/library/HTMLPurifier.auto.php');
//app::import('/Plugin/HtmlPurifier/Vendor/HtmlPurifier/library/HTMLPurifier.includes.php');
//HTMLPurifier.includes
//$xml=simplexml_load_file('../../Plugin/HtmlPurifier/Vendor/HtmlPurifier/library/ESAPI.xml');
//$vara =new HTMLPurifier_ESAPI('/app/lib/ESAPI.xml');
//HTMLPurifier_ESAPI::setEncoder(new HTMLPurifier_DefaultEncoder());
//
//C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\reference\DefaultEncoder.php
//function __construct() {
//		
//
 
//Purifier::clean('hhhh<scrip>');
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier.auto.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier.includes.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\reference\DefaultEncoder.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\reference\DefaultEncoder.php';

//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\ESAPI.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\Base64Codec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\CSSCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\HTMLEntityCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\JavaScriptCodec.php';
////require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\JavaScriptCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\MySQLCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\PercentCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EnterpriseSecurityException.php';
//
//
//
//
////require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\ESAPI.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AccessControlException.php';
////require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationAccountsException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationCredentialsException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationHostException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationLoginException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AvailabilityException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\CertificateException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EncodingException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EncryptionException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ExecutorException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\IntegrityException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ValidationAvailabilityException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ValidationUploadException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\filters\SafeRequest.php';
//$r = new HTMLPurifier_ESAPI('C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Config\ESAPI.xml');


//debug($r->getSecurityConfiguration());


//$h=$r::getEncoder()->decodeFromBase64(array(""),'Ij48c2NyaXB0PmFsZXJ0KC9YU1MvKTwvc2NyaXB0Pjxmb28gYXR0cj0i');
//$h=$r::getEncoder()->encodeForCSS('background:expression(window.x?0:(alert(/XSS/),window.x=1));');
//echo $h;

//$c='10';
//$r=HTMLPurifier_Base64Codec::toHex($c);
//
//$tt=new HTMLPurifier_CSSCodec();
//$ldap=new LDAPCodec();
//$en=new HTMLPurifier_EnterpriseSecurityException(); ca marche plus 
//
//$r->currentRequest();
//debug($r->currentRequest());
//$req=new HTMLPurifier_SafeRequest(array('env' => array()));



//Test of SafeRequest::getAuthType() with null input.
//$req = new  HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getAuthType();
//        
//                debug($result);
        //    Test of SafeRequest::getAuthType() with invalid input.    
//             $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'AUTH_TYPE' => 'B-asic'
//                )
//            )
//        );
//        $result = $req->getAuthType();
//       debug($result);  
                
           
       
////       Test of SafeRequest::getAuthType() with valid input
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'AUTH_TYPE' => 'bAsic'
//                )
//            )
//        );
//        $result = $req->getAuthType();
//        debug($result);
//       


////      Test of SafeRequest::getContentLength() with null input.
//     
//    
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getContentLength();
//        
//        debug($result);
        
////Test of SafeRequest::getContentLength() with invalid input.
//
//       $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'CONTENT_LENGTH' => '-1'
//                )
//            )
//        );
//        $result = $req->getContentLength();
//        debug($result);
//        
        
//        // Test of SafeRequest::getContentLength() with valid input.
//        
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'CONTENT_LENGTH' => '1024'
//                )
//            )
//        );
//        $result = $req->getContentLength();
//        debug($result);
//        
//        
//        
////Test of SafeRequest::getContentType() with null input.        
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getContentType();
//        debug($result);
//        
  
////Test of SafeRequest::getContentType() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'CONTENT_TYPE' => 'application/ürl-form-encoded'
//                )
//            )
//        );
//        $result = $req->getContentType();
//        debug($result);
//
////Test of SafeRequest::getContentType() with valid input.
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'CONTENT_TYPE' => 'application/url-form-encoded'
//                )
//            )
//        );
//        $result = $req->getContentType();
//        debug($result);

//        
////        Test of SafeRequest::getPathInfo() with invalid input.
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PATH_INFO' => '/foo%00'
//                )
//            )
//        );
//        $result = $req->getPathInfo();
//        debug($result);

        
        
//        //Test of SafeRequest::getPathInfo() with valid input.
//        
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PATH_INFO' => '/foo'
//                )
//            )
//        );
//        $result = $req->getPathInfo();
//        debug($result);


//Test of SafeRequest::getPathTranslated() with null input.
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getPathTranslated();
//        debug($result);

//        
// /**
//     * Test of SafeRequest::getPathTranslated() with invalid input.
//     * 
//     * @return bool true True on Pass.
//     */
//   
//    
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PATH_TRANSLATED' => '/foo%00'
//                )
//            )
//        );
//        $result = $req->getPathTranslated();
//
//debug($result
//

//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PATH_TRANSLATED' => '/foo'
//                )
//            )
//        );
//        $result = $req->getPathTranslated();
//debug($result);
//
////Test of SafeRequest::getQueryString() with null input.
//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getQueryString();
//        debug($result);
//        

////        Test of SafeRequest::getQueryString() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'QUERY_STRING' => 'foo#bar'
//                )
//            )
//        );
//        $result = $req->getQueryString();
//        
//        // Test of SafeRequest::getQueryString() with valid input.
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'QUERY_STRING' => 'foo=bar'
//                )
//            )
//        );
//        $result = $req->getQueryString();
//        debug($result);
//        
//        
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getRemoteAddr();

//
////Test of SafeRequest::getRemoteAddr() with invalid input.
//
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_ADDR' => '123.456.7.89'
//                )
//            )
//        );
//        $result = $req->getRemoteAddr();
//
//debug($result);

//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_ADDR' => '123.45.67.89'
//                )
//            )
//        );
//        $result = $req->getRemoteAddr();
//debug($result);



////Test of SafeRequest::getRemoteHost() with null input
////
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//debug($result);
//


//
////Test of SafeRequest::getRemoteHost() with invalid input.
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => 'example%com'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//debug($result);
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => '123.45.67.89'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//debug($result);       
//
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => '-example.com'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//debug($result);        


//// Test of SafeRequest::getRemoteHost() with valid input.
//
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => 'example.com'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//        debug($result);  
//        $req = new  HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => '0example0.com'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();
//       debug($result);  
//
//        $req = new  HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_HOST' => 'foo-bar.0example0.com'
//                )
//            )
//        );
//        $result = $req->getRemoteHost();

//
////Test of SafeRequest::getRemoteHost() with null input.
//
//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//        )
//            );
//        $result = $req->getRemoteUser();
//
//debug($result);
//

//
////Test of SafeRequest::getRemoteUser() with invalid input.
//
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_USER' => 'user:1'
//                )
//            )
//        );
//        $result = $req->getRemoteUser();
//        
//        
//        debug($result);

//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REMOTE_USER' => 'user_1'
//                )
//            )
//        );
//        $result = $req->getRemoteUser();
//debug($result);



        
//        $this->assertInternalType('int', $result);
//        $this->assertEquals(0, $result); 
        
       //Test of SafeRequest::getMethod() with null input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getMethod();
//
//       debug($result);
//       
//       
  
//
// $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'REQUEST_METHOD' => 'GETS'
//                )
//            )
//        );
//        $result = $req->getMethod();
//        
//        debug($result);
//        
//        
//        
        
// Test of SafeRequest::getRequestURI() with invalid input.


//        
////        Test of SafeRequest::getRequestURI() with valid input.
//        
//         $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SCRIPT_NAME' => '/foo/bar.php'
//                )
//            )
//        );
//        $result = $req->getRequestURI();
//        debug($result);
//        
////        Test of SafeRequest::getServerName() with null input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getServerName();
//                debug($result);
//
//
//// Test of SafeRequest::getServerName() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_NAME' => '0123456789012345678901234567890123456789012345678901234567890123.com'
//                )
//            )
//        );
//        $result = $req->getServerName();
//       debug($result);
//
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_NAME' => '123.456.7.89'
//                )
//            )
//        );
//        $result = $req->getServerName();
//         debug($result);
//
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_NAME' => 'example%com'
//                )
//            )
//        );
//        $result = $req->getServerName();
//  debug($result);
//Test of SafeRequest::getServerName() with valid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_NAME' => '123.45.67.89'
//                )
//            )
//        );
//        $result = $req->getServerName();
//        debug($result);
//        $req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_NAME' => 'example.com'
//                )
//            )
//        );
//        $result = $req->getServerName();
//        debug($result);
//
//        

////Test of SafeRequest::getServerPort() with null input.
//  
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getServerPort();
//          debug($result);

        
//        
//        $this->assertInternalType('string', $result);
//        $this->assertEquals('', $result);
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'AUTH_TYPE' => 'bAsic'
//                )
//            )
//        );

////Test of SafeRequest::getServerPort() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'SERVER_PORT' => '65536'
//                )
//            )
//        );
//        $result = $req->getServerPort();
//
//debug($result);

     //  $result = $req->getAuthType();
////Test of SafeRequest::getHeader() with null input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'headers' => array(
//                )
//            )
//        );
//        $result = $req->getHeader('HTTP_ACCEPT');
//        debug($result);
//        
////Test of SafeRequest::getHeader() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'headers' => array(
//                    'HTTP_ACCEPT' => '%00text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'
//                )
//            )
//        );
//        $result = $req->getHeader('HTTP_ACCEPT');
//        debug($result);
//

//// Test of SafeRequest::getHeader() with valid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'headers' => array(
//                    'HTTP_ACCEPT' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'
//                )
//            )
//        );
//        $result = $req->getHeader('HTTP_ACCEPT');
//        debug($result);
        // Test of SafeRequest::getCookie() with null input.
//
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'cookies' => array(
//                )
//            )
//        );
//        $result = $req->getCookie('foo');
//        debug($result);
//       
////Test of SafeRequest::getCookie() with invalid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'cookies' => array(
//                    'foo' => '\r\n\r\nGET /foo HTTP/1.1\r\nHost:example.com\r\n\r\n<html><script>alert(1)</html></script>'
//                )
//            )
//        );
//        $result = $req->getCookie('foo');
//        debug($result);
//      
////Test of SafeRequest::getCookie() with valid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'cookies' => array(
//                    'foo' => 'bar'
//                )
//            )
//        );
//        $result = $req->getCookie('foo');
//        debug($result);
////Test of SafeRequest::getServerGlobal() with null input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                )
//            )
//        );
//        $result = $req->getServerGlobal('foo');
//        debug($result);
//
////Test of SafeRequest::getServerGlobal() with double encoding.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PHP_SELF' => '/foo%252fbar'
//                )
//            )
//        );
//        $result = $req->getServerGlobal('PHP_SELF');
//debug($result);
// 
//Test of SafeRequest::getServerGlobal() with valid input.
//$req = new HTMLPurifier_SafeRequest(
//            array(
//                'env' => array(
//                    'PHP_SELF' => '/foo%2fbar'
//                )
//            )
//        );
//        $result = $req->getServerGlobal('PHP_SELF');
//debug($result);


//$y=$r->getEncoder();


//debug($encoding);



//$immune = array("");
//$c='\\3c ';
//$c='\\3cYEEHAA';
 //$tt->encode($immune, 'background:expression(window.x?0:(alert(/XSS/),window.x=1));');
//$decodage=$tt->decode('background\3a expression\28 window\2e x\3f 0\3a \28 alert\28 \2f XSS\2f \29 \2c window\2e x\3d 1\29 \29 \3b');
//$tt->decodeCharacter($input);

//$en
//$tt->decode()
//$encodecarater=$tt->encodeCharacter($immune,$c);
//$decodecarter=$tt->decodeCharacter($immune,$c);

        


//debug($tt->encode($immune, "<"));
 //echo $decodecarter;


//$yy=new HTMLPurifier_Base64Codec();
//$tt=new HTMLpurifier_HTMLEntityCodec();
//$t=new HTMLPurifier_percentCodec(); 
//
//$parcent=$t->decode('%22%3B%20ls%20%2F%20%3E%20%2Ftmp%2Ffoo%3B%20%23%20');
//        debug($parcent);
      

       
//$j=new HTMLPurifier_MySQLCodec();

//->encode($immune, '"; ls / > /tmp/foo; # ');
//$lm=$j->decode('\)\ or\ \(\'1\'\=\'1\-\-\'');
//debug($lm);
//$lm=$j->encodeCharacter($immune,") or ('1'='1--'");
//debug($lm);

//$lm=$j->decodeCharacter('""');

//$jc=new JavaScriptCodec();
//$java=$jc->encodeCharacter($immune, '<');
//debug($java);

//$java=$jc->decode('\x22\x3B\x20eval\x28alert\x28\x2FXSS\x2F\x29\x29\x3B');









//$t=new HTMLPurifier
 
 
// $yy->encode('"><script>alert(/XSS/)</script><foo attr="');

 //$ff=$tt->encode($immune, '"><script>alert(/XSS/)</script><foo attr="'); 
 
//$ff=$tt->decode('&quot;&gt;&lt;script&gt;alert&#x28;&#x2f;XSS&#x2f;&#x29;&lt;&#x2f;script&gt;&lt;foo attr&#x3d;&quot;');
// debug($ff);
 
 //debug();
// '&quot;&gt;&lt;script&gt;alert&#x28;&#x2f;XSS&#x2f;&#x29;&lt;&#x2f;script&gt;&lt;foo attr&#x3d;&quot;'
 
 

 
 





//
//
//$decod=$tt->decode('Ij48c2NyaXB0PmFsZXJ0KC9YU1MvKTwvc2NyaXB0Pjxmb28gYXR0cj0i');
//debug($decod);
      //  $t= HTMLPurifier_Base64Codec::encode('"><script>alert(/XSS/)</script><foo attr="');
 //echo $r;



//echo $t; 
//
//// ca marche 
// 
//debug($r->getIntrusionDetector());



//je suis dans etat tres formaidable pour faire un projet de grand qualité dans ce domaine de securité je peut faire mon max 
//rappeler vous de toutes choses que vous avez vecu dans votre 1200 dh etc ... il faut etre riche si tu veut rester survivez dans cette vie de merde ... 
//$p=new HTMLPurifier_URI;


//$r->getEncoder();


//$rt=new HTMLPurifier_DefaultEncoder();

//app/Vendor/flickr/flickr.php
//debug(App::import('Plugin', 'HtmlPurifier','Vendor','HtmlPurifier','library', array('file' => '/HtmlPurifier/Vendor/HtmlPurifier/library/HTMLPurifier.auto.php')));
//debug(App::import('Vendor','t','test'));
//debug($r);
//$t=new HTMLPurifier_DefaultEncoder;
//debug($t);





//HTMLPurifier_CSSCodec::toHex($c);
//$c='10';
//HTMLPurifier_Base64Codec::toHex($c);


//debug($r);
//echo 'test'; 
//$r->test();
//$r->getAccessController();
//$r->getEncoder();
//
//

//$c='11';
//$ba= new HTMLPurifier_Base64Codec;

//$ba->afficber();
//HTMLPurifier_Encoder1::iconvAvailable();



//$r->currentRequest($r);
//$r->currentResponse();
//$r->getAccessController();
//$r->getAuditor($logger);
//$r->getEncryptor();
//$r->getHttpUtilities();
//$r->getIntrusionDetector();
//$r->getRandomizer();
//$r->getSanitizer();
//$r->getSecurityConfiguration();
//$r->getValidator();
//$r->setAccessController($accessController);
//$r->setAuditorFactory($factory);
//$r->setHttpUtilities($httpUtilities);
//$r->setIntrusionDetector($intrusionDetector);
//$r->setRandomizer($randomizer);
//$r->setSecurityConfiguration($securityConfiguration);
//$r->setValidator($validator);








//debug($r);

//$tests=new HTMLPurifier_SafeRequest('C:/xampp/htdocs/mssipfe/app/Plugin/HtmlPurifier/Config/ESAPI.xml');

//$r->getEncoder();
//debug($r->getExecutor());
 

        

//debug($r->getAccessController());
//encode('"><script>alert(/XSS/)</script><foo attr="');
//debug($r->currentRequest());
//$c='!';
//$res=HTMLPurifier_Base64Codec::getHexForNonAlphanumeric($c);

//Codec::encodeCharacter($immune, $c);
//echo $res;
//HTMLPurifier_Base64Codec::normalizeEncoding('hhhhsdgggsd');

//debug($r->getValidator());
//debug($r->getExecutor());


//
////HTMLPurifier_DefaultEncode
////debug($r);
//$rr=new HTMLPurifier_SafeFile('C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Config\ESAPI.xml');
//
//$r->currentRequest();

//$t=new HTMLPurifier_DefaultEncoder('Ij48c2NyaXB0PmFsZXJ0KC9YU1MvKTwvc2NyaXB0Pjxmb28gYXR0cj0i');

//HTMLPurifier_ESAPI::setEncoder(new HTMLPurifier_DefaultEncoder());

//debug($rr);
//debug($r);
//$r::currentRequest();
//HTMLPurifier_ESAPI::setEncoder($encoder)

//DefaultEncoder



//debug($r::getRandomizer());

//HTMLPurifier_ESAPI::setEncoder(new HTMLPurifier_DefaultEncoder());
		//HTMLPurifier_ESAPI::setValidator(new HTMLPurifier_DefaultValidator());
//		$this->encoder = ESAPI::getEncoder();
//		$this->validator = ESAPI::getValidator();
//  
//  HTMLPurifier_ESAPI::setEncoder(new HTMLPurifier_DefaultEncoder());
//	 HTMLPurifier_ESAPI::setValidator(new HTMLPurifier_DefaultValidator());
//                 $this->encoder =  HTMLPurifier_HTMLPurifier_ESAPI::getEncoder();
//		$this->validator = HTMLPurifier_ESAPI::getValidator();
//    
//	}
        
     // app::import('/Lib/test.php');
      
      
      //test::afficher();
      
     
//   
//      
   // $xml = Xml::build('/app/View/Posts/ESAPI.xml');
        
        
     
        
        //$string=''
        
//       
      

     
        
        // $this->esapi = new HTMLPurifier_ESAPI('../../Vendor/ESAPI.xml');
        
//        $path = 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Config\ESAPI.xml';
//if(!$xml = simplexml_load_file($path))
//  exit('Failed to open '.$path);
//print_r($xml);
         //debug($this->esapi);
//      $r->currentRequest();
        
//        canonicalize('qjshqjshqjshqjs654545qs');
//          function canonicalize($input) {
//		try {
//		$input = $this->encoder->canonicalize($input);
//		} catch (IntrusionException $e) {
//		echo($e->getUserMessage());
//		exit();
//		}
//	return $input;
//	}


        
        
        
//$rr= HTMLPurifier_ESAPI::getEncoder();
//$r::currentRequest();// xpath erreur
//HTMLPurifier_ESAPI::currentResponse();

//$r=HTMLPurifier_ESAPI::getAccessController();//ok ca marche xpath erreur
//$vari=$r::getAuditor();// xpath erreur

//
//HTMLPurifier_ESAPI::getEncoder(); //xpath errueur
//HTMLPurifier_ESAPI::getEncoder();xpath errueur
//HTMLPurifier_ESAPI::getExecutor(); xpath 

//HTMLPurifier_ESAPI::getHttpUtilities();// xpath() on null

//$r::getIntrusionDetector(); // xpath on null 
 
//HTMLPurifier_ESAPI::getRandomizer(); // ook 

//HTMLPurifier_ESAPI::getSanitizer(); //redeclaratio de bootsrap  car vous avez  reappeller htmlpurifier
//$vari=$r::getSecurityConfiguration();// ok ca marche
//debug($vari);

//HTMLPurifier_ESAPI::getSecurityConfiguration('/ESAPI.xml');// ok ca marche

//HTMLPurifier_ESAPI::getValidator();  //redeclaratio de bootsrap  car vous avez  reappeller htmlpurifier 

//HTMLPurifier_ESAPI::log();//getLogger() on null  
//HTMLPurifier_ESAPI::setAccessController($r);//ok ca marche pour cette instruction 



?>

 
<!--<div><script>alert('teste');</script></div>-->



<?php //echo HTMLPurifier_ESAPI::test();  ?>
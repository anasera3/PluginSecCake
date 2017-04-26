


<?php
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

require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\ESAPI.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\Base64Codec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\CSSCodec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\HTMLEntityCodec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\JavaScriptCodec.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\JavaScriptCodec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\MySQLCodec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\codecs\PercentCodec.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EnterpriseSecurityException.php';




//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\ESAPI.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AccessControlException.php';
//require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationAccountsException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationCredentialsException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationHostException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AuthenticationLoginException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\AvailabilityException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\CertificateException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EncodingException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\EncryptionException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ExecutorException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\IntegrityException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ValidationAvailabilityException.php';
require 'C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Vendor\HtmlPurifier\library\HTMLPurifier\errors\ValidationUploadException.php';
$r = new HTMLPurifier_ESAPI('C:\xampp\htdocs\mssipfe\app\Plugin\HtmlPurifier\Config\ESAPI.xml');


//debug($r->getSecurityConfiguration());


//$h=$r::getEncoder()->decodeFromBase64(array(""),'Ij48c2NyaXB0PmFsZXJ0KC9YU1MvKTwvc2NyaXB0Pjxmb28gYXR0cj0i');
//$h=$r::getEncoder()->encodeForCSS('background:expression(window.x?0:(alert(/XSS/),window.x=1));');
//echo $h;

//$c='10';
//$r=HTMLPurifier_Base64Codec::toHex($c);
//
$tt=new HTMLPurifier_CSSCodec();
//$ldap=new LDAPCodec();
$en=new HTMLPurifier_EnterpriseSecurityException();







$immune = array("");
//$c='\\3c ';
//$c='\\3cYEEHAA';
 //$tt->encode($immune, 'background:expression(window.x?0:(alert(/XSS/),window.x=1));');
//$decodage=$tt->decode('background\3a expression\28 window\2e x\3f 0\3a \28 alert\28 \2f XSS\2f \29 \2c window\2e x\3d 1\29 \29 \3b');
//$tt->decodeCharacter($input);

$en
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
<?php

// check if mcrypt is loaded
if (!defined('MCRYPT_MODE_ECB')) {
    require_once 'phpseclib/Crypt/Base.php';
    require_once 'phpseclib/Crypt/Rijndael.php';
    require_once 'phpseclib/Crypt/Twofish.php';
    require_once 'phpseclib/Crypt/Blowfish.php';
    require_once 'phpseclib/Crypt/DES.php';
    require_once 'phpseclib/Crypt/TripleDES.php';
    require_once 'phpseclib/Crypt/RC2.php';
    require_once 'phpseclib/Crypt/RC4.php';
    require_once 'phpseclib/Crypt/Random.php';
    require_once dirname(__FILE__).'/src/lib/mcrypt.php';
}
require_once MAGENTO_ROOT.'/lib/Varien/Crypt/Mcrypt.php';

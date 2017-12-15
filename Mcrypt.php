<?php

// check if mcrypt is loaded
if (!defined('MCRYPT_MODE_ECB')) {
    require_once 'phpseclib'.DS.'Crypt'.DS.'Base.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'Rijndael.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'Twofish.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'Blowfish.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'DES.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'TripleDES.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'RC2.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'RC4.php';
    require_once 'phpseclib'.DS.'Crypt'.DS.'Random.php';
    require_once __DIR__.DS.'src'.DS.'lib'.DS.'mcrypt.php';
}
$dir = '';
if (defined('MAGENTO_ROOT'))
{
    $dir = MAGENTO_ROOT;
} else {
    $dir = BP;
}

require_once $dir.''.DS.'lib'.DS.'Varien'.DS.'Crypt'.DS.'Mcrypt.php';

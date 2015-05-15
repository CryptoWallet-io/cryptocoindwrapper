<?php
  /**
   * Created by PhpStorm.
   * Author: James Kirkby
   * www.cryptowallet.io
   * Date: 14/05/2015
   * Time: 15:30
   */

  require_once("coindwrapper.php");

  $config['bitcoin']['host'] = '192.168.1.123';
  $config['bitcoin']['port'] = '18332';
  $config['bitcoin']['user'] = 'bitcoinrpc';
  $config['bitcoin']['pass'] = '3yQSphBExsrmHJgSFtUvH5zNezzumRqvar9sV4DpigGY';

  $config['litecoin']['host'] = '';
  $config['litecoin']['port'] = '';
  $config['litecoin']['user'] = '';
  $config['litecoin']['pass'] = '';

  $config['dogecoin']['host'] = '';
  $config['dogecoin']['port'] = '';
  $config['dogecoin']['user'] = '';
  $config['dogecoin']['pass'] = '';


  $coind_wrapper = new coindWrapper($config['bitcoin']);

echo $coind_wrapper->addMultiSignatureAddress($nrequired =3, array('12gaNeUEanNDLTvQavkM8A3LrMDLRaKVVp','15zxRo2zhiWZDCuyxwHiijVVYzfSm5eJ9Y','1FHcj5AUgndprZ6WJz5LL3nuA8AFeBRWV3'), $account = 'jon');
echo $coind_wrapper->getInfo();


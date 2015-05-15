<?php
/**
 * Created by PhpStorm.
 * Author: James Kirkby
 * www.cryptowallet.io
 * Date: 14/05/2015
 * Time: 13:42
 */


  namespace cryptocoindwrapper\rpcfunctions\Rpc;

  require_once('JsonRpcClient.php');

  use cryptocoindwrapper\rpcfunctions\JsonRpc\JsonRpcClient;

  class RpcFactory
  {
    /**
     * @param $host
     * @param $port
     * @param $user
     * @param $password
     * @param int $timeout
     * @param array $headers
     * @return Bitcoind
     */
    public static function coind($username, $password, $host, $port) {

      return new JsonRpcClient($username, $password, $host, $port);

    }
  }

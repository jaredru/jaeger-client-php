<?php
namespace Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Tag extends TBase {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'key',
      'isRequired' => true,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'vType',
      'isRequired' => true,
      'type' => TType::I32,
      ),
    3 => array(
      'var' => 'vStr',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    4 => array(
      'var' => 'vDouble',
      'isRequired' => false,
      'type' => TType::DOUBLE,
      ),
    5 => array(
      'var' => 'vBool',
      'isRequired' => false,
      'type' => TType::BOOL,
      ),
    6 => array(
      'var' => 'vLong',
      'isRequired' => false,
      'type' => TType::I64,
      ),
    7 => array(
      'var' => 'vBinary',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $key = null;
  /**
   * @var int
   */
  public $vType = null;
  /**
   * @var string
   */
  public $vStr = null;
  /**
   * @var double
   */
  public $vDouble = null;
  /**
   * @var bool
   */
  public $vBool = null;
  /**
   * @var int
   */
  public $vLong = null;
  /**
   * @var string
   */
  public $vBinary = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'Tag';
  }

  public function read($input)
  {
    return $this->_read('Tag', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('Tag', self::$_TSPEC, $output);
  }

}


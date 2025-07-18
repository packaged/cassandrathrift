<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.22.0)
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

class KeyCount extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'key',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'count',
            'isRequired' => true,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $key = null;
    /**
     * @var int
     */
    public $count = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'KeyCount';
    }


    public function read($input)
    {
        $tmp = $this->_read('KeyCount', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('KeyCount', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->key === null) {
            throw new TProtocolException('Required field KeyCount.key is unset!');
        }
        if ($this->count === null) {
            throw new TProtocolException('Required field KeyCount.count is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->key === null) {
            throw new TProtocolException('Required field KeyCount.key is unset!');
        }
        if ($this->count === null) {
            throw new TProtocolException('Required field KeyCount.count is unset!');
        }
    }
}

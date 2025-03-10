<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.21.0)
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

class CounterColumn extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'value',
            'isRequired' => true,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $name = null;
    /**
     * @var int
     */
    public $value = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'CounterColumn';
    }


    public function read($input)
    {
        $tmp = $this->_read('CounterColumn', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('CounterColumn', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->name === null) {
            throw new TProtocolException('Required field CounterColumn.name is unset!');
        }
        if ($this->value === null) {
            throw new TProtocolException('Required field CounterColumn.value is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->name === null) {
            throw new TProtocolException('Required field CounterColumn.name is unset!');
        }
        if ($this->value === null) {
            throw new TProtocolException('Required field CounterColumn.value is unset!');
        }
    }
}

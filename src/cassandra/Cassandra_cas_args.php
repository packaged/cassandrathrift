<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
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

class Cassandra_cas_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'key',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'column_family',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'expected',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\cassandra\Column',
                ),
        ),
        4 => array(
            'var' => 'updates',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\cassandra\Column',
                ),
        ),
        5 => array(
            'var' => 'serial_consistency_level',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        6 => array(
            'var' => 'commit_consistency_level',
            'isRequired' => true,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $key = null;
    /**
     * @var string
     */
    public $column_family = null;
    /**
     * @var \cassandra\Column[]
     */
    public $expected = null;
    /**
     * @var \cassandra\Column[]
     */
    public $updates = null;
    /**
     * @var int
     */
    public $serial_consistency_level =     9;
    /**
     * @var int
     */
    public $commit_consistency_level =     2;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_cas_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_cas_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_cas_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->key === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.key is unset!');
        }
        if ($this->column_family === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.column_family is unset!');
        }
        if ($this->serial_consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.serial_consistency_level is unset!');
        }
        if ($this->commit_consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.commit_consistency_level is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->key === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.key is unset!');
        }
        if ($this->column_family === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.column_family is unset!');
        }
        if ($this->expected === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.expected is unset!');
        }
        if ($this->updates === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.updates is unset!');
        }
        if ($this->serial_consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.serial_consistency_level is unset!');
        }
        if ($this->commit_consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_cas_args.commit_consistency_level is unset!');
        }
    }
}

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

class Cassandra_truncate_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'cfname',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $cfname = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_truncate_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_truncate_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_truncate_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->cfname === null) {
            throw new TProtocolException('Required field Cassandra_truncate_args.cfname is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->cfname === null) {
            throw new TProtocolException('Required field Cassandra_truncate_args.cfname is unset!');
        }
    }
}

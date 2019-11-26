<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class Cassandra_set_keyspace_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'keyspace',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $keyspace = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_set_keyspace_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_set_keyspace_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_set_keyspace_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->keyspace === null) {
            throw new TProtocolException('Required field Cassandra_set_keyspace_args.keyspace is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->keyspace === null) {
            throw new TProtocolException('Required field Cassandra_set_keyspace_args.keyspace is unset!');
        }
    }
}

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

class Cassandra_prepare_cql3_query_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'query',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'compression',
            'isRequired' => true,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $query = null;
    /**
     * @var int
     */
    public $compression = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_prepare_cql3_query_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_prepare_cql3_query_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_prepare_cql3_query_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->query === null) {
            throw new TProtocolException('Required field Cassandra_prepare_cql3_query_args.query is unset!');
        }
        if ($this->compression === null) {
            throw new TProtocolException('Required field Cassandra_prepare_cql3_query_args.compression is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->query === null) {
            throw new TProtocolException('Required field Cassandra_prepare_cql3_query_args.query is unset!');
        }
        if ($this->compression === null) {
            throw new TProtocolException('Required field Cassandra_prepare_cql3_query_args.compression is unset!');
        }
    }
}

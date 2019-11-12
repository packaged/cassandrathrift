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

class Cassandra_get_multi_slice_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'request',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\cassandra\MultiSliceRequest',
        ),
    );

    /**
     * @var \cassandra\MultiSliceRequest
     */
    public $request = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_get_multi_slice_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_get_multi_slice_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_get_multi_slice_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->request === null) {
            throw new TProtocolException('Required field Cassandra_get_multi_slice_args.request is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->request === null) {
            throw new TProtocolException('Required field Cassandra_get_multi_slice_args.request is unset!');
        }
    }
}

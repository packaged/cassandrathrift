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

/**
 * Invalid request could mean keyspace or column family does not exist, required parameters are missing, or a parameter is malformed.
 * why contains an associated error message.
 */
class InvalidRequestException extends TException
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'why',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $why = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'InvalidRequestException';
    }


    public function read($input)
    {
        $tmp = $this->_read('InvalidRequestException', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('InvalidRequestException', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->why === null) {
            throw new TProtocolException('Required field InvalidRequestException.why is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->why === null) {
            throw new TProtocolException('Required field InvalidRequestException.why is unset!');
        }
    }
}

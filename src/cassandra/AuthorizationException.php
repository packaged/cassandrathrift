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

/**
 * invalid authorization request (user does not have access to keyspace)
 */
class AuthorizationException extends TException
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
        return 'AuthorizationException';
    }


    public function read($input)
    {
        $tmp = $this->_read('AuthorizationException', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('AuthorizationException', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->why === null) {
            throw new TProtocolException('Required field AuthorizationException.why is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->why === null) {
            throw new TProtocolException('Required field AuthorizationException.why is unset!');
        }
    }
}

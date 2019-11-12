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
 * RPC timeout was exceeded.  either a node failed mid-operation, or load was too high, or the requested op was too large.
 */
class TimedOutException extends TException
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'acknowledged_by',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'acknowledged_by_batchlog',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        3 => array(
            'var' => 'paxos_in_progress',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * if a write operation was acknowledged by some replicas but not by enough to
     * satisfy the required ConsistencyLevel, the number of successful
     * replies will be given here. In case of atomic_batch_mutate method this field
     * will be set to -1 if the batch was written to the batchlog and to 0 if it wasn't.
     * 
     * @var int
     */
    public $acknowledged_by = null;
    /**
     * in case of atomic_batch_mutate method this field tells if the batch
     * was written to the batchlog.
     * 
     * @var bool
     */
    public $acknowledged_by_batchlog = null;
    /**
     * for the CAS method, this field tells if we timed out during the paxos
     * protocol, as opposed to during the commit of our update
     * 
     * @var bool
     */
    public $paxos_in_progress = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TimedOutException';
    }


    public function read($input)
    {
        return $this->_read('TimedOutException', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('TimedOutException', self::$_TSPEC, $output);
    }

}
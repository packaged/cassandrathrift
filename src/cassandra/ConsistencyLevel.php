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
 * The ConsistencyLevel is an enum that controls both read and write
 * behavior based on the ReplicationFactor of the keyspace.  The
 * different consistency levels have different meanings, depending on
 * if you're doing a write or read operation.
 * 
 * If W + R > ReplicationFactor, where W is the number of nodes to
 * block for on write, and R the number to block for on reads, you
 * will have strongly consistent behavior; that is, readers will
 * always see the most recent write. Of these, the most interesting is
 * to do QUORUM reads and writes, which gives you consistency while
 * still allowing availability in the face of node failures up to half
 * of <ReplicationFactor>. Of course if latency is more important than
 * consistency then you can use lower values for either or both.
 * 
 * Some ConsistencyLevels (ONE, TWO, THREE) refer to a specific number
 * of replicas rather than a logical concept that adjusts
 * automatically with the replication factor.  Of these, only ONE is
 * commonly used; TWO and (even more rarely) THREE are only useful
 * when you care more about guaranteeing a certain level of
 * durability, than consistency.
 * 
 * Write consistency levels make the following guarantees before reporting success to the client:
 *   ANY          Ensure that the write has been written once somewhere, including possibly being hinted in a non-target node.
 *   ONE          Ensure that the write has been written to at least 1 node's commit log and memory table
 *   TWO          Ensure that the write has been written to at least 2 node's commit log and memory table
 *   THREE        Ensure that the write has been written to at least 3 node's commit log and memory table
 *   QUORUM       Ensure that the write has been written to <ReplicationFactor> / 2 + 1 nodes
 *   LOCAL_ONE    Ensure that the write has been written to 1 node within the local datacenter (requires NetworkTopologyStrategy)
 *   LOCAL_QUORUM Ensure that the write has been written to <ReplicationFactor> / 2 + 1 nodes, within the local datacenter (requires NetworkTopologyStrategy)
 *   EACH_QUORUM  Ensure that the write has been written to <ReplicationFactor> / 2 + 1 nodes in each datacenter (requires NetworkTopologyStrategy)
 *   ALL          Ensure that the write is written to <code>&lt;ReplicationFactor&gt;</code> nodes before responding to the client.
 * 
 * Read consistency levels make the following guarantees before returning successful results to the client:
 *   ANY          Not supported. You probably want ONE instead.
 *   ONE          Returns the record obtained from a single replica.
 *   TWO          Returns the record with the most recent timestamp once two replicas have replied.
 *   THREE        Returns the record with the most recent timestamp once three replicas have replied.
 *   QUORUM       Returns the record with the most recent timestamp once a majority of replicas have replied.
 *   LOCAL_ONE    Returns the record with the most recent timestamp once a single replica within the local datacenter have replied.
 *   LOCAL_QUORUM Returns the record with the most recent timestamp once a majority of replicas within the local datacenter have replied.
 *   EACH_QUORUM  Returns the record with the most recent timestamp once a majority of replicas within each datacenter have replied.
 *   ALL          Returns the record with the most recent timestamp once all replicas have replied (implies no replica may be down)..
 */
final class ConsistencyLevel
{
    const ONE = 1;

    const QUORUM = 2;

    const LOCAL_QUORUM = 3;

    const EACH_QUORUM = 4;

    const ALL = 5;

    const ANY = 6;

    const TWO = 7;

    const THREE = 8;

    const SERIAL = 9;

    const LOCAL_SERIAL = 10;

    const LOCAL_ONE = 11;

    static public $__names = array(
        1 => 'ONE',
        2 => 'QUORUM',
        3 => 'LOCAL_QUORUM',
        4 => 'EACH_QUORUM',
        5 => 'ALL',
        6 => 'ANY',
        7 => 'TWO',
        8 => 'THREE',
        9 => 'SERIAL',
        10 => 'LOCAL_SERIAL',
        11 => 'LOCAL_ONE',
    );
}

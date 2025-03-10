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

interface CassandraIf
{
    /**
     * @param \cassandra\AuthenticationRequest $auth_request
     * @throws \cassandra\AuthenticationException
     * @throws \cassandra\AuthorizationException
     */
    public function login(\cassandra\AuthenticationRequest $auth_request);
    /**
     * @param string $keyspace
     * @throws \cassandra\InvalidRequestException
     */
    public function set_keyspace($keyspace);
    /**
     * Get the Column or SuperColumn at the given column_path. If no value is present, NotFoundException is thrown. (This is
     * the only method that can throw an exception under non-failure conditions.)
     * 
     * @param string $key
     * @param \cassandra\ColumnPath $column_path
     * @param int $consistency_level
     * @return \cassandra\ColumnOrSuperColumn Methods for fetching rows/records from Cassandra will return either a single instance of ColumnOrSuperColumn or a list
     * of ColumnOrSuperColumns (get_slice()). If you're looking up a SuperColumn (or list of SuperColumns) then the resulting
     * instances of ColumnOrSuperColumn will have the requested SuperColumn in the attribute super_column. For queries resulting
     * in Columns, those values will be in the attribute column. This change was made between 0.3 and 0.4 to standardize on
     * single query methods that may return either a SuperColumn or Column.
     * 
     * If the query was on a counter column family, you will either get a counter_column (instead of a column) or a
     * counter_super_column (instead of a super_column)
     * 
     * @param column. The Column returned by get() or get_slice().
     * @param super_column. The SuperColumn returned by get() or get_slice().
     * @param counter_column. The Counterolumn returned by get() or get_slice().
     * @param counter_super_column. The CounterSuperColumn returned by get() or get_slice().
     * 
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\NotFoundException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get($key, \cassandra\ColumnPath $column_path, $consistency_level);
    /**
     * Get the group of columns contained by column_parent (either a ColumnFamily name or a ColumnFamily/SuperColumn name
     * pair) specified by the given SlicePredicate. If no matching values are found, an empty list is returned.
     * 
     * @param string $key
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\SlicePredicate $predicate
     * @param int $consistency_level
     * @return \cassandra\ColumnOrSuperColumn[]
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_slice($key, \cassandra\ColumnParent $column_parent, \cassandra\SlicePredicate $predicate, $consistency_level);
    /**
     * returns the number of columns matching <code>predicate</code> for a particular <code>key</code>,
     * <code>ColumnFamily</code> and optionally <code>SuperColumn</code>.
     * 
     * @param string $key
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\SlicePredicate $predicate
     * @param int $consistency_level
     * @return int
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_count($key, \cassandra\ColumnParent $column_parent, \cassandra\SlicePredicate $predicate, $consistency_level);
    /**
     * Performs a get_slice for column_parent and predicate for the given keys in parallel.
     * 
     * @param string[] $keys
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\SlicePredicate $predicate
     * @param int $consistency_level
     * @return array
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function multiget_slice(array $keys, \cassandra\ColumnParent $column_parent, \cassandra\SlicePredicate $predicate, $consistency_level);
    /**
     * Perform a get_count in parallel on the given {@code List<binary>} keys. The return value maps keys to the count found.
     * 
     * @param string[] $keys
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\SlicePredicate $predicate
     * @param int $consistency_level
     * @return array
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function multiget_count(array $keys, \cassandra\ColumnParent $column_parent, \cassandra\SlicePredicate $predicate, $consistency_level);
    /**
     * returns a subset of columns for a contiguous range of keys.
     * 
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\SlicePredicate $predicate
     * @param \cassandra\KeyRange $range
     * @param int $consistency_level
     * @return \cassandra\KeySlice[]
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_range_slices(\cassandra\ColumnParent $column_parent, \cassandra\SlicePredicate $predicate, \cassandra\KeyRange $range, $consistency_level);
    /**
     * returns a range of columns, wrapping to the next rows if necessary to collect max_results.
     * 
     * @param string $column_family
     * @param \cassandra\KeyRange $range
     * @param string $start_column
     * @param int $consistency_level
     * @return \cassandra\KeySlice[]
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_paged_slice($column_family, \cassandra\KeyRange $range, $start_column, $consistency_level);
    /**
     * Returns the subset of columns specified in SlicePredicate for the rows matching the IndexClause
     * @deprecated use get_range_slices instead with range.row_filter specified
     * 
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\IndexClause $index_clause
     * @param \cassandra\SlicePredicate $column_predicate
     * @param int $consistency_level
     * @return \cassandra\KeySlice[]
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_indexed_slices(\cassandra\ColumnParent $column_parent, \cassandra\IndexClause $index_clause, \cassandra\SlicePredicate $column_predicate, $consistency_level);
    /**
     * Insert a Column at the given column_parent.column_family and optional column_parent.super_column.
     * 
     * @param string $key
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\Column $column
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function insert($key, \cassandra\ColumnParent $column_parent, \cassandra\Column $column, $consistency_level);
    /**
     * Increment or decrement a counter.
     * 
     * @param string $key
     * @param \cassandra\ColumnParent $column_parent
     * @param \cassandra\CounterColumn $column
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function add($key, \cassandra\ColumnParent $column_parent, \cassandra\CounterColumn $column, $consistency_level);
    /**
     * Atomic compare and set.
     * 
     * If the cas is successfull, the success boolean in CASResult will be true and there will be no current_values.
     * Otherwise, success will be false and current_values will contain the current values for the columns in
     * expected (that, by definition of compare-and-set, will differ from the values in expected).
     * 
     * A cas operation takes 2 consistency level. The first one, serial_consistency_level, simply indicates the
     * level of serialization required. This can be either ConsistencyLevel.SERIAL or ConsistencyLevel.LOCAL_SERIAL.
     * The second one, commit_consistency_level, defines the consistency level for the commit phase of the cas. This
     * is a more traditional consistency level (the same CL than for traditional writes are accepted) that impact
     * the visibility for reads of the operation. For instance, if commit_consistency_level is QUORUM, then it is
     * guaranteed that a followup QUORUM read will see the cas write (if that one was successful obviously). If
     * commit_consistency_level is ANY, you will need to use a SERIAL/LOCAL_SERIAL read to be guaranteed to see
     * the write.
     * 
     * @param string $key
     * @param string $column_family
     * @param \cassandra\Column[] $expected
     * @param \cassandra\Column[] $updates
     * @param int $serial_consistency_level
     * @param int $commit_consistency_level
     * @return \cassandra\CASResult
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function cas($key, $column_family, array $expected, array $updates, $serial_consistency_level, $commit_consistency_level);
    /**
     * Remove data from the row specified by key at the granularity specified by column_path, and the given timestamp. Note
     * that all the values in column_path besides column_path.column_family are truly optional: you can remove the entire
     * row by just specifying the ColumnFamily, or you can remove a SuperColumn or a single Column by specifying those levels too.
     * 
     * @param string $key
     * @param \cassandra\ColumnPath $column_path
     * @param int $timestamp
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function remove($key, \cassandra\ColumnPath $column_path, $timestamp, $consistency_level);
    /**
     * Remove a counter at the specified location.
     * Note that counters have limited support for deletes: if you remove a counter, you must wait to issue any following update
     * until the delete has reached all the nodes and all of them have been fully compacted.
     * 
     * @param string $key
     * @param \cassandra\ColumnPath $path
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function remove_counter($key, \cassandra\ColumnPath $path, $consistency_level);
    /**
     *   Mutate many columns or super columns for many row keys. See also: Mutation.
     * 
     *   mutation_map maps key to column family to a list of Mutation objects to take place at that scope.
     * *
     * 
     * @param array $mutation_map
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function batch_mutate(array $mutation_map, $consistency_level);
    /**
     *   Atomically mutate many columns or super columns for many row keys. See also: Mutation.
     * 
     *   mutation_map maps key to column family to a list of Mutation objects to take place at that scope.
     * *
     * 
     * @param array $mutation_map
     * @param int $consistency_level
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function atomic_batch_mutate(array $mutation_map, $consistency_level);
    /**
     * Truncate will mark and entire column family as deleted.
     * From the user's perspective a successful call to truncate will result complete data deletion from cfname.
     * Internally, however, disk space will not be immediatily released, as with all deletes in cassandra, this one
     * only marks the data as deleted.
     * The operation succeeds only if all hosts in the cluster at available and will throw an UnavailableException if
     * some hosts are down.
     * 
     * @param string $cfname
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function truncate($cfname);
    /**
     * Select multiple slices of a key in a single RPC operation
     * 
     * @param \cassandra\MultiSliceRequest $request
     * @return \cassandra\ColumnOrSuperColumn[]
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     */
    public function get_multi_slice(\cassandra\MultiSliceRequest $request);
    /**
     * for each schema version present in the cluster, returns a list of nodes at that version.
     * hosts that do not respond will be under the key DatabaseDescriptor.INITIAL_VERSION.
     * the cluster is all on the same version if the size of the map is 1.
     * 
     * @return array
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_schema_versions();
    /**
     * list the defined keyspaces in this cluster
     * 
     * @return \cassandra\KsDef[]
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_keyspaces();
    /**
     * get the cluster name
     * 
     * @return string
     */
    public function describe_cluster_name();
    /**
     * get the thrift api version
     * 
     * @return string
     */
    public function describe_version();
    /**
     * get the token ring: a map of ranges to host addresses,
     * represented as a set of TokenRange instead of a map from range
     * to list of endpoints, because you can't use Thrift structs as
     * map keys:
     * https://issues.apache.org/jira/browse/THRIFT-162
     * 
     * for the same reason, we can't return a set here, even though
     * order is neither important nor predictable.
     * 
     * @param string $keyspace
     * @return \cassandra\TokenRange[]
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_ring($keyspace);
    /**
     * same as describe_ring, but considers only nodes in the local DC
     * 
     * @param string $keyspace
     * @return \cassandra\TokenRange[]
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_local_ring($keyspace);
    /**
     * get the mapping between token->node ip
     * without taking replication into consideration
     * https://issues.apache.org/jira/browse/CASSANDRA-4092
     * 
     * @return array
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_token_map();
    /**
     * returns the partitioner used by this cluster
     * 
     * @return string
     */
    public function describe_partitioner();
    /**
     * returns the snitch used by this cluster
     * 
     * @return string
     */
    public function describe_snitch();
    /**
     * describe specified keyspace
     * 
     * @param string $keyspace
     * @return \cassandra\KsDef
     * @throws \cassandra\NotFoundException
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_keyspace($keyspace);
    /**
     * experimental API for hadoop/parallel query support.
     * may change violently and without warning.
     * 
     * returns list of token strings such that first subrange is (list[0], list[1]],
     * next is (list[1], list[2]], etc.
     * 
     * @param string $cfName
     * @param string $start_token
     * @param string $end_token
     * @param int $keys_per_split
     * @return string[]
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_splits($cfName, $start_token, $end_token, $keys_per_split);
    /**
     * Enables tracing for the next query in this connection and returns the UUID for that trace session
     * The next query will be traced idependently of trace probability and the returned UUID can be used to query the trace keyspace
     * 
     * @return string
     */
    public function trace_next_query();
    /**
     * @param string $cfName
     * @param string $start_token
     * @param string $end_token
     * @param int $keys_per_split
     * @return \cassandra\CfSplit[]
     * @throws \cassandra\InvalidRequestException
     */
    public function describe_splits_ex($cfName, $start_token, $end_token, $keys_per_split);
    /**
     * adds a column family. returns the new schema id.
     * 
     * @param \cassandra\CfDef $cf_def
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_add_column_family(\cassandra\CfDef $cf_def);
    /**
     * drops a column family. returns the new schema id.
     * 
     * @param string $column_family
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_drop_column_family($column_family);
    /**
     * adds a keyspace and any column families that are part of it. returns the new schema id.
     * 
     * @param \cassandra\KsDef $ks_def
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_add_keyspace(\cassandra\KsDef $ks_def);
    /**
     * drops a keyspace and any column families that are part of it. returns the new schema id.
     * 
     * @param string $keyspace
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_drop_keyspace($keyspace);
    /**
     * updates properties of a keyspace. returns the new schema id.
     * 
     * @param \cassandra\KsDef $ks_def
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_update_keyspace(\cassandra\KsDef $ks_def);
    /**
     * updates properties of a column family. returns the new schema id.
     * 
     * @param \cassandra\CfDef $cf_def
     * @return string
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function system_update_column_family(\cassandra\CfDef $cf_def);
    /**
     * @deprecated Throws InvalidRequestException since 2.2. Please use the CQL3 version instead.
     * 
     * @param string $query
     * @param int $compression
     * @return \cassandra\CqlResult
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function execute_cql_query($query, $compression);
    /**
     * Executes a CQL3 (Cassandra Query Language) statement and returns a
     * CqlResult containing the results.
     * 
     * @param string $query
     * @param int $compression
     * @param int $consistency
     * @return \cassandra\CqlResult
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function execute_cql3_query($query, $compression, $consistency);
    /**
     * @deprecated Throws InvalidRequestException since 2.2. Please use the CQL3 version instead.
     * 
     * @param string $query
     * @param int $compression
     * @return \cassandra\CqlPreparedResult
     * @throws \cassandra\InvalidRequestException
     */
    public function prepare_cql_query($query, $compression);
    /**
     * Prepare a CQL3 (Cassandra Query Language) statement by compiling and returning
     * - the type of CQL statement
     * - an id token of the compiled CQL stored on the server side.
     * - a count of the discovered bound markers in the statement
     * 
     * @param string $query
     * @param int $compression
     * @return \cassandra\CqlPreparedResult
     * @throws \cassandra\InvalidRequestException
     */
    public function prepare_cql3_query($query, $compression);
    /**
     * @deprecated Throws InvalidRequestException since 2.2. Please use the CQL3 version instead.
     * 
     * @param int $itemId
     * @param string[] $values
     * @return \cassandra\CqlResult
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function execute_prepared_cql_query($itemId, array $values);
    /**
     * Executes a prepared CQL3 (Cassandra Query Language) statement by passing an id token, a list of variables
     * to bind, and the consistency level, and returns a CqlResult containing the results.
     * 
     * @param int $itemId
     * @param string[] $values
     * @param int $consistency
     * @return \cassandra\CqlResult
     * @throws \cassandra\InvalidRequestException
     * @throws \cassandra\UnavailableException
     * @throws \cassandra\TimedOutException
     * @throws \cassandra\SchemaDisagreementException
     */
    public function execute_prepared_cql3_query($itemId, array $values, $consistency);
    /**
     * @deprecated This is now a no-op. Please use the CQL3 specific methods instead.
     * 
     * @param string $version
     * @throws \cassandra\InvalidRequestException
     */
    public function set_cql_version($version);
}

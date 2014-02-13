git clone --depth=1 --branch=trunk git://git.apache.org/cassandra.git tmp
cp tmp/interface/cassandra.thrift cassandra-thrift/
rm -Rf tmp
thrift --gen php cassandra-thrift/cassandra.thrift
cp -R gen-php/cassandra src
rm -Rf gen-php/

thrift --gen php cassandra.thrift
cp gen-php/cassandra ../src -R
rm gen-php/ -Rf

#!/bin/sh
git clone --depth=1 --branch=trunk git@github.com:apache/cassandra tmp
cp tmp/interface/cassandra.thrift cassandra-thrift/
rm -Rf tmp
thrift --gen php:oop,validate cassandra-thrift/cassandra.thrift
cp -R gen-php/cassandra src
rm -Rf gen-php/
php refactor.php

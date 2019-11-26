#!/bin/sh

TAG=$1

if [[ "$TAG" == "" ]]; then
  echo "no branch or tag specified"
  exit 1
fi

git clone --depth=1 --branch=$TAG git@github.com:apache/cassandra tmp
cp tmp/interface/cassandra.thrift cassandra-thrift/
rm -Rf tmp
rm -Rf src/cassandra
thrift --gen php:oop,validate cassandra-thrift/cassandra.thrift
cp -R gen-php/cassandra src
rm -Rf gen-php/

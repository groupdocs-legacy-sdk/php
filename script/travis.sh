#!/bin/sh -ex

# unit tests
phpunit

# integration tests
cd tests/samples-ui-tests
mvn -q -s settings.xml clean test -Dsite.url="http://groupdocs-php-samples.herokuapp.com/"

# Erratic test smells
For more information about erratic tests see [xUnit Erratic test smell].

Make sure everything is [installed](../installation/install-workshop-locally-osx.md) before starting the examples.

## Interacting smell
Example of the smell in a test case:
```bash
// Run the test suite in serial. Do this multiple times to see if it keeps working.
erratic:interating-smell:serial

// Run the test suite in random order. Do this multiple times to see if it keeps working.
gulp erratic:interating-smell:random
```
In the test case a [shared-fixture] is used for the customer. If the tests ar run in the wrong order tests will fail. 
This effect can be seen if the tests are run randomly.

Open the [Interacting smell unit tests](../../tests/Unit/ErraticTests/Smells/InteractingSmellTest.php) to see the php-unit code.

The solution is to create a [fresh-fixture] and put the fixture creation in the automatic fixture setup.
```bash
gulp erratic:interating-smell:solution
```
Open the [Interacting smell solution unit tests](../../tests/Unit/ErraticTests/Solutions/InteractingSmellTest.php) to see the solution php-unit code.

## Lonely smell
Example of the smell in a test case:
```bash
// Run the test suite in serial. Do this multiple times to see if it keeps working.
gulp erratic:lonely-smell:serial

// Run the test suite in random order. Do this multiple times to see if it keeps working.
gulp erratic:lonely-smell:random

// To see expose the lonely test case run only the specific test.
gulp erratic:lonely-smell:single-test
```

Open the [Lonely smell unit tests](../../tests/Unit/ErraticTests/Smells/LonelySmellTest.php) to see the php-unit code.

The solution is to create a [fresh-fixture] and put the fixture creation in the automatic fixture setup.
```bash
erratic:lonely-smell:solution
```
Open the [Lonely smell solution unit tests](../../tests/Unit/ErraticTests/Solutions/LonelySmellTest.php) to see the solution php-unit code.

## Interacting Test Suites

## Resource Leakage

## Resource Optimism

## Unrepeatable Test

## Test Run War

## Nondeterministic Test

[xUnit Erratic test smell]:http://xunitpatterns.com/Erratic%20Test.html
[fresh-fixture]:http://xunitpatterns.com/Fresh%20Fixture.html
[shared-fixture]:http://xunitpatterns.com/Shared%20Fixture.html



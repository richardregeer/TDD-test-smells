# Erratic test smell

## Interacting Tests
Tests depend on other tests in some way.

Symptoms
A test that works by itself suddenly fails in the following circumstances:
- Another test is added to (or removed from) the suite.
- Another test in the suite fails (or starts to pass).
- The test (or another test) is renamed or moved in the source file.
- A new version of the Test Runner is installed.

Root Cause
Interacting Tests usually arise when tests use a Shared Fixture with one test depending in some way on the outcome of another test.

Solution
Using a Fresh Fixture is the preferred solution for Interacting Tests; it is almost guaranteed to solve the problem. 
If we must use a Shared Fixture, we should consider using an Immutable Shared Fixture to pre- vent the tests from interacting with one another.

### Lonely Test 
A Lonely Test is a special case of Interacting Tests. In this case, a test can be run as part of a suite but cannot be run by itself because it depends on something in a Shared Fixture that was created by another test.
We can address this problem by converting the test to use a Fresh Fixture or by adding Lazy Setup logic to the Lonely Test to allow it to run by itself.

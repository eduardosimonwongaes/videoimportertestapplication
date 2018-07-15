#Summary

###Installation
- execute `git clone https://github.com/zimonbizkit/videoimportertestapplication.git`
- go to the folders project, and execute `vagrant up`
- execute `vagrant ssh`

The virtual environment should provision itself via a script. All the dependencies should be covered.

Once in the machine , go to `/var/www/test/`. In case either the vendor folder is not present, or the composer command is not installed,please execute `/usr/local/bin/composer.phar install`.

### Run the code

- Go to the projects folder `cd /var/www/test`
- execute `bin/console videoimporter:produce --omitqueues=true`

## Run the tests
###Run the unit tests
- Go to the projects folder `cd /var/www/test`
- execute `bin/phpunit`

###Run the 'functional' tests
Also, a small set of e2e/integration tests has been provided via behat. To execute them, please run `bin/behat`.

###Comments about tests
There should be assertions, mock objects, spies and stubs being used, from both the MockObject interface that PHPUnit
provides, and also with the prophecy mock framework (see https://github.com/phpspec/prophecy).

For the integration tests, behat should be enough despite the fact that we could abstract the Request/Response flow 
to an endpoint and use Selenium with browser drivers to check the result of a browsers action

A set of unit tests should be executed. Only the part of the 'consumer' has been tested for now. To check which services are under test, execute `bin/phpunit --debug`

### Where to find the code
The code developed for this is under the `src/` folder. Their unit tests are under `testsrc` and `test_behavior` respectively.
####Observations on the src /code
    - Command: the entrypoint for the main use case(s).
    - Core: Where most of the business logic resides.
    - SharedKernel: Parts of the business logic that can be exported to other projects /bounded contexts.
    
    - Services: The procedural objects that define the flow of the process.
    - Value Objects: Stateless objects that provide context to the business/application/implementation details.
    - Aggregate: First level entity around which all the application flow revolves. It has state and can dispatch 
    events that can trigger even more behaviour.
    -Application/Domain/Infrastructure: Approach tho the Layers Architecture. 
    See https://archfirst.org/domain-driven-design-6-layered-architecture/
    

## To-dos /what-could-have-been-done-differently:
From more important, to less important
- Provided the time, finish the asynchronous implementation intent planned in the beginning (check README.md)
- Do full coverage of the code with the unit tests, be more exhaustive with corner cases
- Do more specific (integration) test for parts of the application ,rather than just the e2e ones
- Disregard vagrant and use docker-compose for setting the projects environment.
- disregard provisioner.sh script in favor to a more serious Infrastructure as Code provider (Ansible). Do the provisioning
from there.
- Provided the time, check the feasibility to migrate parts of the process to another languages/frameworks,
which are more ready for concurrency (i.e. go).
- Improve code format/readability implementing a Githooks script (pre-commit).


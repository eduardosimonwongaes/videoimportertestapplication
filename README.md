# Video importer project
This project aims to implement a DDD approach when developing a video importer. The project has been built with a basic Symfony bundle, mainly using the console component. Following the DDD approach helps to: 

- Separate strategic design from tactical design. The strategic design defines how business wants to approach a problem that can be solved by software , and tactical design defines the real implementation behind the problem. It's just a method to have business logic as decoupled as possible from the implementation itself. Main pros:
     - Bounded contexts of Core and Shared Kernel, and Domain and Infrastructure folders on each bounded context to check that separation of concerns.
     - Separate the framework we use (implementation) from the business logic (business problem approach)
- Separate design and implementation concerns to the smallest fraction so the Single Responsiblity Principle is well applied.

### Tactical design
The main command imports video sources from various providers and formats and simulates a persistence mechanism, after providing to them a common interface. The command, after installing the environment , can be executed by the following command:
`
bin/console videoimporter:produce --ignore-queues=true
`
Executing this command will import all the videos from all the known (by business) providers, being retrieved by different means.
### videoimporter:produce? --ignore-queues?
Exevuting `bin/console | grep videoimporter`should have two commands revealed:
`videoimporter:produce` and `videoimporter:consume`. Part of the intention of the design was to provide an asynchronous/concurrent way to import commands fom various sources at the time and store them concurrently. This was thanks to a rabbitmq message queuing system thats implemented as part of the code, but not shipped as a dependency of the project. An approach to run the processes for all the providers, and having them imported asynchronously via a RabbitMq queue would imply just this:
`(bin/console videoimporter:produce --provider=flub 2>&1 >/dev/null) && (bin/console videoimporter:produce --provider=glorf 2>&1 >/dev/null 2>&1 >/dev/null) && bin/console videoimporter:consume 2>&1 >/dev/null)`

#Tests 
There's a set of integration/end-to-end tests, and unit tests to check the projects structure and flow. The coverage is not complete,though.



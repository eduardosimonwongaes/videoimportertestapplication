<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    const BASE_COMMAND = "bin/console videoimporter:producer --omitqueues=true";
    const DEBUG_CONTAINER_COMMAND = "bin/console";

    /**
     * @var string
     */
    private $output;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am in the projects root directory
     */
    public function iAmInTheProjectsRootDirectory()
    {
        return true;
    }

    /**
     * @When I run the a symfony command to know which commands are available
     */
    public function iRunTheASymfonyCommandToKnowWhichCommandsAreAvailable()
    {
        $this->output = shell_exec(self::DEBUG_CONTAINER_COMMAND);
    }

    /**
     * @Then I should see in the output:
     */
    public function iShouldSeeInTheOutput(PyStringNode $string)
    {
        Assert::assertNotFalse(strpos($this->output,$string->getRaw()));
    }

    /**
     * @When I run the import command
     */
    public function iRunTheImportCommand()
    {
        $this->output = shell_exec(self::BASE_COMMAND);
    }

    /**
     * @Then I should see the output
     */
    public function iShouldSeeTheOutput(PyStringNode $string)
    {
        Assert::assertEquals($string->getRaw(),$this->output);
    }

    /**
     * @When /^I run the import command for provider "([^"]*)"$/
     */
    public function iRunTheImportCommandForProvider($arg1)
    {
        $this->output = shell_exec(self::BASE_COMMAND." --provider=$arg1");
    }
}

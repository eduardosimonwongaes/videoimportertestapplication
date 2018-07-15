Feature: Import command
  In order to check that the import command is working successfully
  As a UNIX user or a cron job
  I need to check whether we have the chance to run it

  Scenario: Checking that the command is present
    Given I am in the projects root directory
    When I run the a symfony command to know which commands are available
    Then I should see in the output:
    """
    videoimporter:producer                  Imports the videos from various sources

    """
    And I should see in the output:
    """
    videoimporter:consumer                  Consumes the message from the queue and process them.

    """

  Scenario: Checking that with default files provided, without any arguments, we import all the providers
    Given I am in the projects root directory
    When I run the import command
    Then I should see the output
    """
    Getting Flub videos
    importing: \"funny cats\"; Url:http://glorf.com/videos/asfds.comTags:cats, cute, funny
    importing: \"more cats\"; Url:http://glorf.com/videos/asdfds.comTags:cats, ugly,funny
    importing: \"lots of dogs\"; Url:http://glorf.com/videos/asasddfds.comTags:dogs, cute, funny
    importing: \"bird dance\"; Url:http://glorf.com/videos/q34343.comTags:
    Getting Glorf videos
    importing: \"science experiment goes wrong\"; Url:http://glorf.com/videos/3Tags:microwave,cats,peanutbutter
    importing: \"amazing dog can talk\"; Url:http://glorf.com/videos/4Tags:dog,amazing

    """

  Scenario: Checking that with default files provided and specifying a provider we import only the chosen provider
    Given I am in the projects root directory
    When I run the import command for provider "flub"
    Then I should see the output
    """
    Getting Flub videos
    importing: \"funny cats\"; Url:http://glorf.com/videos/asfds.comTags:cats, cute, funny
    importing: \"more cats\"; Url:http://glorf.com/videos/asdfds.comTags:cats, ugly,funny
    importing: \"lots of dogs\"; Url:http://glorf.com/videos/asasddfds.comTags:dogs, cute, funny
    importing: \"bird dance\"; Url:http://glorf.com/videos/q34343.comTags:

    """
Feature: Complain when the minimum payment has not been reached
  In order to prevent very small donations
  As an organization collecting donations
  I want to warn donors their total is too low

  Scenario: Contribution amount too low
    Given the extension is enabled
    When any visitor goes to contribution form ID 54
    And selects price options that add up to less than $125
    Then a message should appear reading "Less than minimum"

  Scenario: Contribution amount above threshold
    Given the extension is enabled
    When any visitor goes to contribution form ID 54
    And selects price options that add up to $125 or more
    Then there should be no message reading "Less than minimum"
    And if there was such a message it should disappear

  Scenario: Even on refresh and validation
    Given the extension is enabled
    And a visitor has selected price options that add up to less than $125
    When the vistor refreshes the page or gets sent back after validation
    Then a message should appear reading "Less than minimum"

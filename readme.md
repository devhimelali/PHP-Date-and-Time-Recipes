# PHP Date and Time Recipes

---

## Day format parameter string: 
| format character | description | example         | result | Example returned values|
| ---------------- | ----------- |-----------------| ------ | -------|
| d | Day of the month, 2 digits with leading zeros | `$date->format('d')` | `01` | `01 to 31` |
| j | Day of the month without leading zeros | `$date->format('j')` | `1` | `1 to 31` | 
| D | A textual representation of a day, three letters | `$date->format('D')` | `Mon` | `Mon through Sun` |
| l | A full textual representation of the day of the week | `$date->format('l')` | `Monday` | `Sunday through Saturday` |
| N | ISO-8601 numeric representation of the day of the week | `$date->format('N')` | `1` | `1 (for Monday) through 7 (for Sunday)` |
| S | English ordinal suffix for the day of the month, 2 characters | `$date->format('S')` | `st` | `st, nd, rd or th. Works well with j` |
| w | Numeric representation of the day of the week | `$date->format('w')` | `0` | `0 (for Sunday) through 6 (for Saturday)` |
| z | The day of the year (starting from 0) | `$date->format('z')` | `0` | `0 through 365` |

## Week format parameter string:
| format character | description | example         | result | Example returned values|
| ---------------- | ----------- |-----------------| ------ | -------|
| W | ISO-8601 week number of year, weeks starting on Monday | `$date->format('W')` | `1` | `1 through 53` |


## Month format parameter string:
| format character | description | example         | result | Example returned values|
| ---------------- | ----------- |-----------------| ------ | -------|
| m | Numeric representation of a month, with leading zeros | `$date->format('m')` | `01` | `01 through 12` |
| n | Numeric representation of a month, without leading zeros | `$date->format('n')` | `1` | `1 through 12` |
| F | A full textual representation of a month, such as January or March | `$date->format('F')` | `January` | `January through December` |
| M | A short textual representation of a month, three letters | `$date->format('M')` | `Jan` | `Jan through Dec` |
| t | Number of days in the given month | `$date->format('t')` | `31` | `28 through 31` |

## Year format parameter string:

| format character | description | example         | result | Example returned values|
| ---------------- | ----------- |-----------------| ------ | -------|
| L | Whether it's a leap year | `$date->format('L')` | `false` | `false or true` |
| o | ISO-8601 year number | `$date->format('o')` | `2015` | `1999 through 9999` |
| Y | A full numeric representation of a year, 4 digits | `$date->format('Y')` | `2015` | `1901 through 9999` |
| y | A two digit representation of a year | `$date->format('y')` | `15` | `00 through 99` |
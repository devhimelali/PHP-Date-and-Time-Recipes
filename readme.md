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



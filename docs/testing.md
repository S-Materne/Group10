# Testing Documentation

| Test Case          | Input         | Expected Result      | Status |
|--------------------|---------------|----------------------|------- |
| Empty Form         | Blank submit  | Error message        | Pass   |
| Valid Registration | Correct data  | Ticket saved         | Pass   |
| Duplicate Edit     | Change name   | Updated successfully | Pass   |
| Dashboard Count    | 3 tickets     | Shows 3              | Pass   |
| Lookup Valid       | Correct code  | Shows ticket         | Pass   |
| Lookup Invalid     | Wrong code    | Error message        | Pass   |
| Required Fields    | Remove email  | Validation error     | Pass   |
| SQL Injection      | ' OR 1=1      | Blocked              | Pass   |
| Responsive Test    | Mobile screen | Layout adjusts       | Pass   |
| Check-in           | Mark checked  | Status changes       | Pass   |
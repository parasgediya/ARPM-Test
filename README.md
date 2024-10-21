# ARPM Test

## Task 1: Communication

- Generate a 10 x 52 table where each value is drawn from a standard uniform distribution.
- The 10 rows represent 10 individuals and the 52 columns represent 52 weeks (= one year)
- For each individual, compute the cumulative sums of the data across columns from inception until the given week
- Create and show in a google sheet the chart of such cumulative sums, namely 10 increasing lines. Label the axes “Week”
  and “Cumulative sum”.
- Share the google sheet with the output for evaluation of this task.

## Task 2: Eloquent

- Given the following [unoptimized Laravel code.](https://onlinephp.io/c/8cdb0)
- How would you refactor it to improve its performance and efficiency, ensuring that the code is both optimized for
  database queries and maintains readability?
- Refactor the controller method, explain and suggest further improvements.

### Task 3: Testing

- Visit this [SpreadsheetService](https://onlinephp.io/c/e9217) code sample
- Write a PHPUnit test class with suitable test cases for the `SpreadsheetService::processSpreadsheet` method.

## Task 4: Collections

- Visit this [data sample.](https://onlinephp.io/c/fb439)
- Given the `$employees` and `$offices` arrays, write elegant code using collections to generate the $output array.

## Task 5: Q&A

### Answer the following questions

#### A) Explain this code:

```angular2html
Schedule::command('app:example-command')
->withoutOverlapping()
->hourly()
->onOneServer()
->runInBackground();
```

#### B) What is the difference between the Context and Cache Facades? Provide examples to illustrate your explanation.

#### C) What's the difference between $query->update(), $model->update(), and $model->updateQuietly() in Laravel, and when would you use each?


# PHP Mastery — Learning Progress Journal

Last updated: 2026-11-05

## Current Status

- Module: 01 — PHP Fundamentals (theory and practical assessments passed; Lesson 06 still in progress)
- Current lesson: 06 — Introduction to PHP Functions (in progress)
- Development environment: Windows, VS Code, PHP CLI, Composer, Git
- Repository: https://github.com/k1Nglex-dev/php-mastery

## Lesson Progress

| Lesson | Topic | Status | Formal theory section score |
| --- | --- | --- | --- |
| 01 | Data types, type casting, numeric validation, and return types | Covered; reinforcement needed | 9/15 (60%) — Data Types & Type Casting |
| 02 | Operators and conditions | Covered | 16/20 (80%) — Operators & Conditions |
| 03 | Match expressions and match(true) | Covered | 12/15 (80%) — Match Expressions |
| 04 | Loops: for, while, do...while, break, continue, foreach | Covered | 20/25 (80%) — Loops |
| 05 | Arrays: indexed/associative arrays, iteration, keys, and values | Covered; additional array helpers need guided instruction | 25/25 (100%) — Arrays |
| 06 | Functions: parameters, arguments, and return | In progress | Not assessed |

These scores measure topic-based multiple-choice sections, not independent practical coding performance or full mastery of every subtopic in a lesson.

## Formal Assessment — PHP Fundamentals Theory

- Date: 2026-11-05
- Format: 25 multiple-choice questions, five sections, 100 available points
- Section 1 — Data Types & Type Casting: 9/15
- Section 2 — Operators & Conditions: 16/20
- Section 3 — Match Expressions: 12/15
- Section 4 — Loops: 20/25
- Section 5 — Arrays: 25/25
- **Total: 82/100 (82%)**
- **Theory assessment result: PASS** (minimum 80/100)
- **Module completion: NOT YET CONFIRMED** — practical assessment passed; Lesson 06 and its guided practice remain outstanding

### Mistakes to Correct

1. Numeric strings: `'150'` is a string, not an integer, even though `is_numeric('150')` returns true.
2. Strict comparison: `10 === '10'` evaluates to false; comparing different types does not throw a TypeError.
3. Match without default: an unmatched arm throws `UnhandledMatchError`.
4. Do...while: the loop body runs at least once, even if its condition is initially false.

## Formal Assessment — PHP Fundamentals Practical

- Date: 2026-11-05
- Format: four PHP coding exercises, 100 available points
- Exercise 01 — User Registration Validator: **20/20**
- Exercise 02 — Online Store Order Processor (conditions and match): **23/25**
- Exercise 03 — Daily Sales Analyzer (loops): **25/25**
- Exercise 04 — Product Inventory Analyzer (arrays): **30/30**
- **Total: 98/100 (98%)**
- **Practical assessment result: PASS** (minimum 80/100)
- Scores reflect code reviews and outputs supplied during the session; not all additional edge-case tests were independently demonstrated.

### Practical Review Notes

- Exercise 01: numeric validation with `is_numeric()`, integer conversion, range, email, and active status; distinction between numeric strings and integer-only validation discussed.
- Exercise 02: payment validation, conditional discounts, `match` shipping statuses; minor output-formatting issues accounted for in the final score.
- Exercise 03: `foreach`, accumulators, counters, and maximum search; main-case output confirmed; additional arrays not independently verified.
- Exercise 04: inventory value, out-of-stock indexed array, and highest-price product; main-case code reviewed; empty-array behavior remains to be practiced.
- Teaching improvement: explain new helpers (such as `implode()`) before asking the learner to use them; do not penalize unfamiliar, untaught concepts.

## Existing Exercises

- `module-00-assessment/exercise-01.php` through `exercise-04.php`
- `exercises/LoginCode.php` and `exercises/debug-test.php`
- `module-01-fundamentals/lesson-01-*` through `lesson-05-*`
- `tests/CalculatorTest.php`

The presence of exercise files does not mean their assessments have been passed. Completing a module requires a score of at least 80/100 and demonstrated practical understanding.

## Concepts to Reinforce

- Distinguish string types from numeric strings and numeric validation.
- Distinguish strict comparisons from strict function type checking.
- Handle unmatched `match` expressions.
- Trace `do...while` execution order.
- Explain the difference between `return` and `echo`.
- Understand parameters versus arguments and typed returns.

## Next Step

Resume and complete Lesson 06 on functions: explain parameters, arguments, `return` vs `echo`, typed returns, guided exercises, and an independent challenge. Reinforce array helper functions and empty-array handling before evaluating them.

## Progress Update Rules

- Update this journal after each assessed lesson or formal assessment.
- Never invent scores or mark a lesson as passed without verification.
- Pull GitHub changes locally with `git pull` after checking `git status`.

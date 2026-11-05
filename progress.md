# PHP Mastery — Learning Progress Journal

Last updated: 2026-11-05

## Current Status

- Module: 01 — PHP Fundamentals (in progress; theory assessment passed, practical validation pending)
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
| 05 | Arrays: filtering, mapping, keys, and values | Covered | 25/25 (100%) — Arrays |
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
- **Module completion: NOT YET CONFIRMED** — independent practical coding assessment and Lesson 06 remain outstanding

### Mistakes to Correct

1. Numeric strings: `'150'` is a string, not an integer, even though `is_numeric('150')` returns true.
2. Strict comparison: `10 === '10'` evaluates to false; comparing different types does not throw a TypeError.
3. Match without default: an unmatched arm throws `UnhandledMatchError`.
4. Do...while: the loop body runs at least once, even if its condition is initially false.

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

Complete a practical PHP Fundamentals coding assessment, then finish Lesson 06 on functions with guided exercises and an independent challenge. Record actual practical scores and any further mistakes after review.

## Progress Update Rules

- Update this journal after each assessed lesson or formal assessment.
- Never invent scores or mark a lesson as passed without verification.
- Pull GitHub changes locally with `git pull` after checking `git status`.

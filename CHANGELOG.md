# Change Log

## [Unreleased](https://github.com/atk4/dsql/tree/HEAD)

[Full Changelog](https://github.com/atk4/dsql/compare/1.2.3...HEAD)

**Merged pull requests:**

- replace bindValue to bindParam and use trick for LOBs [\#143](https://github.com/atk4/dsql/pull/143) ([DarkSide666](https://github.com/DarkSide666))
- add resource support [\#142](https://github.com/atk4/dsql/pull/142) ([DarkSide666](https://github.com/DarkSide666))

## [1.2.3](https://github.com/atk4/dsql/tree/1.2.3) (2018-04-03)
[Full Changelog](https://github.com/atk4/dsql/compare/1.2.2...1.2.3)

**Closed issues:**

- Put together a basic website or Release Notes [\#24](https://github.com/atk4/dsql/issues/24)

## [1.2.2](https://github.com/atk4/dsql/tree/1.2.2) (2018-03-19)
[Full Changelog](https://github.com/atk4/dsql/compare/1.2.1...1.2.2)

**Implemented enhancements:**

- Add support for CASE expression [\#74](https://github.com/atk4/dsql/issues/74)
- We should properly support tables and fields with spaces e.g. `my table`. [\#60](https://github.com/atk4/dsql/issues/60)

**Merged pull requests:**

- Implement normalizeDSN\(\) [\#139](https://github.com/atk4/dsql/pull/139) ([DarkSide666](https://github.com/DarkSide666))
- Implement CASE WHEN/THEN [\#138](https://github.com/atk4/dsql/pull/138) ([DarkSide666](https://github.com/DarkSide666))

## [1.2.1](https://github.com/atk4/dsql/tree/1.2.1) (2018-03-02)
[Full Changelog](https://github.com/atk4/dsql/compare/1.2.0...1.2.1)

**Closed issues:**

- ATK Data, action\('fx'\) not working [\#136](https://github.com/atk4/dsql/issues/136)
- Passing a \PDO to connect\(\) assumes mysql [\#134](https://github.com/atk4/dsql/issues/134)
- \[epic\] Add support for PostgreSQL [\#129](https://github.com/atk4/dsql/issues/129)
- Use PDO::quote\(\) to escape values and identifiers [\#127](https://github.com/atk4/dsql/issues/127)
- Add PostgreSQL test-scripts [\#27](https://github.com/atk4/dsql/issues/27)

**Merged pull requests:**

- resolve \#136 [\#137](https://github.com/atk4/dsql/pull/137) ([romaninsh](https://github.com/romaninsh))
- Fix pdo [\#135](https://github.com/atk4/dsql/pull/135) ([gartner](https://github.com/gartner))

## [1.2.0](https://github.com/atk4/dsql/tree/1.2.0) (2018-02-03)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.5...1.2.0)

**Closed issues:**

- where\(\) should throw exception when passed incompatible object. [\#121](https://github.com/atk4/dsql/issues/121)

**Merged pull requests:**

- Feature/oracle support fixes [\#133](https://github.com/atk4/dsql/pull/133) ([DarkSide666](https://github.com/DarkSide666))
- Feature/connection oracle [\#132](https://github.com/atk4/dsql/pull/132) ([DarkSide666](https://github.com/DarkSide666))
- Fix: SQL does not guarantee the order of retreived rows unless explic… [\#131](https://github.com/atk4/dsql/pull/131) ([gartner](https://github.com/gartner))
- Create a driver for postgresql [\#130](https://github.com/atk4/dsql/pull/130) ([gartner](https://github.com/gartner))
- spellcheck and wrapping :\) [\#125](https://github.com/atk4/dsql/pull/125) ([DarkSide666](https://github.com/DarkSide666))
- Feature/oracle support [\#124](https://github.com/atk4/dsql/pull/124) ([romaninsh](https://github.com/romaninsh))
- Add verification for foreign objects inside where\(\) values [\#122](https://github.com/atk4/dsql/pull/122) ([romaninsh](https://github.com/romaninsh))
- Add support for URI-style DNS: mysql://user:pass@host/db [\#120](https://github.com/atk4/dsql/pull/120) ([romaninsh](https://github.com/romaninsh))

## [1.1.5](https://github.com/atk4/dsql/tree/1.1.5) (2017-09-12)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.4...1.1.5)

## [1.1.4](https://github.com/atk4/dsql/tree/1.1.4) (2017-04-13)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.3...1.1.4)

## [1.1.3](https://github.com/atk4/dsql/tree/1.1.3) (2017-04-12)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.2...1.1.3)

**Closed issues:**

- Wrong person in your license :\) [\#119](https://github.com/atk4/dsql/issues/119)

## [1.1.2](https://github.com/atk4/dsql/tree/1.1.2) (2017-03-15)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.1...1.1.2)

**Closed issues:**

- Possible bug in Query::dsql\(\) returning new self\(\) [\#116](https://github.com/atk4/dsql/issues/116)
- Multi-field join [\#115](https://github.com/atk4/dsql/issues/115)

**Merged pull requests:**

- Fix cases when DSQL class is extended and Query::dsql is called.  [\#118](https://github.com/atk4/dsql/pull/118) ([romaninsh](https://github.com/romaninsh))

## [1.1.1](https://github.com/atk4/dsql/tree/1.1.1) (2017-03-08)
[Full Changelog](https://github.com/atk4/dsql/compare/1.1.0...1.1.1)

## [1.1.0](https://github.com/atk4/dsql/tree/1.1.0) (2017-03-08)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.10...1.1.0)

**Closed issues:**

- non-existant SqlFormatter class [\#114](https://github.com/atk4/dsql/issues/114)
- Integrate a proper SQL highlighter [\#112](https://github.com/atk4/dsql/issues/112)

**Merged pull requests:**

- Feature/improve debug formatting [\#113](https://github.com/atk4/dsql/pull/113) ([romaninsh](https://github.com/romaninsh))

## [1.0.10](https://github.com/atk4/dsql/tree/1.0.10) (2016-09-22)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.9...1.0.10)

**Merged pull requests:**

- resolve https://github.com/atk4/data/issues/121 [\#111](https://github.com/atk4/dsql/pull/111) ([DarkSide666](https://github.com/DarkSide666))

## [1.0.9](https://github.com/atk4/dsql/tree/1.0.9) (2016-09-07)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.8...1.0.9)

**Closed issues:**

- Update links from "cheat-sheet" to documentation. [\#86](https://github.com/atk4/dsql/issues/86)

**Merged pull requests:**

- minor cleanups [\#109](https://github.com/atk4/dsql/pull/109) ([romaninsh](https://github.com/romaninsh))
- Update README.md linking to docs. closes \#86 \(\#107\) [\#108](https://github.com/atk4/dsql/pull/108) ([romaninsh](https://github.com/romaninsh))
- Update README.md linking to docs. closes \#86 [\#107](https://github.com/atk4/dsql/pull/107) ([behradkhodayar](https://github.com/behradkhodayar))
- Use atk core exception and add more info in exceptions [\#106](https://github.com/atk4/dsql/pull/106) ([DarkSide666](https://github.com/DarkSide666))
- Applied fixes from StyleCI [\#105](https://github.com/atk4/dsql/pull/105) ([romaninsh](https://github.com/romaninsh))
- Cause Dumper to output error queries too \(with prefix ERROR\) [\#104](https://github.com/atk4/dsql/pull/104) ([romaninsh](https://github.com/romaninsh))

## [1.0.8](https://github.com/atk4/dsql/tree/1.0.8) (2016-07-25)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.7...1.0.8)

**Closed issues:**

- add space before 'left join' in qureies [\#95](https://github.com/atk4/dsql/issues/95)
- refactor to use Exception from atk4/core  [\#88](https://github.com/atk4/dsql/issues/88)
- Make sure we use UTF8 [\#79](https://github.com/atk4/dsql/issues/79)
- Sequential test-scripts. [\#28](https://github.com/atk4/dsql/issues/28)
- Implement misc. expressions, count\(\), sum\(\), fx\(\) [\#17](https://github.com/atk4/dsql/issues/17)

**Merged pull requests:**

- Applied fixes from StyleCI [\#103](https://github.com/atk4/dsql/pull/103) ([romaninsh](https://github.com/romaninsh))
- Applied fixes from StyleCI [\#101](https://github.com/atk4/dsql/pull/101) ([romaninsh](https://github.com/romaninsh))
- Allow set field to be an expression [\#100](https://github.com/atk4/dsql/pull/100) ([romaninsh](https://github.com/romaninsh))
- Applied fixes from StyleCI [\#99](https://github.com/atk4/dsql/pull/99) ([romaninsh](https://github.com/romaninsh))
- Applied fixes from StyleCI [\#98](https://github.com/atk4/dsql/pull/98) ([romaninsh](https://github.com/romaninsh))
- fix \#95 [\#96](https://github.com/atk4/dsql/pull/96) ([DarkSide666](https://github.com/DarkSide666))

## [1.0.7](https://github.com/atk4/dsql/tree/1.0.7) (2016-07-20)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.6...1.0.7)

## [1.0.6](https://github.com/atk4/dsql/tree/1.0.6) (2016-07-18)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.5...1.0.6)

## [1.0.5](https://github.com/atk4/dsql/tree/1.0.5) (2016-07-15)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.4...1.0.5)

**Merged pull requests:**

- Feature/misc improvements [\#94](https://github.com/atk4/dsql/pull/94) ([romaninsh](https://github.com/romaninsh))
- fix transactions, more tests, exceptions etc. [\#92](https://github.com/atk4/dsql/pull/92) ([DarkSide666](https://github.com/DarkSide666))
- Fix style, thanks to styleci.io [\#91](https://github.com/atk4/dsql/pull/91) ([romaninsh](https://github.com/romaninsh))
- Implemented Transaction [\#90](https://github.com/atk4/dsql/pull/90) ([romaninsh](https://github.com/romaninsh))

## [1.0.4](https://github.com/atk4/dsql/tree/1.0.4) (2016-07-05)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.3...1.0.4)

**Closed issues:**

- group\(" foo\(a, b\) "\) is being half-escaped [\#87](https://github.com/atk4/dsql/issues/87)

## [1.0.3](https://github.com/atk4/dsql/tree/1.0.3) (2016-06-30)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.2...1.0.3)

## [1.0.2](https://github.com/atk4/dsql/tree/1.0.2) (2016-06-28)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.1...1.0.2)

**Merged pull requests:**

- Feature/fix tests 20160727 [\#85](https://github.com/atk4/dsql/pull/85) ([DarkSide666](https://github.com/DarkSide666))
- Improve test coverage, fix few small bugs [\#83](https://github.com/atk4/dsql/pull/83) ([DarkSide666](https://github.com/DarkSide666))

## [1.0.1](https://github.com/atk4/dsql/tree/1.0.1) (2016-06-23)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.0-beta...1.0.1)

**Closed issues:**

- Improve code climate [\#81](https://github.com/atk4/dsql/issues/81)
- replace is\_null with ===null where possible. [\#76](https://github.com/atk4/dsql/issues/76)
- Implement {} support in expressions [\#72](https://github.com/atk4/dsql/issues/72)
- implement reset\($tag\) [\#69](https://github.com/atk4/dsql/issues/69)
- rename selectTemplate\(\) into mode\(\) [\#66](https://github.com/atk4/dsql/issues/66)
- Replace Query::templates with Query::template\_select, template\_update etc. [\#65](https://github.com/atk4/dsql/issues/65)
- simpler way to compare two fields \[discussion\] [\#63](https://github.com/atk4/dsql/issues/63)
- add support for options [\#62](https://github.com/atk4/dsql/issues/62)
- table\(\) doesn't save alias when table is defined as Expression [\#33](https://github.com/atk4/dsql/issues/33)

**Merged pull requests:**

- Feature/fix cc issues 20160620 [\#82](https://github.com/atk4/dsql/pull/82) ([DarkSide666](https://github.com/DarkSide666))
- Add argument to getDSQLExpression \(for expressionable\) [\#78](https://github.com/atk4/dsql/pull/78) ([romaninsh](https://github.com/romaninsh))
- replace is\_null with === [\#77](https://github.com/atk4/dsql/pull/77) ([DarkSide666](https://github.com/DarkSide666))
- Feature/support field names with spaces [\#75](https://github.com/atk4/dsql/pull/75) ([DarkSide666](https://github.com/DarkSide666))
- add support for {tag} in expressions [\#73](https://github.com/atk4/dsql/pull/73) ([romaninsh](https://github.com/romaninsh))
- Feature/implement new methods [\#70](https://github.com/atk4/dsql/pull/70) ([DarkSide666](https://github.com/DarkSide666))
- improvements to docs [\#68](https://github.com/atk4/dsql/pull/68) ([romaninsh](https://github.com/romaninsh))
- Feature/refactor table [\#64](https://github.com/atk4/dsql/pull/64) ([DarkSide666](https://github.com/DarkSide666))

## [1.0.0-beta](https://github.com/atk4/dsql/tree/1.0.0-beta) (2016-04-14)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.0-alpha2...1.0.0-beta)

**Implemented enhancements:**

- Implement INSERT, UPDATE, DELETE basics [\#15](https://github.com/atk4/dsql/issues/15)

**Closed issues:**

- might need to cross-link docs [\#45](https://github.com/atk4/dsql/issues/45)
- add documentation for order\(\) and limit\(\) [\#44](https://github.com/atk4/dsql/issues/44)
- Empty string should always be saved as NULL out-of-the-box [\#43](https://github.com/atk4/dsql/issues/43)
- code duplication in Query:\_render\_\* methods [\#35](https://github.com/atk4/dsql/issues/35)
- if table is defined as Expression \(not Query\), then it's not wrapped in parenthesis [\#34](https://github.com/atk4/dsql/issues/34)
- Liquidate Query-\>main\_table property [\#32](https://github.com/atk4/dsql/issues/32)
- Implement Expressionable trait \(for extending\) [\#31](https://github.com/atk4/dsql/issues/31)
- Resolve readthedoc auto-build [\#26](https://github.com/atk4/dsql/issues/26)
- Create dsql-primer project [\#25](https://github.com/atk4/dsql/issues/25)
- add \_\_toString\(\) support [\#50](https://github.com/atk4/dsql/issues/50)
- Implement "group by" [\#42](https://github.com/atk4/dsql/issues/42)
- Add join\(\) support [\#30](https://github.com/atk4/dsql/issues/30)

**Merged pull requests:**

- docs review [\#59](https://github.com/atk4/dsql/pull/59) ([DarkSide666](https://github.com/DarkSide666))
- add nice VarDump suppor [\#58](https://github.com/atk4/dsql/pull/58) ([romaninsh](https://github.com/romaninsh))
- Feature/add more connector tests [\#56](https://github.com/atk4/dsql/pull/56) ([romaninsh](https://github.com/romaninsh))
- Add implementation for Connection class [\#55](https://github.com/atk4/dsql/pull/55) ([romaninsh](https://github.com/romaninsh))
- implement \_\_to\_string\(\) [\#54](https://github.com/atk4/dsql/pull/54) ([DarkSide666](https://github.com/DarkSide666))
- Add a Gitter chat badge to README.md [\#53](https://github.com/atk4/dsql/pull/53) ([gitter-badger](https://github.com/gitter-badger))
- Feature/docs fixes 20160411 [\#52](https://github.com/atk4/dsql/pull/52) ([DarkSide666](https://github.com/DarkSide666))
- docs review and fixes [\#49](https://github.com/atk4/dsql/pull/49) ([DarkSide666](https://github.com/DarkSide666))
- Feature/add group by support [\#48](https://github.com/atk4/dsql/pull/48) ([romaninsh](https://github.com/romaninsh))
- Add implementation for join\(\) [\#47](https://github.com/atk4/dsql/pull/47) ([romaninsh](https://github.com/romaninsh))
- Implement Query engine specific sub-classes, fix truncate template for SQLite [\#46](https://github.com/atk4/dsql/pull/46) ([DarkSide666](https://github.com/DarkSide666))
- implement missing methods insert\(\), update\(\), replace\(\), delete\(\) [\#41](https://github.com/atk4/dsql/pull/41) ([romaninsh](https://github.com/romaninsh))
- Implemented order\(\) and limit\(\) [\#40](https://github.com/atk4/dsql/pull/40) ([romaninsh](https://github.com/romaninsh))

## [1.0.0-alpha2](https://github.com/atk4/dsql/tree/1.0.0-alpha2) (2016-03-27)
[Full Changelog](https://github.com/atk4/dsql/compare/1.0.0-alpha...1.0.0-alpha2)

**Closed issues:**

- Integrate SQLite and MySQL testing into Travis [\#23](https://github.com/atk4/dsql/issues/23)
- Achieve code coverage of 90% minimum for 1.0.0 release [\#18](https://github.com/atk4/dsql/issues/18)

**Merged pull requests:**

- improve test coverage [\#39](https://github.com/atk4/dsql/pull/39) ([romaninsh](https://github.com/romaninsh))
- Feature/implement parameters in exceptions [\#38](https://github.com/atk4/dsql/pull/38) ([romaninsh](https://github.com/romaninsh))
- Improving test coverage \#18 [\#37](https://github.com/atk4/dsql/pull/37) ([romaninsh](https://github.com/romaninsh))
- Feature/review 20160320 [\#36](https://github.com/atk4/dsql/pull/36) ([DarkSide666](https://github.com/DarkSide666))

## [1.0.0-alpha](https://github.com/atk4/dsql/tree/1.0.0-alpha) (2016-03-21)
[Full Changelog](https://github.com/atk4/dsql/compare/0.1.1...1.0.0-alpha)

**Implemented enhancements:**

- Implement result set [\#16](https://github.com/atk4/dsql/issues/16)
- Implement orExpr\(\), expr\(\), andExpr\(\) [\#14](https://github.com/atk4/dsql/issues/14)
- Implement where\(\) and \_render\_where\(\) methods [\#13](https://github.com/atk4/dsql/issues/13)
- Feature/add table query support [\#11](https://github.com/atk4/dsql/pull/11) ([romaninsh](https://github.com/romaninsh))
- update readme [\#9](https://github.com/atk4/dsql/pull/9) ([romaninsh](https://github.com/romaninsh))
- Feature/implement raw expressions and rendering [\#8](https://github.com/atk4/dsql/pull/8) ([romaninsh](https://github.com/romaninsh))
- Public / protected methods, extend unit tests functionality [\#6](https://github.com/atk4/dsql/pull/6) ([DarkSide666](https://github.com/DarkSide666))
- Feature/implement field method [\#3](https://github.com/atk4/dsql/pull/3) ([romaninsh](https://github.com/romaninsh))

**Merged pull requests:**

- Feature/result set [\#22](https://github.com/atk4/dsql/pull/22) ([DarkSide666](https://github.com/DarkSide666))
- implemented insert and update fully. resolve \#15 [\#21](https://github.com/atk4/dsql/pull/21) ([romaninsh](https://github.com/romaninsh))
- Feature/add or support [\#20](https://github.com/atk4/dsql/pull/20) ([romaninsh](https://github.com/romaninsh))
- added support for where\(\). fixes \#13 [\#19](https://github.com/atk4/dsql/pull/19) ([romaninsh](https://github.com/romaninsh))
- small fixes [\#12](https://github.com/atk4/dsql/pull/12) ([DarkSide666](https://github.com/DarkSide666))
- re-add some changes, lost from PR5 [\#10](https://github.com/atk4/dsql/pull/10) ([romaninsh](https://github.com/romaninsh))
- simple test case to cover constructor [\#7](https://github.com/atk4/dsql/pull/7) ([DarkSide666](https://github.com/DarkSide666))
- Feature/fix psr compatibility [\#5](https://github.com/atk4/dsql/pull/5) ([DarkSide666](https://github.com/DarkSide666))
- Feature/add contributor guide [\#4](https://github.com/atk4/dsql/pull/4) ([romaninsh](https://github.com/romaninsh))

## [0.1.1](https://github.com/atk4/dsql/tree/0.1.1) (2016-02-05)
[Full Changelog](https://github.com/atk4/dsql/compare/0.1.0...0.1.1)

**Merged pull requests:**

- Add initial documentation outline and build scripts [\#1](https://github.com/atk4/dsql/pull/1) ([romaninsh](https://github.com/romaninsh))

## [0.1.0](https://github.com/atk4/dsql/tree/0.1.0) (2016-01-26)


\* *This Change Log was automatically generated by [github_changelog_generator](https://github.com/skywinder/Github-Changelog-Generator)*
Codecov PHP Example
===================
[![Build Status](https://travis-ci.org/admonkey/example-php.svg?branch=master)](https://travis-ci.org/admonkey/example-php)
[![Codecov](https://img.shields.io/codecov/c/github/admonkey/example-php.svg?maxAge=2592000)](https://codecov.io/gh/admonkey/example-php)
[![GitHub issues](https://img.shields.io/github/issues/admonkey/example-php.svg?maxAge=2592000)](https://github.com/admonkey/example-php/issues)

| [https://codecov.io][1] | [@codecov][2] | [hello@codecov.io][3] |
| ----------------------- | ------------- | --------------------- |

This repository serves as an **example** on how to use [Codecov Global][4] for PHP.

# Travis CI

Add to your `.travis.yml` file.
```yml
after_success:
  - bash <(curl -s https://codecov.io/bash)
```

> All other CI you can simply run `bash <(curl -s https://codecov.io/bash)`.

## Private Repos

Add to your `.travis.yml` file.
```yml
after_success:
  - bash <(curl -s https://codecov.io/bash) -t :uuid-repo-token
```
> Or you can set the enviornment variable `CODECOV_TOKEN` to your token.

View source and lean more about [Codecov Global Uploader][4]

-----

### Using phpunit.xml.dist?
Start tracking coverage metrics by adding a coverage logger:

```xml
...
  <logging>
        <log type="coverage-clover" target="clover.xml"/>
    </logging>
</phpunit>
```

[1]: https://codecov.io/
[2]: https://twitter.com/codecov
[3]: mailto:hello@codecov.io
[4]: https://github.com/codecov/codecov-bash

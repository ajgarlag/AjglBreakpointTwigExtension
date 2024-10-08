# [CHANGELOG](http://keepachangelog.com/)
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased][unreleased]

## [0.4.3] - 2024-09-30

### Fixed
- Avoid extending a deprecated class

## [0.4.2] - 2024-01-22

### Added
- Add support for Symfony 7
- Add support for Twig 4

## [0.4.1] - 2024-01-20

### Added
- Support PHP 8.3

## [0.4.0] - 2022-12-06

### Added
- Add support for PHP 8.2
- Add support for Symfony 6

### Changed
- Mark all classes as `final`
- Add return type hints
- Print an empty string with twig `breakpoint` function
- Delegate Xdebug detection to `composer/xdebug-handler` when available

### Removed
- Drop support for PHP<7.4
- Drop support for Symfony<4.4
- Drop support for Twig<2.15.3

## [0.3.5] - 2021-02-08

### Added
- Add support for Symfony 5
- Add support for Twig 3.x


## [0.3.4] - 2019-04-10

### Fixed
- Population of `$arguments` variable


## [0.3.3] - 2019-03-18

### Fixed
- Population of `$arguments` variable
- Usage of deprecated classes


## [0.3.2] - 2018-12-10

### Added
- Add support for Symfony 4

## [0.3.1] - 2017-11-20

### Changed
- Require PHP 5.6

### Fixed
- Update requirements to allow twig 2.x


## [0.3.0] - 2016-03-31

### Added
- Add `$environment` and `$context` variables
- Allow to inspect function arguments


## [0.2.0] - 2016-03-10

### Added
- Add Symfony Bundle


## 0.1.0 - 2016-03-09

### Added
- Add `breakpoint` function


[unreleased]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.4.3...master
[0.4.3]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.4.2...0.4.3
[0.4.2]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.4.1...0.4.2
[0.4.1]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.5...0.4.0
[0.3.4]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.4...0.3.5
[0.3.4]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.3...0.3.4
[0.3.3]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/ajgarlag/AjglBreakpointTwigExtension/compare/0.1.0...0.2.0

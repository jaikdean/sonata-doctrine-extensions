# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [1.6.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.5.1...1.6.0) - 2020-03-23
### Added
- Added some explicit methods to `OptionsBuilder`

### Deprecated
- `OptionsBuilder::create` method

### Fixed
- Doctrine deprecation

### Changed
- Bump SF to 4.4

## [1.5.1](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.5.0...1.5.1) - 2019-12-15
### Fixed
- Fix typo in class name
- Restore argument in `EntityManagerMockFactory::create()`

## [1.5.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.4.0...1.5.0) - 2019-12-15
### Added
- Add `EntityManagerMockFactoryTrait`

## [1.4.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.3.1...1.4.0) - 2019-12-02
### Changed
- Remove the final modifier for the `getRepository` method

### Deprecated
- Passing a second argument to `BaseManager::findOneBy`

## [1.3.1](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.3.0...1.3.1) - 2019-09-27
### Fixed
- Using with only PHPCR without ORM

## [1.3.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.2.0...1.3.0) - 2019-04-29

### Added
- Added `DoctrineORMMapper` to manipulate doctrine entity relations

### Deprecated
- Deprecated `Sonata\Doctrine\Model\PageableManagerInterface`

## [1.2.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.5...1.2.0) - 2019-03-08

### Fixed
- Adapters are not being injected on the adapter chain.
- `sonata_urlsafeid` twig filter is working again

### Deprecated
- `Sonata\Doctrine\Types\JsonType`, in favor of `Doctrine\DBAL\Types\JsonType`

## [1.1.5](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.4...1.1.5) - 2019-01-19

### Fixed
- crash when decoding null value as JSON

## [1.1.4](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.3...1.1.4) - 2019-01-16

### Fixed
- invalid `doctrine_phpcr` config filename loading in SonataDoctrineExtension

## [1.1.3](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.2...1.1.3) - 2018-12-16
### Fixed
- crash about type hinting issues with AdapterInterface

## [1.1.2](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.1...1.1.2) - 2018-11-25
### Removed
- Removed `@mixin`s from classes

## [1.1.1](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.1.0...1.1.1) - 2018-11-21
### Fixed
- Fix class namespace and services loading

## [1.1.0](https://github.com/sonata-project/sonata-doctrine-extensions/compare/1.0.2...1.1.0) - 2018-10-02
### Added

- Added all doctrine stuff from `SonataCoreBundle`

### Removed
- support for old versions of php

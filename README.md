# Prototype Skeleton

Chaneg.t

This is a skeleton for prototypes. It attempts to reduce fiddling and barriers.

## Installation and Initial Setup

### Global prerequisites

```bash
$> brew install node yarn make
```

### Project dependencies

```bash
$> composer install
$> yarn install
```

## Testing and Running

### Set up the DB

```bash
$> bin/console doctrine:database:create
$> bin/console doctrine:schema:update --force
```

### Run tests to check all's good

```bash
$> make test
```

### Build frontend assets and run local server

```bash
$> make assets
$> make serve
```

## Contributing

### Frontend

Asset sources are stored in the `assets/` folder. When working on them, run the following command in the background:

```bash
$> make watch-assets
```

This will rebuild assets as you update them.

You can also run the JS unit tests for your clean functions:

```bash
$> make test-js
```

### Backend

We use [Symfony Flex](https://medium.com/@fabpot/symfony-4-automate-your-workflow-fbbf609b5a1d) to speed up the prototyping.
We have already configured web server, annotation-based routing, asset builder, form component (with Bootstrap styles), twig
templating and Doctrine ORM. `.env.dist` specified sqlite database for Doctrine, meaning in most cases no additional infra is
required on your dev machine - just:

```bash
$> make serve
````

During the eXplore phase it is generally a bad idea to focus on quality, but to lower barrier to entry for when you're closer
to the eXpand phase, we have `phpspec`, `phpunit`, `behat` and `mocha` (js tests) all set up and properly configured. So when
you are past exploration phase and into stabilisation, your TDD workflow is just a folder away. From the get go you can run
all tests with:

```bash
$> make test
```

In similar thought process to tests, we also have [ADR](https://github.com/npryce/adr-tools) set up for the project. In case
you feel you're making one of those big, hard to change commitments in the prototyping. Again, same as with tests - if you
invest into choosing/stabilising/locking/describing your architecture, make sure it's a good investment at the point in time.
For most early experiments, it is absolutely not worth it!

Tools are installed and set up to lower the barrier to entry later, not to indicate the need to use them now. 

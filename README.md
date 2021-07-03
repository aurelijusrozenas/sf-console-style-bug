**Symfony version(s) affected**: 5.1.9 and up

**Description**
Ask question stopped supporting custom style formatting.

**How to reproduce**

See code in `TestCommand.php`.

```shell
git clone https://github.com/aurelijusrozenas/sf-console-style-bug.git
cd sf-console-style-bug
# see 5.1.8 working version
docker-compose build
docker-compose run php php application.php test
# see 5.1.9 (and up) bugged version
git checkout bug
docker-compose build
docker-compose run php php application.php test
```

https://github.com/symfony/symfony/issues/41401  
https://github.com/symfony/symfony/issues/39946

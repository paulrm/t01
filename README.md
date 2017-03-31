# t01
Test para PHP con CI



```
chianti:/tmp/t01 # phpunit  -c phpunit.xml  
cwd=/tmp/t01
PHPUnit 6.0.11 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 52 ms, Memory: 8.00MB

OK (1 test, 1 assertion)
```

ant build

```
Unable to locate tools.jar. Expected to find it in /usr/lib64/jvm/java-1.9.0-openjdk-1.9.0/lib/tools.jar
Buildfile: /tmp/t01/build.xml

clean:

prepare:
    [mkdir] Created dir: /tmp/t01/build/api
    [mkdir] Created dir: /tmp/t01/build/coverage
    [mkdir] Created dir: /tmp/t01/build/logs
    [mkdir] Created dir: /tmp/t01/build/pdepend

lint:
     [lint] No syntax errors detected in /tmp/t01/src/init.php

BUILD FAILED
/tmp/t01/build.xml:23: /tmp/t01/tests does not exist.

Total time: 0 seconds

shell returned 1
```

# History

---
## 2017-03-31 Viernes
Hechos algunos ajustes para eliminar error /tmp/t01/build.xml:23: /tmp/t01/tests does not exist. en el build 


# Notas

## Required PHP Tools
- PHPUnit :ok:
- PHP_CodeSniffer :ok:
- PHPLOC :ok:
- PHP_Depend :ok:
- PHPMD - Mess Detector - :ok: 
- PHPCPD - Copy/Paste Detector (CPD) for PHP code.
- phpDox

phploc 
```
phploc --count-tests ./src/ ./tests/
```
lint a mano
`php -l ./src/init.php`

phpmd Mess Detector 
`phpmd ./src/,./tests/ text unusedcode`

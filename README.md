# Utilisation de Monolog pour les logs

## Installation

```bash
git clone ...
cd ...
composer install
```

## Utilisation

Modifier le code de `src/test.php` pour tester Monolog.

Pour lancer le script :
```bash
php src/test.php
```

### Les niveaux (normalisés) d'erreur :

Monolog supports the logging levels described by [RFC 5424](https://datatracker.ietf.org/doc/html/rfc5424).

- **DEBUG** (100): Detailed debug information.
- **INFO** (200): Interesting events. Examples: User logs in, SQL logs.
- **NOTICE** (250): Normal but significant events.
- **WARNING** (300): Exceptional occurrences that are not errors. Examples: Use of deprecated APIs, poor use of an API, undesirable things that are not necessarily wrong.
- **ERROR** (400): Runtime errors that do not require immediate action but should typically be logged and monitored.
- **CRITICAL** (500): Critical conditions. Example: Application component unavailable, unexpected exception.
- **ALERT** (550): Action must be taken immediately. Example: Entire website down, database unavailable, etc. This should trigger the SMS alerts and wake you up.
- **EMERGENCY** (600): Emergency: system is unusable.


### Utiliser un outil de gestion de logs

[Logs PHP sur BetterStack Logs](https://betterstack.com/docs/logs/php/)

Créer un compte BetterStack, allez dans "Logs" et créer une nouvelle source.

Dupliquer le fichier `.env.example` en `.env` et renseigner la variable d'environnement `LOGTAIL_SOURCE_TOKEN`.
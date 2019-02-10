## Установка

- git clone git@github.com:Littie/prize.lottery.git
- composer install
- cp .env.example .env
- In command line type php artisan key:generate
- In .env file write settings for DB for section with DB_ prefix (DB_DATABASE, DB_USERNAME, DB_PASSWORD)
- In command line type php artisan migrate --seed

## Испльзование
#### Деньги

- Сумма и интервал начисления прописаны в вайле config/prize.php 
- Текущий остаток общей суммы хранится в кэше. Сумма берется из файла конфига и заносится в кэш, где хранится в течении суток.
После истечения срока жизни кэша данные снова берутся из конфига и заносятся в кэш.

#### Очки
- Интервал начисления прописан в файле config/prize.php

#### Консольная команда
- php artisan prize:transfer N, где N - количество транзакций
- данные для обработки помещаются в очередь
- по умолчанию для менеджера очередей использутеся sync, что означает немедленное выполнение задач. При необходимости 
менеджер очередей меняется в конфиге.

#### Тесты
- Запуск теста ./vendor/bin/phpunit

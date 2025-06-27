# laravel-example

## 1. Список composer-пакетов, которые использует Laravel после установки

Основные зависимости
```json
"require": {
    "php": "^7.3|^8.0",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.0.1",
        "laravel/framework": "^8.75",
        "laravel/sanctum": "^2.11",
        "laravel/tinker": "^2.5"
}
```
Зависимости для разработки
```json
"require-dev": {
        "facade/ignition": "^2.5",
        "fakerphp/faker": "^1.9.1",
        "laravel/sail": "^1.0.1",
        "mockery/mockery": "^1.4.4",
        "nunomaduro/collision": "^5.10",
        "phpunit/phpunit": "^9.5.10"
}
```

## 2. Файлы `/config`

* app.php - Основные настройки приложения (название, локаль, часовой пояс и т.д.) 
* auth.php - Конфигурация аутентификации                                           
* broadcasting.php - Настройки вещания (broadcasting)                                      
* cache.php - Конфигурация кеширования                                              
* cors.php - Настройки CORS (междоменные запросы)                                  
* database.php - Параметры подключения к БД                                            
* filesystems.php - Настройки работы с файловыми системами                                
* hashing.php - Алгоритмы хеширования                                                 
* logging.php - Конфигурация логирования                                              
* mail.php - Параметры отправки электронной почты                                  
* queue.php - Очереди заданий (jobs)                                                
* sanctum.php - Конфигурация Laravel Sanctum (API токены)                             
* services.php - Интеграции с внешними сервисами (Mailgun, AWS и др.)                  
* session.php - Управление сессиями                                                   
* view.php - Настройки шаблонов Blade                                              

## 3. Где хранятся основные классы с бизнес-логикой приложения?

> Laravel не навязывает жёсткую структуру слоёв бизнес-логики, но принято выносить отдельные части (например, сервисы, обработчики и т.п.) в подпапки внутри `app/`.

Основные файлы с бизнес-логикой Laravel-приложения находятся в директории:

* `app/Models/` – модели Eloquent (ORM)
* `app/Http/Controllers/` – контроллеры
* `app/Services/` *(если есть)* – сервисные классы (если используется паттерн service layer)
* `app/Providers/` – сервис-провайдеры
* `app/Policies/` – политики доступа
* `app/Jobs/` – задания (jobs) для очередей
* `app/Listeners/`, `app/Events/` – события и слушатели
* `app/Rules/` – кастомные валидационные правила


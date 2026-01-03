# Generator MVC PHP
The generator dirs for type mvc php.

Example source, JSON and array is here: [create_mvc/example_structure.txt](https://github.com/bplilqd/generator_mvc_php/blob/main/create_mvc/example_structure.txt)

Генератор структуры папок для PHP-проекта по паттерну MVC.

## Установка и использование

### 1. Клонирование репозитория

```bash
# Создайте проект в корневой папке
mkdir my_project
cd my_project

# Клонируйте репозиторий
git clone git@github.com:user/generator_mvc_php.git
cd generator_mvc_php

# Зпустите файл create.php
php create.php
cd ..

# Теперь у вас есть структура MVC для проекта
ls -la

# Директорию generator_mvc_php теперь можно удалить
rm -rf generator_mvc_php
```
how will be look structure dirs after creating:

```text
├── app
│   ├── class_model
│   │   ├── function
│   │   │   └── function.php
│   │   ├── settings
│   │   │   ├── config.php
│   │   │   └── constant.php
│   │   └── work_class
│   ├── page_view
│   │   ├── page_class
│   │   └── template
│   │       └── design
│   │           ├── css
│   │           └── js
│   └── work_controller
│       ├── test
│       └── work
│           ├── admin
│           ├── auth
│           └── user
├── css
├── images
└── js
```

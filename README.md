# Инструкция по запуску проекта

#### Скачиваем репозиторий

`git clone https://github.com/Shynghys/laravel-products`

#### Устанавливаем пакеты для composer и node

`composer install`

`npm install`

#### Закомпилируем фронтенд

`npm run development`

#### Мигрируем в базу данных

`php artisan migrate --seed`

#### Запускаем на сервере

`php artisan serve`

---

## Документирование АПИ

`Route::resource('invoices', 'InvoicesController')`

Он разделяется:

1. Получает все продукты.

    \*`Route::get(/invoices, $callback);`

2. Создает продукт.

    \*`Route::delete(/invoices/create, \$callback);`

3. Получает продукт.

    \*`Route::post(/invoice/{$id},, $callback);`

4. Редактирует продукт.

    \*`Route::put(/invoices/{$id}/edit,, $callback);`

5. Удаляет продукт.

    \*`Route::delete(/invoices/{$id}/delete, \$callback);`

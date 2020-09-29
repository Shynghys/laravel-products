# Инструкция по запуску проекта

#### Скачиваем репозиторий

`git clone https://github.com/Shynghys/laravel-products`

#### Устанавливаем пакеты для composer и node

`composer install`

`npm install`

#### Закомпилируем фронтенд

`npm run development`

#### Мигрируем в базу данных с сидами

`php artisan migrate --seed`

#### Запускаем на сервере

`php artisan serve`

---

## Документирование АПИ

`Route::resource('invoices', 'InvoicesController')`

Он разделяется:

1. Показывает все продукты.

    \*`Route::get(/invoices, 'InvoicesController@index');`

2. Переходит на форму для создания продукта.

    \*`Route::post(/invoices/create, 'InvoicesController@create');`

3. Создает продукт.

    \*`Route::post(/invoices/create, 'InvoicesController@store');`

4. Показывает продукт.

    \*`Route::post(/invoice/{$id},, 'InvoicesController@show');`

5. Редактирует продукт.

    \*`Route::put(/invoices/{$id}/edit,, 'InvoicesController@edit');`

6. Удаляет продукт.

    \*`Route::delete(/invoices/{$id}/delete, 'InvoicesController@delete');`

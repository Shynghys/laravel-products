Инструкция по запуску проекта

Скачиваем репозиторий
git clone https://github.com/Shynghys/laravel-products

Устанавливаем пакеты для composer и node
composer install
npm install

Закомпилируем фронтенд
npm run development

Мигрируем в базу данных
php artisan migrate

Добавить в базу данных seeder для ролей
php artisan db:seed --class=PermissionsSeeder

Запускаем на сервере
php artisan serve

Документирование АПИ
Route::resource('invoices', 'InvoicesController');
Он разделяется:
Получает все продукты
Route::get(/invoices, $callback);
Получает продукт
Route::post(/invoice/{$id},, $callback);
Редактирует продукт
Route::put(/invoices/{$id},, $callback);
Удаляет продукт
Route::delete(/invoices/{$id}, \$callback);

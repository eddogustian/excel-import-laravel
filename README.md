<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Cara menjalankan :
1. Clone Repository <a href="https://github.com/eddogustian/excel-import-laravel/">excel-import-laravel</a> {git clone https://github.com/eddogustian/excel-import-laravel.git} 
2. masuk ke directory excel-import-laravel dan jalankan composer install/update
3. jika sudah sudah selesai download vendornya, lalu php artisan migrate {untuk generate tabel-tabel}
4. settngs .env
5. jangan lupa untuk mengubah file .env, perhatian bagian DATABASE ganti menjadi:
    QUEUE_CONNECTION=database
6. untuk menjalankan app tuliskan di command line php artisan serve 
7. lalu menjalankan command php artisan queue:work {untuk mengeksekusi job yang telah dibuat} atau bisa menggunakan supervisor agar fungsi queue:work berjalan secara otomatis.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# excel-import-laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Proje Hakkında
Proje anasayfasında veriler redis cacheden alınarak sayfalanmaktadır. `/persons` adresinde CRUD işlemleri yapılmaktadır. Bu adrese sadece giriş yapıldıktan sonra ulaşılabilmektedir.

## Kurulum

- Projeyi localinize indirin.
- `composer install` komutu ile proje bağımlılıklarını kurunuz.
- `.env` dosyanızda gerekli `veritabanı` ve `redis` ayarlarınızı yapınız.
- `php artisan migrate --seed` komutunu çalıştırınız.

## Kullanıcı Bilgileri : 
> Email : admin@admin.com
> Password : password


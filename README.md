## untuk pertama-pertama lakukan migrasi dengan seeder, lalu jalankan server dan coba login

## login halaman admin :
- email
```bash
admin@gmail.com
```
- password
```bash
password
```

## login halaman atasan :
- email
```bash
fajar@gmail.com
fabian@gmail.com
```
- password
```bash
password
```

## dan agar gambar dapat muncul 
ubah di .env menjadi public
```bash
FILESYSTEM_DISK=public
```
- lalu ketikan perintah di erminal
```bash
storage:link
```

## Jika projek tidak bisa di nyalakan servernya / php artisan serve
- ketikan perintah ini di terminal
```bash
composer update
```



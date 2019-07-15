---
title: 'Jobhunter Schema Database Documentation'
disqus: ayungavis
---

Jobhunter Schema Database Documentation
===
![version](https://img.shields.io/badge/php-%3E%3D7.1.3-blue.svg) ![laravel](https://img.shields.io/badge/laravel-v5.8-blue.svg) ![license](https://img.shields.io/npm/l/react.svg)

Jobhunter adalah platform pencarian kerja yang diperuntukan untuk Fresh Graduate. Skema database jobhunter dibangun menggunakan [Laravel](https://laravel.com/).

## Table of Contents

[TOC]

## System Requirement

Berikut spesifikasi sistem yang dibutuhkan:

* `php >= 7.1.3`
* `composer >= 1.8.6`
* `BCMath PHP Extension`
* `Ctype PHP Extension`
* `JSON PHP Extension`
* `Mbstring PHP Extension`
* `OpenSSL PHP Extension`
* `PDO PHP Extension`
* `Tokenizer PHP Extension`
* `XML PHP Extension`

## Installation

Silahkan mengikuti panduan di bawah ini untuk instalasi:

1. `git clone https://gitlab.com/ayungavis/jobhunter-laravel.git`
2. `cd jobhunter-laravel`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. `php artisan migrate --seed`

## Folder Structure

Setelah `clone` aplikasi jobhunter, seharusnya akan terlihat seperti ini:

```
.
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
├── routes
├── storage
└── test
```

Skema database dari jobhunter terletak di folder `database/migrations` dan `database/seeds`

Baca selengkapnya mengenai [Laravel Migration](https://laravel.com/docs/5.8/migrations)

## Appendix and FAQ

:::info
**Dokumentasi masih belum lengkap?** Silahkan hubungi saya di [instagram.com](https://instagram.com/ayungavis)!
:::

###### tags: `Jobhunter` `Frontend` `Documentation`

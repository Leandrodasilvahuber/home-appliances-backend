<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="110" alt="Laravel Logo"></a></p>

## About
Back-end example built in PHP, registers household appliances and their respective voltages.

## Requirements 
* php8.1.9
* composer2.4.1 
* (mysql-pdo enabled in php.ini)

## Start Project
* composer update --ignore-platform-req=ext-fileinfo
* create file .env
* php artisan migrate
* php artisan db:seed
* php artisan serve or php artisan serve --port=3333

# Resources:
```
- voltages list
- producers list
- products list
- products create
- products delete
- products update
```

### **POST /products**

**BODY:**

```json
{
name: <string>,
descripation: <string>
voltage_id: <integer>
producer_id: <iteger>
}
```
**RESPONSE:**

```json
{
name: <string>,
descripation: <string>
voltage_id: <integer>
producer_id: <iteger>
}
```

### **PUT /products/:id**

**BODY:**

```json
{
name: <string>,
descripation: <string>
voltage_id: <integer>
producer_id: <iteger>
}
```
**RESPONSE:**

```json
{
name: <string>,
descripation: <string>
voltage_id: <integer>
producer_id: <iteger>
}
```

### **GET /products**

**BODY:**

```json
{}
```

**RESPONSE:**

```json
{
	<array>
}
```
### **DELETE /products/:id**

**BODY:**

```json
{}
```
### **GET /producers**

**BODY:**

```json
{
    <array>
}
```
### **GET /voltages**

**BODY:**

```json
{
    <array>
}
```

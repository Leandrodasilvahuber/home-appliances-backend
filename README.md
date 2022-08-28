<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About project
Requirements: 
    <br>
    * php8.1.9
    <br>
    * composer2.4.1 
    <br>
    * (mysql-pdo enabled in php.ini)
    <br>
    <br>
Start Project: <br>
1- clone repository <br>
2- composer update --ignore-platform-req=ext-fileinfo <br>
3- php artisan serve <br>
    

# Contact
Leandro da Silva Huber - leandrohuber@yahoo.com

# Resources:
```
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


# Gestión de Clientes y Facturas – Proyecto Laravel

Aplicación web desarrollada con **Laravel** para gestionar clientes, sus facturas y los pagos asociados.  
Permite administrar de forma sencilla el ciclo completo de facturación: alta de clientes, creación de facturas, registro de pagos y consulta de estados.

---

## Funcionalidades

- **Clientes**
  - Crear, listar, editar y eliminar clientes.
  - Datos básicos: nombre, email, teléfono, dirección, CIF/NIF.

- **Facturas**
  - Crear facturas asociadas a un cliente.
  - Añadir líneas de detalle (concepto, cantidad, precio, IVA).
  - Estados: borrador, emitida, pagada, vencida.

- **Pagos**
  - Registrar pagos parciales o totales.
  - Ver histórico de pagos por factura.

- **Listados y filtros**
  - Buscar clientes.
  - Filtrar facturas por estado, cliente o fecha.

- **API opcional**
  - Endpoints JSON para clientes y facturas.

---

## Requisitos previos

Antes de instalar el proyecto debes tener:

- PHP >= 8.1  
- Composer  
- MySQL / MariaDB  
- Servidor Apache / Nginx (o usar `php artisan serve`)  
- Git instalado  
- Extensiones PHP recomendadas por Laravel

---

## Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/usuario/proyecto-laravel-facturas.git
cd proyecto-laravel-facturas

```
2. Instalar dependencias:

```bash
npm install

```
3. Copiar el archivo de entorno:

```bash
cp .env.example .env

```
4. Generar la clave de la aplicación:

```bash
php artisan key:generate

```
5. Configurar la base de datos en .env:

```.env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_facturas
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```
6. Ejecutar migraciones:

```bash
php artisan migrate

```
7. Iniciar el servidor:

```bash
php artisan serve

```
La aplicación estará disponible en:
http://localhost:8000

---

## Uso
### Ejemplo de petición GET

```bash
curl http://localhost:8000/api/clientes

```
---

## Estructura del Proyecto

La siguiente estructura muestra la organización de la API gestión de contactos:
```text
/proyecto-laravel-facturas
 ├── app/
 │   ├── Models/
 │   │   ├── Cliente.php
 │   │   ├── Factura.php
 │   │   └── Pago.php
 │   ├── Http/
 │   │   ├── Controllers/
 │   │   │   ├── ClienteController.php
 │   │   │   ├── FacturaController.php
 │   │   │   └── PagoController.php
 │   │   └── Requests/
 ├── database/
 │   ├── migrations/
 │   └── seeders/
 ├── resources/
 │   └── views/
 │       ├── clientes/
 │       ├── facturas/
 │       └── pagos/
 ├── routes/
 │   ├── web.php
 │   └── api.php
 ├── public/
 ├── README.md
 ├── composer.json
 └── .env.example
```
## Acceso y Credenciales

Si el proyecto incluye autenticación, puedes documentar un usuario de prueba:

```text
URL: http://localhost:8000/login
Usuario: admin@example.com
Contraseña: password

```
## Contribución

1. Hacer un fork del repositorio.
2. Crear una nueva rama:

```bash
git checkout -b nueva-funcionalidad

```
3. Realizar cambios y hacer commits claros.

4. Enviar un Pull Request describiendo:
-Qué se ha añadido o corregido.
-Por qué.
-Cómo probarlo.

Autoría
Proyecto desarrollado por Mariia Staryk como parte del módulo de Desarrollo Web y Documentación Técnica.

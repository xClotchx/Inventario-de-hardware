# 🛠️ Sistema de Inventario de Hardware 

Este es un sistema de gestión de inventario desarrollado con **PHP** y **MariaDB**. Permite administrar componentes de hardware, controlar el stock mediante alertas visuales de colores y realizar filtrados avanzados.

## 🚀 Características
- **CRUD Completo:** Crear, Leer, Actualizar (Editar) y Eliminar componentes.
- **Semáforo de Stock:**
  - 🔴 **Rojo:** Agotado (0 unidades).
  - 🟡 **Amarillo:** Stock crítico (1 a 5 unidades).
  - ⚪ **Blanco:** Stock suficiente (más de 5 unidades).
- **Filtros Dinámicos:** Búsqueda por nombre, categoría (incluyendo Motherboards) y estado.
- **Interfaz Dark Mode:** Diseño moderno basado en CSS personalizado.

## 📋 Requisitos
- Servidor local (XAMPP, MAMP o similar). Utilize PHP
- PHP 7.4 o superior.
- MariaDB / MySQL.

## 🔧 Instalación y Configuración

### 1. Base de Datos
1. Crea una base de datos llamada `hardware_db` en tu gestor de MariaDB.
2. Importa el archivo de respaldo incluido en este repositorio:
   ```bash
   mysql -u tu_usuario -p hardware_db < database.sql
>[!WARNING]
>Si se utilza otro nombre para la base de datos recuerde cambiarlo en el db.php.
# 📁 Estructura del Proyecto
- index.php: Panel principal y lista de componentes.

- editar.php: Formulario para modificar registros existentes.

- insertar.php: Lógica para agregar nuevo hardware y otros.

- eliminar.php: Lógica para borrar registros.

- database.sql: Respaldo de la base de datos.

- styles.css: Estilos visuales del sistema.

>[!IMPORTANT]
>usuario y contraseña creados y utilizados "admin" "12345" este usuario posee todos los privilegios.

# Instalacion de php y mariadb ( MacOS)
- Instala PHP
  ```bash
  brew install php

- Instala Mariadb
  ```bash
  brew install mariadb

- Inicia PHP
  ```bash
   brew services start php 
- Inicia mariadb
  ```bash
   brew services start mariadb
>[!IMPORTANT]
>Se requiere tener instalado el brew.
# Codigo index.PHP
<img width="934" height="577" alt="image" src="https://github.com/user-attachments/assets/49002ce0-c373-4300-a31d-e079bdca311a" />
<img width="936" height="464" alt="image" src="https://github.com/user-attachments/assets/41d6648e-3b78-4188-9af5-fa64d5e25cb2" />
<img width="933" height="492" alt="image" src="https://github.com/user-attachments/assets/4f112247-9043-4bf2-9752-1894d4f927bc" />
<img width="938" height="335" alt="image" src="https://github.com/user-attachments/assets/efb5170e-5996-4bff-bbc5-40d2b27b8c1a" />
<img width="934" height="463" alt="image" src="https://github.com/user-attachments/assets/7ade0273-76af-4195-8057-8c902aa7ce6a" />

# Codigo db.PHP
<img width="476" height="339" alt="image" src="https://github.com/user-attachments/assets/c3e0d689-3f8a-4662-a73b-6c1e4406e93e" />
>[!IMPORTANT]
>Este es el php que se encarga de realizar la conexion con la base de datos.

# Codigo eliminar.PHP
<img width="636" height="494" alt="image" src="https://github.com/user-attachments/assets/baed74d4-4741-41b0-8f96-c88bab0088a6" />

# Codigo editar.PHP
<img width="631" height="598" alt="image" src="https://github.com/user-attachments/assets/eae82fff-0cad-47d1-b586-aadd1cd9f225" />
<img width="779" height="520" alt="image" src="https://github.com/user-attachments/assets/4996d268-e10c-40fa-88b3-a01263a4f26f" />
<img width="857" height="320" alt="image" src="https://github.com/user-attachments/assets/684b98a0-2f14-46bc-80a4-f4dbe4c319f6" />
>[!IMPORTANT]
>saldra lineas amarillas (7) no es ningun error solo avisando de la comprencion del codigo.

# Codigo insertar.PHP
<img width="587" height="333" alt="image" src="https://github.com/user-attachments/assets/14da21a0-1a28-4502-80cd-75a1d1bc612f" />

# Codigo css
<img width="637" height="560" alt="image" src="https://github.com/user-attachments/assets/afe017c2-3938-4d12-afbd-f1f61422c5d7" />
<img width="569" height="559" alt="image" src="https://github.com/user-attachments/assets/7433b5b1-7c3a-4f17-a4d4-95236bd12fe8" />
<img width="502" height="581" alt="image" src="https://github.com/user-attachments/assets/50fa80d6-4143-4795-a7fd-b5e1edfa3c2e" />
<img width="640" height="505" alt="image" src="https://github.com/user-attachments/assets/6d839237-95ba-4bae-b4da-c0027e4d7443" />
<img width="663" height="526" alt="image" src="https://github.com/user-attachments/assets/4ebb3a92-a13d-4587-a5e9-e31a2f893e0b" />
<img width="740" height="475" alt="image" src="https://github.com/user-attachments/assets/6fa3cd96-a501-47ef-89a9-1181810220ea" />


>[!NOTE]
>El css se encarga de darle ese estilo y diseño a la pagina.

# Vista Final
<img width="941" height="550" alt="image" src="https://github.com/user-attachments/assets/a7ef3d11-81aa-471a-883d-02a9bb7d45ac" />
<img width="841" height="566" alt="image" src="https://github.com/user-attachments/assets/13b96140-9b6b-4fd2-be96-000b37521abd" />

## Editar/Actualizar datos
<img width="899" height="395" alt="image" src="https://github.com/user-attachments/assets/ce52bd26-98fb-45a6-a273-a617ac74ea95" />
## Busqueda de componentes
<img width="823" height="348" alt="image" src="https://github.com/user-attachments/assets/3fc6a65e-df94-46d5-81a8-f1e2d6673ba8" />

>[!NOTE]
>Es un CRUD sencillo pero completamente funcional.

# Extra
## El PHP corriendo
<img width="572" height="434" alt="image" src="https://github.com/user-attachments/assets/1b4c14aa-1f04-4c3a-8e12-d14370de0703" />

>[!NOTE]
>Se detiene el php con control + c.

## La Base de datos
<img width="565" height="431" alt="image" src="https://github.com/user-attachments/assets/9c04a34e-e548-45de-aac2-5616cd6b8398" />


>[!NOTE]
>Para salir de mariadb o de mysql escribir "exit" + enter.




![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)








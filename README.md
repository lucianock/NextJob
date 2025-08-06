# 🚀 NextJob - Portal de Empleo

## 📋 Descripción
NextJob es una plataforma completa de búsqueda y publicación de empleos con filtrado avanzado, perfiles de empresas y gestión de usuarios. Incluye un panel de administración y un diseño responsive para una experiencia de usuario fluida.

## ✨ Características

- 💼 **Publicación de empleos**: Las empresas pueden publicar ofertas de trabajo con detalles como título, salario, ubicación y horario.
- 🏢 **Perfiles de empresas**: Cada empleador tiene su propio perfil con logo y listado de ofertas publicadas.
- 🏷️ **Sistema de etiquetas**: Las ofertas pueden ser categorizadas mediante etiquetas para facilitar la búsqueda.
- 🔍 **Búsqueda avanzada**: Los usuarios pueden filtrar ofertas por diferentes criterios.
- 🔐 **Autenticación de usuarios**: Sistema completo de registro, inicio de sesión y gestión de perfiles.
- 📱 **Diseño responsive**: Experiencia optimizada en dispositivos móviles y de escritorio.

## 🛠️ Tecnologías

- 🖥️ **Backend**: Laravel 11
- 🎨 **Frontend**: Blade, TailwindCSS
- 💾 **Base de datos**: SQLite (configurable para MySQL, PostgreSQL, etc.)
- 🔒 **Autenticación**: Sistema nativo de Laravel

## 📋 Requisitos

- PHP >= 8.2
- Composer
- Node.js y npm
- SQLite (o el motor de base de datos de tu preferencia)

## 🚀 Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/tu-usuario/nextjob.git
cd nextjob
```

2. Instala las dependencias de PHP:

```bash
composer install
```

3. Instala las dependencias de JavaScript:

```bash
npm install
```

4. Copia el archivo de entorno y genera la clave de la aplicación:

```bash
cp .env.example .env
php artisan key:generate
```

5. Configura la base de datos en el archivo .env (por defecto usa SQLite):

```bash
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

6. Crea el archivo de base de datos SQLite:

```bash
touch database/database.sqlite
```

7. Ejecuta las migraciones y los seeders:

```bash
php artisan migrate --seed
```

8. Compila los assets:

```bash
npm run dev
```

9. Inicia el servidor de desarrollo:

```bash
php artisan serve
```

## 👥 Contribución

Las contribuciones son bienvenidas. Por favor, sigue estos pasos:

1. Haz fork del repositorio
2. Crea una rama para tu característica (`git checkout -b feature/amazing-feature`)
3. Haz commit de tus cambios (`git commit -m 'Add some amazing feature'`)
4. Haz push a la rama (`git push origin feature/amazing-feature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo LICENSE para más detalles.

## 📞 Contacto

Luciano Campos Kriegl - [lucianock.com](https://lucianock.com)

Enlace del proyecto: [https://github.com/lucianock/nextjob](https://github.com/lucianock/nextjob)
# Proyecto Observaciones Astronómicas

## Descripción del proyecto

Esta aplicación es un diario de observación de estrellas dobles diseñado para astrónomos aficionados y profesionales.

Permite registrar observaciones astronómicas de forma detallada, incluyendo información como la fecha, la hora, la ubicación, el telescopio utilizado y otros parámetros relevantes de la observación.

Además, el sistema permite almacenar datos técnicos de las estrellas dobles observadas, como su separación, magnitud, posición angular y otras características astronómicas.

El objetivo de la aplicación es facilitar el seguimiento y análisis de estrellas dobles a lo largo del tiempo, ayudando tanto al estudio personal como a la colaboración entre astrónomos, y contribuyendo potencialmente a la identificación de sistemas aún no catalogados.

## Tecnologías utilizadas
- PHP
- MySQL
- HTML / CSS / JavaScript

## Estructura del proyecto
- `/codigo/` – Código fuente de la web
- `/documentacion/` – PDF y presentación del proyecto

## Funcionalidades
- Registro e inicio de sesión de usuarios
- Subida y gestión de observaciones
- Comparación de datos de observación
- Visualización de imágenes y resultados

## Material adicional
- [Documentación PDF](documentacion_proyecto.pdf)
- [Presentación PDF](Estrellas_dobles.pdf)

## Nota obtenida
9.9 / 10

## Mejoras que implementaría hoy

Este proyecto fue desarrollado durante el Grado Superior, por lo que actualmente implementaría varias mejoras basadas en los conocimientos adquiridos posteriormente en desarrollo seguro y ciberseguridad:

- 🔐 **Seguridad en autenticación**
  - Implementación de hashing de contraseñas utilizando `bcrypt` o `Argon2`.
  - Mejora del sistema de sesiones para evitar fijación o secuestro de sesión.

- 🛡️ **Protección contra ataques web**
  - Prevención de inyección SQL mediante consultas preparadas en todos los casos.
  - Protección contra XSS (Cross-Site Scripting) mediante sanitización de entradas.
  - Implementación de tokens CSRF en formularios.

- 🔑 **Gestión segura de credenciales**
  - Separación de la configuración en variables de entorno (`.env`).

- 📁 **Gestión de archivos**
  - Validación estricta de archivos subidos (tipo, tamaño y contenido).
  - Almacenamiento seguro de imágenes fuera del directorio público cuando sea posible.

- ⚙️ **Arquitectura y mantenimiento**
  - Separación del código en capas (MVC o estructura modular).
  - Mejora de la organización del backend para facilitar escalabilidad.
  - Implementación de logging para auditoría de acciones importantes.

- 🚀 **Mejoras de rendimiento y experiencia**
  - Optimización de consultas a base de datos.
  - Mejora de la interfaz de usuario para mayor usabilidad y accesibilidad.

VisitPanama – WordPress Deployment

Este proyecto consiste en el despliegue de un sitio WordPress utilizando contenedores Docker sobre DigitalOcean App Platform, con integración CI/CD y controles básicos de seguridad.

Tecnologías

WordPress 6.5

PHP 8.2 con Apache

Docker

DigitalOcean App Platform

GitHub

SonarCloud

BetterStack

Arquitectura

El proyecto utiliza la imagen oficial de WordPress con Apache.
La configuración de base de datos y claves de seguridad se realiza mediante variables de entorno definidas en la plataforma de despliegue.

La base de datos es gestionada externamente por DigitalOcean.

Seguridad Implementada

Uso de variables de entorno para credenciales (sin contraseñas en el repositorio)

Deshabilitación de edición de archivos desde el panel de administración

Prefijo personalizado en tablas

Configuración segura de base de datos (utf8mb4)

Análisis estático de código con SonarCloud

Monitoreo HTTP con BetterStack

Variables de Entorno Requeridas

WP_DB_NAME

WP_DB_USER

WP_DB_PASSWORD

WP_DB_HOST

WP_AUTH_KEY

WP_SECURE_AUTH_KEY

WP_LOGGED_IN_KEY

WP_NONCE_KEY

WP_AUTH_SALT

WP_SECURE_AUTH_SALT

WP_LOGGED_IN_SALT

WP_NONCE_SALT

Estas variables no se almacenan en el código fuente y son gestionadas en el entorno de despliegue.

Estructura del Proyecto

Dockerfile

wp-config.php

wp-content/

README.md

Objetivo

Implementar un entorno WordPress seguro, reproducible y alineado con buenas prácticas de DevSecOps, evitando el uso de instalaciones preconfiguradas y aplicando controles básicos de hardening.

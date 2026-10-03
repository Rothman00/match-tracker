# Proyecto en Symfony y VueJS
1. Reglas de Negocio y Validación (Backend - Symfony)
Debes implementar validaciones estrictas antes de guardar en la base de datos:

Regla A: Un árbitro no puede ser asignado a dos partidos que ocurran en la misma fecha. Debes consultar la base de datos antes de persistir para verificar la disponibilidad.

Regla B: Un partido no puede tener dos árbitros con el mismo rol (no pueden haber dos "Centrales" en el mismo juego).

Pista: Usa el componente Validator de Symfony o haz la validación en el controlador/servicio antes de hacer el flush(). Si falla, devuelve un código HTTP 400 (Bad Request) con un mensaje claro en JSON.

2. Arquitectura y Desacoplamiento (Backend - Symfony)
Para demostrar que entiendes cómo estructurar un monolito modular (separar responsabilidades):

No pongas toda la lógica dentro del controlador. Crea un servicio dedicado (ej. AssignmentService) que se encargue de validar y guardar.

Eventos: Una vez que la asignación se guarde con éxito, dispara un Evento de Symfony (EventDispatcher). Crea un "Subscriber" que escuche ese evento y guarde un registro en una cuarta tabla llamada AuditLog (ej. "El árbitro X fue asignado al partido Y"). Esto simula cómo un módulo de asignaciones se comunica con un módulo de notificaciones/auditoría sin acoplarse.

3. Seguridad Básica de API (Backend - Symfony)

Protege los endpoints de creación (POST /games, POST /assignments). Solo deben ser accesibles si envías un Token en los headers de la petición (puede ser un JWT real si te animas, o un token estático quemado en un archivo de configuración para ahorrar tiempo). Si no hay token, devuelve un HTTP 401 (Unauthorized).

Los endpoints de lectura (GET) deben ser públicos.

4. Reactividad y Componentes (Frontend - Vue.js)

Divide tu interfaz en al menos dos componentes reutilizables: un formulario (AssignmentForm.vue) y una lista (GameList.vue).

Manejo de Errores: Cuando intentes asignar a un árbitro ocupado (Regla A) o duplicar un rol (Regla B), captura el error 400 que manda Symfony y muestra una alerta visual en el frontend (un mensaje en rojo).

Estado: Cuando el formulario guarde con éxito, debe comunicarse con el componente de la lista (usando emits o manejo de estado simple) para que los datos se actualicen sin recargar la página.

5. Infraestructura (Docker)

Asegúrate de que todo siga corriendo con docker-compose.
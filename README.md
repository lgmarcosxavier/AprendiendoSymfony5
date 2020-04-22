### Aprendiendo Symfony 5


- Iniciar proyecto
```
symfony server:start
```

- Ver comandos disponible
```
php bin/console
```

- Ver las rutas de la aplicación
```
php bin/console debug:router
```

### Verbos en formularios HTML
Los formularios HTML solo admiten métodos GETy POSTmétodos. Si está llamando a una ruta con un método diferente de un formulario HTML, agregue un campo oculto llamado _methodcon el método a usar (por ejemplo <input type="hidden" name="_method" value="PUT"/>). Si crea sus formularios con Symfony Forms, esto se hace automáticamente por usted.


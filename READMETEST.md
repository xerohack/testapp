# TestRedCapital
Respuestas a prueba técnica Red Capital


EN BASE A LAS 3 TABLAS PRESENTADAS (Compra, Detalle_Compra, Categoria), las consultas con ORM Eloquent son;

1.  a) $detallecompras=Detalle_compra::where('compra_id','=',$id)->get();
    b) En la tabla "Detalle_precio" falta el atributo total.
      De todas maneras, la consulta en eloquent sería;
      $totalcompras = Detalle_compra::orderBy('categoria_id', 'DESC');

2. En cuanto al inicio de desarrollo, un diseño basado en composicion es mas lento, mas complejo pero mas facil de cambiar en el tiempo. En cambio, herencia no es tan adaptable al cambio, es una metodologia mas rapida y facil, pero pobre.

Cuando usar herencia: cuando la relacion es de 1 a 1.
Cuando usar composicion: cuando la relacion es de 1 a 0 o 1 a n.

3. El patron de diseño MVC se refiera a Modelo, Vista, Controlador, que es un patron de arquitectura de construccion de software.
  Funciona de la siguiente manera; un usuario al hacer una peticion lo hace a traves de la VISTA del sistema, este se comunica con el CONTROLADOR para, segun cual sea la peticion, consultar los datos al MODELO, validar los datos y devolver esta peticion al CONTROLADOR y luego a la VISTA. De esta forma se comunican los tres entes mas importantes del framework laravel.

4. Adjunto al repositorio.

5. Ventajas; agiliza la produccion de codigo ya que es simple de configurar y usar, al crear funciones como insert, update y delete las torna mas facil porque encapsula el codigo, ademas, facilita su entendimiento para el programador. Otra poderosa ventaja es que active record protege en un gran porcentaje de ataques SQL Inyection.
Desventaja; Una de su principal desventaja se ve cuando se quieren realizar pruebas de software, ya que, las pruebas unitarias sin una base de datos son dificil de realizar. Ademas, si se desea cambiar algo de la BD debe ser editados todos los objetos en sus metodos de acceso.

6. a) php artisan make:controller NombreController
      Tambien se podria crear con un par de recursos mas con el siguiente comando:
      php artisan make:model NombreModelo -mvc
      De esta forma creamos; Modelo, migracion y controlador.
      
   B) Un seed ya creado se puede correr con el siguiente comando;
      php artisan db:seed --class=NombreSeeder
      
      Para correr todos los seeders que tenemos se ejecuta el siguiente comando:
      php artisan db:seed
      
   C) La diferencia es que el metodo "find" busca por atributo especifico, mientras que "all" trae todo lo que encuentra.
     

<?php
    /*
    Y - año -- 9999
    m - mes -- 05
    d - dia -- 
    */
    $hoy = date("Y / m / d");
    echo "Fecha de hoy: ".$hoy;
    $hoy2 = date("l d Y");
    echo "<br/>";
    echo "Fecha de hoy: ".$hoy2;

    /*
    
    d	Día del mes, 2 dígitos con ceros iniciales	01 a 31
    D	Una representación textual de un día, tres letras	Mon hasta Sun
    j	Día del mes sin ceros iniciales	1 a 31
    l ('L' minúscula)	Una representación textual completa del día de la semana	Sunday hasta Saturday
    N	Representación numérica ISO-8601 del día de la semana (añadido en PHP 5.1.0)	1 (para lunes) hasta 7 (para domingo)
    S	Sufijo ordinal inglés para el día del mes, 2 caracteres	st, nd, rd o th. Funciona bien con j
    w	Representación numérica del día de la semana	0 (para domingo) hasta 6 (para sábado)
    z	El día del año (comenzando por 0)	0 hasta 365
    Semana	---	---
    W	Número de la semana del año ISO-8601, las semanas comienzan en lunes	Ejemplo: 42 (la 42ª semana del año)
    Mes	---	---
    F	Una representación textual completa de un mes, como January o March	January hasta December
    m	Representación numérica de un mes, con ceros iniciales	01 hasta 12
    M	Una representación textual corta de un mes, tres letras	Jan hasta Dec
    n	Representación numérica de un mes, sin ceros iniciales	1 hasta 12
    t	Número de días del mes dado	28 hasta 31
    Año	---	---
    L	Si es un año bisiesto	1 si es bisiesto, 0 si no.
    o	Año según el número de la semana ISO-8601. Esto tiene el mismo valor que Y, excepto que si el número de la semana ISO (W) pertenece al año anterior o siguiente, se usa ese año en su lugar. (añadido en PHP 5.1.0)	Ejemplos: 1999 o 2003
    Y	Una representación numérica completa de un año, 4 dígitos	Ejemplos: 1999 o 2003
    y	Una representación de dos dígitos de un año	Ejemplos: 99 o 03
    Hora	---	---
    a	Ante meridiem y Post meridiem en minúsculas	am o pm
    A	Ante meridiem y Post meridiem en mayúsculas	AM o PM
    B	Hora Internet	000 hasta 999
    g	Formato de 12 horas de una hora sin ceros iniciales	1 hasta 12
    G	Formato de 24 horas de una hora sin ceros iniciales	0 hasta 23
    h	Formato de 12 horas de una hora con ceros iniciales	01 hasta 12
    H	Formato de 24 horas de una hora con ceros iniciales	00 hasta 23
    i	Minutos con ceros iniciales	00 hasta 59
    s	Segundos con ceros iniciales	00 hasta 59
    u	Microsegundos (añadido en PHP 5.2.2). Observe que date() siempre generará 000000 ya que toma un parámetro de tipo integer, mientras que DateTime::format() admite microsegundos si DateTime fue creado con microsegundos.	Ejemplo: 654321
    v	Milisegundos (añadido en PHP 7.0.0). La misma observación se aplica para u.	Example: 654
    Zona Horaria	---	---
    e	Identificador de zona horaria (añadido en PHP 5.1.0)	Ejemplos: UTC, GMT, Atlantic/Azores
    I (i mayúscula)	Si la fecha está en horario de verano o no	1 si está en horario de verano, 0 si no.
    O	Diferencia de la hora de Greenwich (GMT) sin colon entre horas y minutos	Ejemplo: +0200
    P	Diferencia con la hora de Greenwich (GMT) con dos puntos entre horas y minutos (añadido en PHP 5.1.3)	Ejemplo: +02:00
    T	Abreviatura de la zona horaria	Ejemplos: EST, MDT ...
    Z	Índice de la zona horaria en segundos. El índice para zonas horarias al oeste de UTC siempre es negativo, y para aquellas al este de UTC es siempre positivo.	-43200 hasta 50400
    Fecha/Hora Completa	---	---
    c	Fecha ISO 8601 (añadido en PHP 5)	2004-02-12T15:19:21+00:00
    r	Fecha con formato » RFC 2822	Ejemplo: Thu, 21 Dec 2000 16:01:07 +0200
    U	Segundos desde la Época Unix (1 de Enero del 1970 00:00:00 GMT)	Vea también time()
    
    */

?>


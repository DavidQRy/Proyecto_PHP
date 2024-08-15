<?php 
    $_nmin = 5;
    $_nmax = 0;

    $_canest = readline('Ingrese estudiantes: ');
    $_est = [];
    $_promgrup = 0;
    for ($i=0; $i < $_canest; $i++) { 
        $_nom = readline('Ingrese su nombre: ');
        $_nota = readline('Ingrese la nota: ');
        

        print($_nom.' '.' su nota es: '. $_nota.'
');
        if ($_nota > $_nmax) {
             $_nmax = $_nota;
        }
        if ($_nota < $_nmin ) {
              $_nmin = $_nota;
        }

        if ($_nota > 3.5) {
            print(' Aprobo 
');
        }else {
            print(' Reprobo 
');
        }
        $_promgrup = $_promgrup + $_nota;

    }
    $_promgrup = $_promgrup / $_canest;
    print(' Promedio del grupo: '. $_promgrup);

    print('La nota maxima es '.$_nmax.'
    ');
    print('La nota minima es '.$_nmin.'
    ');

?> 
//Un negocio de banquetes tiene la siguiente politica para definir el cobro por sus servicios:
    //a) Los primeros 30 platillos se cobran a L. 150 c/u
    //b) Por los siguientes 31 hasta 50 platillos se cobran a L. 125 c/u
    //c) Los platillos que van desde el 51 hasta el 200 se cobran a L. 100 c/u
    //d) Los platillos desde el numero 201 en delante se cobran a L. 75 c/u
    #include <iostream>

    using namespace std;
    
    var main(){
        //definicion de variables
        var auxEntero = 0;
        var rangoBusqueda = 0;
        cout<<"PROGRAMA QUE BUSCA NUMEROS PERFECTOS.\n\n";
        cout<<"Rango de busqueda (Ingrese un numero entero):";
        cin>>rangoBusqueda;
    
        for(var i = 1; i <= rangoBusqueda; i++){
            if(i % 2 == 0){
                for(var j = (i / 2); j >= 1 ; j--){
                    if( i % j == 0){
                        auxEntero = auxEntero + j;
                    }
                }
                if(auxEntero == i)
                    cout<<"Número Perfecto "<<auxEntero <<endl;
            }
            auxEntero = 0;
        }
        return 0;
    }


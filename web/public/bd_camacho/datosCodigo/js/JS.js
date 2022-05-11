
/* Funcion para el reloj */
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}

function checkTime(i)
{if (i<10) {i="0" + i;}return i;}

/* Funcion para saber el dia presente */
function getmyday(){
var d=new Date();
var dia=new Array(7);
dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miercoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sabado";
 var cadena= dia[d.getDay()];
 return cadena
/*document.getElementById('dia').innerHTML="Bienvenid@, hoy es: " + dia[d.getDay()]; */
}

/*Funcion para hacer el calendario de la pagina de la encuesta*/
function myCalendar(){
          var f=new Date();
          var ano = f.getFullYear();
          var mes = f.getMonth();
          var dia = f.getDate();
          var estiloDia;
          var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
          var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
          var diasMes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
          var diaMaximo = diasMes[mes];
          if (mes == 1 && (((ano % 4 == 0) && (ano % 100 != 0)) || (ano % 400 == 0)))
              diaMaximo = 29;
          document.write('<div class="mifecha2">');
          document.write('<div class="mesano">' + meses[mes] + ' ' + ano + ':</div>');

          for (i=1; i<=diaMaximo; i++){
              if(i == dia)
                  estiloDia = "diaactual";
              else
                  estiloDia = "dia";
            document.write('<div class="' + estiloDia + '">' + i + '</div>');}   
          document.write('</div>');

}

/* Funciones para hacer cookie que cuenta las entradas a la página */

function getexpirydate( nodays){
var UTCstring;
Today = new Date();
nomilli=Date.parse(Today);
Today.setTime(nomilli+nodays*24*60*60*1000);
UTCstring = Today.toUTCString();
return UTCstring;
}
function getcookie(cookiename) {
 var cookiestring=""+document.cookie;
 var index1=cookiestring.indexOf(cookiename);
 if (index1==-1 || cookiename=="") return "";
 var index2=cookiestring.indexOf(';',index1);
 if (index2==-1) index2=cookiestring.length;
 return unescape(cookiestring.substring(index1+cookiename.length+1,index2));
}
function setcookie(name,value,duration){
cookiestring=name+"="+escape(value)+";EXPIRES="+getexpirydate(duration);
document.cookie=cookiestring;
if(!getcookie(name)){
return false;
}
else{
return true;
}
}

function contadorcookie(){
  count= getcookie("counter");
if(isNaN(count)){
  y=setcookie('counter',0,1);
count=0;
}
count++;
var cadena1="Visitantes de esta pagina "+count+ " ";
y=setcookie('counter',count,1);
return cadena1
}

/* Funcion para crear cookies en el nombre que se ingresa en la encuesta*/
 function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function guardaValor() {

    var valor = document.getElementById("nombre").value; //guardo el valor del input nombre en una variable//
    var apellido = document.getElementById("apellido").value;
    var fecha = document.getElementById("fecha").value;

    setCookie("nombreCookie", valor, 30);
    setCookie("apellidoCookie", apellido, 50);
    setCookie("fechaCookie", fecha, 50);

} 




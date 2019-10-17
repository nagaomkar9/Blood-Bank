/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function focusfunc(x)
        {
           
            document.getElementById(x).style.background = "yellow" ;
            
        }
         function blurfunc(x)
        {
           
            document.getElementById(x).style.background = "lightgreen" ;
        }
        function verifying(z)
        {
            //document.write("kk"
            x=document.getElementById(z);
            var w=/^[a-z , 0-9]{3,}\@[a-z]{4,}\.[a-z , .]{3,5}$/;
            if(x.match(w))
            {
                 var y="valid email-address";
                document.getElementById("p3").innerHTML=y;
            }
            else
            {
                alert("invalid dengey");
            }
        }
        function resetby()
        {
            alert("the form was reset");
        }
        function f1()
{
document.getElementById("m1").style.color="red";
}
function f2()
{
document.getElementById("m1").style.color="yellow";
}
function f3()
{
document.getElementById("a1").style.color="maroon";
}
function f4()
{
document.getElementById("a1").style.color="lime";
}
function f5()
{
document.getElementById("g1").style.color="Darkred";
}
function f6()
{
document.getElementById("g1").style.color="orchid";
}
function f7()
{
document.getElementById("p1").style.color="purple";
}
function f8()
{
document.getElementById("p1").style.color="olive";
}
function f9()
{
document.getElementById("u1").style.color="aqua";
}
function f10()
{
document.getElementById("u1").style.color="navy";
}
function f11()
{
document.getElementById("b1").style.color="blue";
}
function f12()
{
document.getElementById("b1").style.color="silver";
}
function f13()
{
document.getElementById("c1").style.color="red";
}
function fun(s)
{
    var x=document.getElementById(s).value;
    var w=/^[a-z , 0-9]{3,}\@[a-z]{4,}\.[a-z , .]{3,5}$/;
    if(!x.match(w))
    {
        var e="invalid email address";
       document.getElementById("p3").innerHTML=e;
    }
    else
    {
        var f="valid";
        document.getElementById("p3").innerHTML="";
    }
}
function fun1(s)
{
    var x=document.getElementById(s).value;
    
    if(x<18 | x>55)
    {
        var e="sorry,you are not eligible to donate";
       document.getElementById("td1").innerHTML=e;
    }
    else
    {
        var f="valid";
        document.getElementById("td1").innerHTML="";
    }
}
function newconf()
{
    var x=document.getElementById("passbabs").value;
                var y=document.getElementById("pa").value;
    
    if(!x.match(y))
    {
        var e="sorry,you're passwords are not matching";
       document.getElementById("td5").innerHTML=e;
    }
    else
    {
        document.getElementById("td5").innerHTML="";
    }
}
  
function fun99()
            {
                var x=document.getElementById("passes").value;
                var y=/^[a-z,A-Z]{3,25}$/;
                if(!x.match(y))
                    {
                        var e="password must contain alphabits of minimum length 3 without using numbers or special characters";
                        document.getElementById("td99").innerHTML=e;
                    }
               else
                    {
                        var f="valid";
                        document.getElementById("td99").innerHTML="";
                    }
            }
            function fun98()
            {
                var x=document.getElementById("passbabs").value;
                var y=/^[a-z,A-Z]{3,25}$/;
                if(!x.match(y))
                    {
                        var e="password must contain alphabits of minimum length 3 without using numbers or special characters";
                        document.getElementById("td98").innerHTML=e;
                    }
               else
                    {
                        var f="valid";
                        document.getElementById("td98").innerHTML="";
                    }
            }
            function fun97()
            {
                var x=document.getElementById("pa").value;
                var y=/^[a-z,A-Z]{3,25}$/;
                if(!x.match(y))
                    {
                        var e="password must contain alphabits of minimum length 3 without using numbers or special characters";
                        document.getElementById("td97").innerHTML=e;
                    }
               else
                    {
                        var f="valid";
                        document.getElementById("td97").innerHTML="";
                    }
            }
function fun4(s)
{
    var x=document.getElementById(s).value;
    
    if(x<45)
    {
        var e="sorry,you are underweight";
       document.getElementById("td3").innerHTML=e;
    }
    else
    {
        var f="valid";
        document.getElementById("td3").innerHTML="";
    }
}
function fun2(s)
{
    var x=document.getElementById(s).value;
    var y=/^[6-9][0-9]{9}$/;
    if(!x.match(y))
    {
        var e="invalid contact number";
       document.getElementById("td2").innerHTML=e;
       return false;
    }
    else
    {
        var f="valid";
        document.getElementById("td2").innerHTML="";
        return true;
    }
}


function verify()
{
    var dx=document.getElementsById("pass2").value;
    var dy=/^[a-z,A-Z]{3,25}$/;
    var x=document.getElementById("c2").value;
    var y=/^[7-9][0-9]{9,10}$/;
    var c=document.getElementById("pass").value;
    var w=/^[a-z , 0-9]{3,}\@[a-z]{4,}\.[a-z , .]{3,5}$/;
    var u=document.getElementById("age").value;
    var v=document.getElementById("weight").value;
    if(dx.match(dy))
    {
        if(x.match(y))
        {
            if(c.match(w))
            {
                if(u>17 && u<56)
                {
                    if(v>44)
                    {
                        return true;
                    }
                    else
                    {
                        alert("sorry,you are underweight");
                        return false;
          
                    }
                }
                else
                {
                    alert("sorry,you are not eligible to donate");
                    return false;
          
                }
            }
            else
            {
                alert("please enter valid email address");
                return false;
          
            }
        }
        else
        {
        alert("invalid contact number");
        return false;
          
        }
    }
    else
    {
    alert("password must begin with an alphabit of minimum length 3");
    return false; 
    }
    
    
}

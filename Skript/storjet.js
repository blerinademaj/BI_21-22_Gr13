var kronikat2;
var kronikat3;
var me_shume_b;
var me_pak_b;

function start()
{
     kronikat2=document.getElementById("kronikat2");
     kronikat3=document.getElementById("kronikat3");
     me_shume_b=document.getElementById("more");
     me_pak_b=document.getElementById("less");
  
     me_shume_b.addEventListener("click",see_more,false);
     me_pak_b.addEventListener("click",see_less,false);
        
}

window.addEventListener("load",start,false);

function see_more()
{
    if(kronikat2.style["display"]==="")
        {
            kronikat2.style["display"]="block";
            me_pak_b.style["display"]="block";
        }
    else
        {
           if(kronikat3.style["display"]==="")
            {
                 kronikat3.style["display"]="block";
                me_shume_b.style["display"]="none"; 
           }
        }
}

function see_less()
{
    if(kronikat3.style["display"]==="block")
        {
            kronikat3.style["display"]="";
            me_shume_b.style["display"]="block";
        }

    else
        {
           if(kronikat2.style["display"]==="block")
           {
               kronikat2.style["display"]="";
             me_pak_b.style["display"]="none";
            }
        }
}

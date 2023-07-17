    function toogleMenu()
    {
        var menulist= document.getElementById("opt");
        if(menulist.style.display=="none")
        {
            menulist.style.display="block";
        }
        else
        {
            menulist.style.display="none";
        }
    }
    function move2login(){
        location.replace("login.html");
    }
    function move2prod(){
        location.replace("products.html");
    }

    function move2signin(){
        location.replace("signin.html");
    }
        


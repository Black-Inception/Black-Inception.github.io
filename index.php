<html>
    <head>
        <title>WELCOME</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="style.scss">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $(".cats").css("display","none");
            $(".cross-icon").hide();
            
            $(".menu-icon").click(function(){
                $("nav").css("width","100%");
                $("nav").css("height","100%");
                $("nav").animate({top:"0%"});
                $(".cats").css("display","block");
                $(".menu-icon").css("display","none");
                $("#menu-title").css("display","none");
                $(".cross-icon").show();
            });

            $(".cross-icon").click(function(){
                $("nav").animate({top:"90%"});
                $("nav").css("height","10%");
                $(".cats").css("display","none");
                $(".menu-icon").css("display","block");
                $("#menu-title").css("display","block");
                $(".cross-icon").hide();
            });
        });
        </script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <h4>EVERGREEN NURSERY</h4>

            <aside>
                <h4 id="menu-title">MENU</h4>
                    <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <h2 class="cross-icon">&#10006;</h2>
            </aside>
            
            <div class="cats" style="margin-left:20%;margin-top:10%;">     
                <a class="text-secondary" href="#"><h1>HOME</h1></a> 
                <a class="text-secondary" href="#"><h1>HOME</h1></a> 
                <a class="text-secondary" href="#"><h1>HOME</h1></a> 
                <a class="text-secondary" href="#"><h1>HOME</h1></a> 
                <br><br><br><BR><BR>
        </div>
        </nav> 

        <script>
            var x = document.getElementByTagName("nav").width;
            alert("HI");
        </script>
    </body>
</html>
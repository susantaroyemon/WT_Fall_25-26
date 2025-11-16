<!DOCTYPE html>

<html>
    <head>


</head>
     <body>
    
     <h1 id = "pagetitle"> Light Mood </h1>
     <button id = " swtichmotion" onclick="toggle()"> Switch </button>

    <script>

        functin toggle(){

            var body = document.body;
            var title = document.getElementById("pagetitle");
            var button = document.getElementById("swtichmotion");
        

    if(body.style.backgroundColour==="black")
    {
        body.style.backgroundColour==="white";
        title.style.colour ="black";
        title.innerHTML="Light Mode";
        button.innerHTML="Switch to Dark Mood";


    }
    else{
         body.style.backgroundColour==="black";
        title.style.colour ="White";
        title.innerHTML="Dark Mode";
        button.innerHTML="Switch to Light Mood";
    }
}
        </script>

     </body>
</html>
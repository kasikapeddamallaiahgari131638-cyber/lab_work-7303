<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="data">
        <h2>
            This is my data
        </h2>
        <button onclick="changedata()">
            click

        </button>
    </div>

    <br>

    <?php
        echo "This is from PHP";
    ?>

    <br>

    <script>
        /*var str = "Hello! This is JavaScript.";
        if(str=="SAMPATH"){
            document.write("Not the data");
        }
        else{
            document.write("this is exception");
        }
        document.write("<br>");
        document.write(str);*/
        //console.log(document.getElementsByTagName('h2')[0].innerText);
        function changedata(){
        var data=document.getElementsByTagName('h2')[0].innerText;
        //document.write("<h3>"+data+"<h3>");
        var element=document.getElementsByTagName('h2')[0];
        element.innerHTML = data + " - This is customized from JS";
        element.style.color="red";
        }
        </script>

</body>
</html>


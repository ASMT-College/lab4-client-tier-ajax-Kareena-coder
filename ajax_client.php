<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of gods:
        <input type="text" name="god" id="god" oninput="get_data_using_ajax()">
        <div id="gods"></div>
        <script>
            function get_data_using_ajax(){
                var q= document.getElementById('god').value
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                if (this.readyState ==4 && this.status ==200){
                    document.getElementById('gods').innerHTML=this.responseText
                    console.log(this.responseText);
                    
                }
            }
            xmlhttp.open("GET","ajax_server.php?search=" + q, true);
            xmlhttp.send(); //agax syntax
        }
            </script>
    </body>
</html>
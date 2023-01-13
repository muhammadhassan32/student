<html>
    <head>
        <title>first and last progame in php</title>
    </head>
    <center><h1>EASY LEARN PHP IN THIS WEBSITE</h1>
    <input type="text" id="cl"><br>
    <input type="text" id="cal"><br>
    <input type="text" id="result"><br>
    <select id="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
    </select>
    <br>
    <br>
    <button onclick="myfunction()">equal sum</button>
    <input type="button"value="first cut"onclick="document.getElementById('cl').value=''">
    <input type="button"value="second cut"onclick="document.getElementById('cal').value=''">
    <input type="button"value="cut the result"onclick="document.getElementById('result').value=''">
    <br><br>
    <button onclick="document.getElementById('cl').value +=1">1</button>
    <button onclick="document.getElementById('cl').value +=2">2</button>
    <button onclick="document.getElementById('cl').value +=3">3</button>
    <button onclick="document.getElementById('cl').value +=4">4</button>
    <button onclick="document.getElementById('cl').value +=5">5</button>
    <button onclick="document.getElementById('cl').value +=6">6</button>
    <button onclick="document.getElementById('cl').value +=7">7</button>
    <button onclick="document.getElementById('cl').value +=8">8</button>
    <button onclick="document.getElementById('cl').value +=9">9</button>
    <button onclick="document.getElementById('cl').value +=0">0</button>
    <br><br>
    <button onclick="document.getElementById('cal').value +=1">1</button>
    <button onclick="document.getElementById('cal').value +=2">2</button>
    <button onclick="document.getElementById('cal').value +=3">3</button>
    <button onclick="document.getElementById('cal').value +=4">4</button>
    <button onclick="document.getElementById('cal').value +=5">5</button>
    <button onclick="document.getElementById('cal').value +=6">6</button>
    <button onclick="document.getElementById('cal').value +=7">7</button>
    <button onclick="document.getElementById('cal').value +=8">8</button>
    <button onclick="document.getElementById('cal').value +=9">9</button>
    <button onclick="document.getElementById('cal').value +=0">0</button>
</center>
<script>
    function myfunction(){
        var a = parseInt(document.getElementById('cl').value);
        var b = parseInt(document.getElementById('cal').value);
        var c = document.getElementById('operator').value;
        if(c ==="+"){
            document.getElementById('result').value= a+b;
        }
        if(c ==="-"){
            document.getElementById('result').value= a-b;
        }
        if(c ==="*"){
            document.getElementById('result').value= a*b;
        }
        if(c ==="/"){
            document.getElementById('result').value= a/b;
        }
        }
</script>
</html>
<!-- Dobbiamo creare una web-app che permetta di 
leggere una lista di dischi presente nel nostro server. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="card" v-for="discs in lists">
                <div>foto</div>
                <div>{{ discs }}</div>
                <div>autore</div>
                <div>anno</div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
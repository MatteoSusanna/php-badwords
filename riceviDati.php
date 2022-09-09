<?php 

    $parolaDaCensurare = $_POST['parolaCensurata'];
    
    $parolaDaCensurare = trim($parolaDaCensurare);

    $testoStampato = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi pariatur laborum totam at. Cupiditate similique debitis qui, quaerat nobis laudantium iste architecto atque vitae ex doloremque aperiam labore provident mollitia distinctio quas aspernatur sunt obcaecati reprehenderit libero quae, adipisci sapiente velit. Aut repudiandae veritatis, qui tempore ullam porro nobis minus distinctio sint dolorem, in delectus et expedita. Repudiandae in nobis minus odit molestias placeat necessitatibus quo est optio accusantium, repellat omnis soluta, modi, distinctio obcaecati dolores ipsam adipisci doloremque earum! Ducimus soluta fugiat illum quae, rem perferendis, alias, officia voluptatum asperiores sunt eius iste impedit facere blanditiis enim vitae repellat.';

    $testoCensurato = str_replace($parolaDaCensurare, '***', $testoStampato );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleRicevuto.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container-p">
            <p><?php echo $testoCensurato; ?></p>
        </div>
    </div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PRUEBA DE PAGINA</title>
    <style>
        .corner-button {
            position: top,right;
            border-radius: 5px;
            padding: 10px 7px;
            text-decoration: none;
            color: black;
            background-color: #E6E6FA;
            margin: 5px;
            
        }

        h1{
            text-align:center;
            height: 100px;
            margin: 50px;
            
        }
        body{
            background: #348F50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #56B4D3, #348F50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #56B4D3, #348F50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ 
        }
    </style>

     
    </head>
    <body >
    <a href= "http://www.travelgroup.com.pe/" class="corner-button">Agencia</a>
        <div>
            <h1>PAISAJES DE PERU</h1>
        </div>
        <div class="container">
                <div class="row">
                    <!--25% or 3/12 -->
                    <div class="col-5">
                    
                        <img  src="https://www.somosperu.org.pe/wp-content/uploads/2016/10/peru-Machu-Picchu.jpg" alt="foto de machupicchu" width="450px" height="350px">
                    </div>

                    <!--50% or 6/12 -->
                    <div class="col-7">
                    <p><h3 style="text-align:center;">CUSCO</h3></p>
                    <p>Fue conocida durante la colonia como Picchu, Piccho o Picho, aunque 
                        algunos sostienen que pudo haberse llamado Patallaqta (pueblo en lo alto). 
                        La ciudadela fue redescubierta por Hiram Bingham en 1911 y se llevó miles 
                        de piezas que hasta hoy permanecen en la Universidad de Yale, en Estados Unidos. 
                        Felizmente algunas ya regresaron al Cusco el 2011. Cabe destacar que The Huffington
                         Post eligió a Machu Picchu como el primer destino a visitar antes de morir. 
                         Revisa las tarifas de ingreso a Machu Picchu más abajo.</p>
                    </div>
                    </div>
                </div>
        </div>
        <nav>
                     <p style="text-align:center;">LUGARES TURISTICOS</p>
                     <section>
                            <style>
                            section{
                                display: flex;
                                width: 600px;
                                height:430px;
                                margin: auto;
                                
                            }

                            section img{
                            width: 0px;
                            flex-grow:1;
                            object-fit: cover;
                            opacity: .8;
                            transition: .5s ease;
                            
                            }
                            section img:hover{
                            cursor: crosshair;
                            width:300px;
                            opacity: 1;
                            filter: contrast(120%);
                            }
                                
                            </style>
                            <img src="https://cdn.vallarta-adventures.com/sites/default/files/2019-01/cancun-about-weather%20%281%29.jpg"></img>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Machu_Picchu%2C_Peru_%282018%29.jpg"></img>
                            <img src="https://denomades.s3.us-west-2.amazonaws.com/blog/wp-content/uploads/2020/08/23173150/sacsayhuaman-1024x576.jpg"></img>
                            <img src="https://imgmedia.larepublica.pe/640x377/larepublica/migration/images/BVCA7JCDVRA5XP5Z6E2GSH5B6Q.webp"></img>
                            
                        </section>
                        </nav>    
        
    </body>
</html>
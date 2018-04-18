<?php

include 'head.php';
include 'tete.php';

?>
       
       <br>
        <title>Nos boutiques</title>
        <style>
            #map{
                
                
                height : 600px;
                width : 80%;
                margin :auto;
            }
            
            h4{
                
                color : #DC1767;
            }
            
            h1{
                
             
                background-color: #DC1767;
                color : white;
                text-align: center;
                width: 30%;
                margin :auto;
                
            }
            
        </style>
  

       
        <h1>NOS BOUTIQUES</h1>
        <br><br>
        <h3 style="text-align : center">Nos boutiques sont situées en Ile de France et sont au nombre de 4. <br><br>Vous trouverez tout ce vous avez besoin dans nos boutiques pour vous et vos proches !<br><br> Venez nous rendre visite dans le magasin le plus proche et trouver votre bonheur ! <br><br> A très bientôt ! </h3><br><br>
        <div id="map"></div>
        <script>

            function initMap(){

                var options = {
                    zoom : 8,
                    center : {lat: 48.864716, lng: 2.349014}
                }

                var map = new google.maps.Map(document.getElementById('map'), options);

                /*
               var marker = new google.maps.Marker({

                   position :{ lat: 48.874225, lng: 2.3105077000000165},
                   map:map,
                  });
               var infoWindow = new google.maps.InfoWindow({

                   content :'<h5>Eshop<br><span><em>20 rue de courcelles<br>75008 Paris</em></span></h5>'
               });

                marker.addListener('click', function(){

                    infoWindow.open(map, marker);
                });
                */
            
                addMarker({coords :{lat:48.9211934, lng:2.262320499999987},
                          content :'<h4>Eshop<br><span><em>14 rue Jean-Philippe Rameau<br>93200 Saint Denis</em></span></h4><br><p>Ouvert du lundi au samedi <br>Horaires : 10h00 - 20h00'
                          });
                addMarker({coords :{lat:48.8863401, lng:2.2624872000000096},
                          
                           content :'<h4>Eshop<br><span><em>166 avenue Achille Peretti<br>92200 Neuilly-Sur-Seine</em></span></h4><br><p>Ouvert du lundi au samedi <br>Horaires : 9h00 - 17h00'
                          });
                addMarker({coords :{lat:48.874225, lng:2.3105077000000165},
                         content :'<h4>Eshop<br><span><em>20 rue de courcelles<br>75008 Paris</em></span></h4><br><p>Ouvert du mardi au dimanche <br>Horaires : 9h00 - 19h00'
                          });
                addMarker({coords :{lat:48.8329816, lng:2.3315946999999824},
                         content :'<h4>Eshop<br>SIEGE<br><span><em>7, avenue leclerc<br>75015 Paris</em></span></h4><br><p>Ouvert du lundi au vendredi <br>Horaires : 9h00 - 19h00'
                          });
                //add marker function
                function addMarker(props){

                    var marker = new google.maps.Marker({

                        position :props.coords,
                            map:map,
                           });

                                //check content
                                if(props.content){

                                    var infoWindow = new google.maps.InfoWindow({

                                        content :props.content
                                    });

                                    marker.addListener('mouseover', function(){

                                        infoWindow.open(map, marker);
                                    });
                                    
                                     marker.addListener('mouseout', function(){

                                        infoWindow.close(map, marker);
                                    });
                                }


                 

                }
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZ0_niTvY-XMYwitl7c6rh_ZGTj5AvCVA&callback=initMap">
        </script>
<br><br>
<?php

include 'accueil_infos.php';

?>
<br>
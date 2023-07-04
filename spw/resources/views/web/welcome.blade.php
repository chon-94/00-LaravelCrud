@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    @section('content')
    
            <!--CAROUSEL-->
            <div    
                data-bs-ride="carousel"
                id="carouselExampleCrossfade"
                class="carousel slide carousel-fade relative" >
                
                <!--BOTONES-->
                <div 
                    class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    
                    <!--BOTONES-1-->
                    <button 
                        type="button" 
                        class="active" 
                        aria-current="true" 
                        data-bs-slide-to="0"
                        aria-label="Slide 1"
                        data-bs-target="#carouselExampleCrossfade">
                    </button>
                    <!--BOTONES-1-->

                    <!--BOTONES-2-->
                    <button 
                        type="button"
                        data-bs-slide-to="1" 
                        aria-label="Slide 2"
                        data-bs-target="#carouselExampleCrossfade">
                    </button>
                    <!--BOTONES-2-->

                    <!--BOTONES-3-->
                    <button 
                        type="button" 
                        data-bs-slide-to="2" 
                        aria-label="Slide 3"
                        data-bs-target="#carouselExampleCrossfade">
                    </button>
                    <!--BOTONES-3-->

                </div>
                <!--BOTONES-->
                
                <!--IMAGENES-->
                <div 
                    class="carousel-inner relative w-full overflow-hidden">

                    <!--IMAGENES-1-->
                    <div 
                        class=" carousel-item  active float-left w-full">
                        <img src="/images/construccion3.jpg" class=" card-height-3  block w-full img-responsive" />
                    </div>
                    <!--IMAGENES-1-->

                    <!--IMAGENES-2-->
                    <div 
                        class=" carousel-item  float-left w-full">
                        <img src="/images/construccion2.jpg" class=" card-height-3  block w-full img-responsive" />
                    </div>
                    <!--IMAGENES-2-->

                    <!--IMAGENES-3-->
                    <div 
                        class=" carousel-item  float-left w-full">
                        <img src="/images/construccion5.jpg" class=" card-height-3  block w-full img-responsive" />
                    </div>
                    <!--IMAGENES-3-->

                </div>
                <!--IMAGENES-->

                <!--<IZQUIERDA-->
                <button
                    type="button" 
                    data-bs-slide="prev"
                    data-bs-target="#carouselExampleCrossfade" 
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0">
                    <span 
                        aria-hidden="true"
                        class="carousel-control-prev-icon inline-block bg-no-repeat">
                    </span>
                    <span 
                        class="visually-hidden">
                        Previous
                    </span>
                </button>
                <!--<IZQUIERDA-->
                
                <!--DERECHA>-->
                <button
                    type="button"
                    data-bs-slide="next"
                    data-bs-target="#carouselExampleCrossfade" 
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0">
                    <span 
                        aria-hidden="true"
                        class="carousel-control-next-icon inline-block bg-no-repeat">
                    </span>
                    <span 
                        class="visually-hidden">
                        Next
                    </span>
                </button>
                <!--DERECHA>-->

            </div>
            <!--CAROUSEL-->
      
    @endsection

</body>
</html>
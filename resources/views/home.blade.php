@extends('layouts.templateSurf')

@section('titulo')
Home
@endsection

@section('conteudo')

 <section class="d-flex" style="height:607px;">

<div class="carousel slide carousel-fade w-100" data-ride="carousel">
    <div class="carousel-inner h-100 ">
        <div class="carousel-item active" id="carousel-1"> 
            <div class="efeitoBannerHome">
                <div id="texto-index"> 
                    <h2 >Aqui todo mundo é local!</h2>
                    <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                    
                </div>
            </div>
                <!-- <div class="form-group botaoHome">
                    <button type="livedemo" class="btn btn-primary btn-lg botao-um"> Cadastro</button>
                    <button type="livedemo" class="btn btn-primary btn-lg botao-dois"> Login</button>
                    
                </div>      ------------------------------------------               -->
            
        </div>
        <div class="carousel-item" id="carousel-2">
            <div class="efeitoBannerHome">
                <div id="texto-index">
                    <h2>Aqui todo mundo é local!</h2>
                    <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                    
                </div>
            </div>
           
            
        </div>
        <div class="carousel-item" id="carousel-3" >
            <div class="efeitoBannerHome">
                <div id="texto-index"  >
                    <h2>Aqui todo mundo é local!</h2>
                    <p class="flex-wrap">Previsão de ondas - Carona para praias - Desapego de pranchas e afins, cadastre-se e descubra mais!</p>
                    
                </div>
            </div>
          
        </div>
    </div>
  
</div>


</section>

<section class="container d-flex flex-column flex-nowrap h-100 ">

<article class="text-center p-5 d-flex flex-column justify-content-center h-25" style="background:#efefef;color: #565656d1;">
<h2>Quem Somos</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique consectetur corporis sunt explicabo ducimus ratione perspiciatis rem quae aspernatur ad minima porro illum excepturi reiciendis cum iste earum, sed veniam.

</p>
</article>                            
    
<div class="cards-home">
    <div class="desapegoHome1 col-6"></div>
        <div class="col-6 texto-index-2">                       
            <h3 class="font-weight-bold">Desapego</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
        </div>
</div>
 
<div class="cards-home" >
    
        <div class="col-6 texto-index-2"> 
            <h3 class="font-weight-bold">Caronas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
            <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
        </div>
        <div class="caronasHome1 col-6"></div>
        
</div>


<div class="cards-home" >
     <div class="previsaoHome1 col-6"></div>
         <div class="col-6    texto-index-2"> 
            <h3 class="font-weight-bold">Previsão</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga nisi rerum porro, amet id asperiores numquam voluptas velit, commodi laboriosam voluptate! Perspiciatis nobis qui praesentium, accusantium molestiae ipsum nam?Lorem ipsum dolor sit amet consectetur.</p>
             <a href="#" class="btn btn-primary btn-lg botao-tres">Dropar</a>
        </div>
</div>
 
</section>







@endsection
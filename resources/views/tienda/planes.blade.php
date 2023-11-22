@extends('plantillaCatalogo')

@section('contenido')
<link rel="stylesheet" href="css/planes.css">
<div id="generic_price_table">   
  <section>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <!--PRICE HEADING START-->
                      <div class="price-heading clearfix">
                          <h1>Descubre Nuestros Planes de Catering</h1>
                          <p>Sabores que Inspiran, Momentos que Perduran. ¡Bienvenido al Arte de la Mixología en Cada Celebración!</p>
                      </div>
                      <!--//PRICE HEADING END-->
                  </div>
              </div>
          </div>
          <div class="container">
              
              <!--BLOCK ROW START-->
              <div class="row">
                  <div class="col-md-6 mt-3">
                  
                    <!--PRICE CONTENT START-->
                      <div class="generic_content clearfix">
                          
                          <!--HEAD PRICE DETAIL START-->
                          <div class="generic_head_price clearfix">
                          
                              <!--HEAD CONTENT START-->
                              <div class="generic_head_content clearfix">
                              
                                <!--HEAD START-->
                                  <div class="head_bg"></div>
                                  <div class="head">
                                      <span>Clasico</span>
                                  </div>
                                  <!--//HEAD END-->
                                  
                              </div>
                              <!--//HEAD CONTENT END-->
                              
                              <!--PRICE START-->
                              <div class="generic_price_tag clearfix">  
                                  <span class="price">
                                      <span class="sign">$</span>
                                      <span class="currency">599</span>
                                      
                                  </span>
                              </div>
                              <!--//PRICE END-->
                              
                          </div>                            
                          <!--//HEAD PRICE DETAIL END-->
                          
                          <!--FEATURE LIST START-->
                          <div class="generic_feature_list">
                            <ul>
                                <li>Decoración y presentación acorde al tema elegido.</li>
                                <li>Personal de servicio con vestimenta temática.</li>
                                <li><span>Incluye transporte </span>(maximo 100km)</li>
                                <li>Hasta <span>15 </span>invitados en cobertura</li>
                               
                                <li>Hasta <span>3 </span>horas de servicio</li>
                                
                               <li><span>30 </span>Cócteles diferentes</li>
                               
                                  
                              </ul>
                          </div>
                          <!--//FEATURE LIST END-->
                          
                          <!--BUTTON START-->
                          
                          <div class="generic_price_btn clearfix">
                            <form action="{{route('plan')}}" method="POST">
                                @csrf
                                <input name="precio" hidden type="number" value="599">
                                <input name="plan" hidden type="text" value="Plan clasico">
                                <button class="">Contratar</button>
                            </form>
                          </div>
                          <!--//BUTTON END-->
                          
                      </div>
                      <!--//PRICE CONTENT END-->
                          
                  </div>
                  
                  <div class="col-md-6 mt-3">
                  
                    <!--PRICE CONTENT START-->
                      <div class="generic_content clearfix">
                          
                          <!--HEAD PRICE DETAIL START-->
                          <div class="generic_head_price clearfix">
                          
                              <!--HEAD CONTENT START-->
                              <div class="generic_head_content clearfix">
                              
                                <!--HEAD START-->
                                  <div class="head_bg"></div>
                                  <div class="head">
                                      <span>Infantil</span>
                                  </div>
                                  <!--//HEAD END-->
                                  
                              </div>
                              <!--//HEAD CONTENT END-->
                              
                              <!--PRICE START-->
                              <div class="generic_price_tag clearfix">  
                                  <span class="price">
                                      <span class="sign">$</span>
                                      <span class="currency">599</span>
                                     
                                  </span>
                              </div>
                              <!--//PRICE END-->
                              
                          </div>                            
                          <!--//HEAD PRICE DETAIL END-->
                          
                          <!--FEATURE LIST START-->
                          <div class="generic_feature_list">
                            <ul>
                                <li>Decoración y mesa de golosina acorde al tema elegido.</li>
                                <li>Show de barman profesional para niños</li>
                                <li><span>Incluye transporte </span>(maximo 100km)</li>
                                <li>Hasta <span>20 </span>invitados en cobertura</li>
                                
                                <li>Hasta <span>3 </span>horas de servicio</li>
                                
                               <li><span>40 </span>Mocktails diferentes</li>
                              </ul>
                          </div>
                          <!--//FEATURE LIST END-->
                          
                          <!--BUTTON START-->
                          <div class="generic_price_btn clearfix">
                            <form action="{{route('plan')}}" method="POST">
                                @csrf
                                <input name="precio" hidden type="number" value="599">
                                <input name="plan" hidden type="text" value="Plan infantil">
                                <button class="">Contratar</button>
                            </form>
                          </div>
                          <!--//BUTTON END-->
                          
                      </div>
                      <!--//PRICE CONTENT END-->
                          
                  </div>




                  <div class="col-md-6 mt-3">
                  
                    <!--PRICE CONTENT START-->
                      <div class="generic_content clearfix">
                          
                          <!--HEAD PRICE DETAIL START-->
                          <div class="generic_head_price clearfix">
                          
                              <!--HEAD CONTENT START-->
                              <div class="generic_head_content clearfix">
                              
                                <!--HEAD START-->
                                  <div class="head_bg"></div>
                                  <div class="head">
                                      <span>Preferencial</span>
                                  </div>
                                  <!--//HEAD END-->
                                  
                              </div>
                              <!--//HEAD CONTENT END-->
                              
                              <!--PRICE START-->
                              <div class="generic_price_tag clearfix">  
                                  <span class="price">
                                      <span class="sign">$</span>
                                      <span class="currency">799</span>
                                  </span>
                              </div>
                              <!--//PRICE END-->
                              
                          </div>                            
                          <!--//HEAD PRICE DETAIL END-->
                          
                          <!--FEATURE LIST START-->
                          <div class="generic_feature_list">
                            <ul>
                                <li>Decoración y presentación acorde al tema elegido.</li>
                                <li>Personal de servicio con vestimenta temática</li>
                                <li>Presentación con cristalería tradicional</li>
                                <li><span>Incluye transporte </span>(maximo 100km)</li>
                                <li>Hasta <span>23 </span>invitados en cobertura</li>
                                <li>Hasta <span>4 </span>horas de servicio</li>
                               <li><span>45 </span>Cócteles diferentes</li>
                              </ul>
                          </div>
                          <!--//FEATURE LIST END-->
                          
                          <!--BUTTON START-->
                          <div class="generic_price_btn clearfix">
                            <form action="{{route('plan')}}" method="POST">
                                @csrf
                                <input name="precio" hidden type="number" value="799">
                                <input name="plan" hidden type="text" value="Plan preferencial">
                                <button class="">Contratar</button>
                            </form>
                          </div>
                          <!--//BUTTON END-->
                          
                      </div>
                      <!--//PRICE CONTENT END-->
                          
                  </div>
                  <div class="col-md-6 mt-3">
                  
                    <!--PRICE CONTENT START-->
                      <div class="generic_content clearfix">
                          
                          <!--HEAD PRICE DETAIL START-->
                          <div class="generic_head_price clearfix">
                          
                              <!--HEAD CONTENT START-->
                              <div class="generic_head_content clearfix">
                              
                                <!--HEAD START-->
                                  <div class="head_bg"></div>
                                  <div class="head">
                                      <span>Presidencial</span>
                                  </div>
                                  <!--//HEAD END-->
                                  
                              </div>
                              <!--//HEAD CONTENT END-->
                              
                              <!--PRICE START-->
                              <div class="generic_price_tag clearfix">  
                                  <span class="price">
                                      <span class="sign">$</span>
                                      <span class="currency">2099</span>
                                     
                                  </span>
                              </div>
                              <!--//PRICE END-->
                              
                          </div>                            
                          <!--//HEAD PRICE DETAIL END-->
                          
                          <!--FEATURE LIST START-->
                          <div class="generic_feature_list">
                            <ul>
                                <li>Decoración y presentación acorde al tema elegido.</li>
                                <li>Personal de servicio con vestimenta temática.</li>
                                <li>Show de fuego con barman profesional</li>
                                <li><span>Incluye transporte </span>(maximo 100km)</li>
                                <li>Hasta <span>30 </span>invitados en cobertura</li>
                                <li>Hasta culminar la actividad</li>
                               <li><span>150 </span>Cócteles diferentes</li>
                              </ul>
                          </div>
                          <!--//FEATURE LIST END-->
                          
                          <!--BUTTON START-->
                          <div class="generic_price_btn clearfix">
                            <form action="{{route('plan')}}" method="POST">
                                @csrf
                                <input name="precio" hidden type="number" value="2099">
                                <input name="plan" hidden type="text" value="Plan presidencial">
                                <button class="">Contratar</button>
                            </form>
                          </div>
                          <!--//BUTTON END-->
                          
                      </div>
                      <!--//PRICE CONTENT END-->
                          
                  </div>
              </div>  
              <!--//BLOCK ROW END-->
              
          </div>
      </section>       
 
@endsection





<?php

include_once('header.php')


?>


	<!-- Start Featured Slider -->
	

	<section id="mu-hero">
		
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12 col-xs-12">
					

<!-- Slider Carousel - START -->
<div class="container">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
              <a href="#mu-pricing">  <img alt="Bootstrap template" src="imagens/banner1.jpg"></a>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="imagens/banner9.jpg">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <img alt="Bootstrap template" src="imagens/banner3.jpg">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
     
    </div>
</div>


<!--fim do slider -->
 



					
				</div>

			
			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	<div class="row"><div class="mu-heading-area"><h4 class="mu-heading-title">Quer ser um ofertante?</h4><h5> <a href="#mu-pricing"><button class="btn btn-primary">Click aqui!</button></a></h4></div></div>
	<!-- Start main content -->
		
	<main role="main">

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
								

										<div class="mu-single-counter">
										<a href="busca.php">	<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="<?php echo $nut;?>">0</div>
											<h5 class="mu-counter-name">Ofertas </h5></a>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="">0</div>
											<h5 class="mu-counter-name">Clientes</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-4 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="0">0</div>
											<h5 class="mu-counter-name">Usuarios Ativos</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start Book Overview -->
		<section id="mu-book-overview">
			<div class="container">
			<div class="row"><div class="mu-heading-area"><h4 class="mu-heading-title">Quer ser um ofertante?</h4><h5> <a href="#mu-pricing"><button class="btn btn-primary">Click aqui!</button></a></h4></div></div>
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area ">



								<!--adicionado-->

								<div class="mu-heading-area ">
								<h2 class="mu-heading-title">Ofertas de Supermercados </h2>
								<span class="mu-header-dot"></span>
								
							</div>
                                <div class="container">
															
							
	
	<div class='col-md-2 col-sm-6 box'> 
							
	fff
	
	
	
	
	
	
	</div>
	
	
	
	
									</div>
									<div class="container"><div class="centro"><h5 class="new"><a href="busca.php"><button class="btn btn-primary">Veja mais!</button></a></h5></div></div>	
								<!--fim de adicionado-->

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Ofertas de Mercadorias </h2>
								<span class="mu-header-dot"></span>
								<p>Confira aqui as melhores ofertas </p>
							</div>
							
	

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">
									
									<div class="container">
								
											{{#each produtos}}	
												<div class='col-md-2 col-sm-6 box'> 
                        <h3>{{nome}}</h3>  
												<p>{{preco}}</p>   
												<a href="/produto/{{_id}}">Leia mais </a>
</div>
											{{/each}}
					
									</div>
									
									
									<div class="container"><div class="centro"><h5 class="new"></h4><h5><a href="busca.php"></h5><h5><button class="btn btn-primary">Veja mais!</button></a></h5></div></div>				
									
									
									
								<!--adicionado-->

								<div class="mu-heading-area ">
								<h2 class="mu-heading-title">Ofertas de Serviços </h2>
								<span class="mu-header-dot"></span>
								
							</div>
                                <div class="container">
															
						
									</div>
									<div class="container"><div class="centro"><h5 class="new"><a href="busca.php"><button class="btn btn-primary">Veja mais!</button></a></h5></div></div>	
								<!--fim de adicionado-->

								
									<!-- / Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Book Overview -->

		

		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Author -->
		<section id="mu-author">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-author-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Quem somos</h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Author Content -->
							<div class="mu-author-content">
								<div class="row">
									<div class="col-md-6">
										<div class="mu-author-info">
<h3>Nossa visão</h3>
										<p><i class="fa fa-check" aria-hidden="true"></i> Checkofertas é uma startup com foco em ofertas para São José do Rio Preto e Região.

</p><p><i class="fa fa-check" aria-hidden="true"></i> Nossa meta é incentivar a busca por ofertas, unir os lojistas e os consumidores através de engajamento de ofertas.</p><p>

<i class="fa fa-check" aria-hidden="true"></i> Você lojista ou prestador de serviços, junte-se a nós e venha divulgar suas ofertas!  
</p>	
										</div>
									</div>
									<div class="col-md-6">
										<div class="mu-author-info">
											
<h3>Nossa missão</h3>
											<p><i class="fa fa-check" aria-hidden="true"></i> Divulgar os melhores preços</br>

<i class="fa fa-check" aria-hidden="true"></i> Otimizar a divulgação das ofertas</br>

<i class="fa fa-check" aria-hidden="true"></i> Agregar valor com logística e redução de tempo
</p><h3>Nossos valores</h3>   <p> <i class="fa fa-check" aria-hidden="true"></i>Ética e Transparência</p>
											

											<div class="mu-author-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- End Author Content -->

						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- End Author -->

		<!-- Start Pricing -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
							<div class="row"><div class="mu-heading-area"><h4 class="mu-heading-title">Quer ser um ofertante?</h4><h5> <a href="#mu-pricing"><button class="btn btn-primary">Click aqui!</button></a></h5></div></div>
							</div>

							<!-- Start Pricing Content -->
							
							<!-- End Pricing Content -->

						</div>
					</div>
				</div>
			</div>
		
		<!-- End Pricing -->

		<div class="container "><h4 class="mu-heading-title">Nossos planos</h4></div>
		<div class="container">
		
		<div class="col-md-3 center inter">
		<div class="center cap">
								<h6>Plano A</h6>
								<p >Assinatura por 1 mês</p>
								<p>R$ 99,90 à vista</p>
								<p>-</p>
								<p>-</p>
								
								<p class="promo">-</p>
								<p class="option">-</p>
								<p><a href="cad_cliente1.php?pla=1"><button class="btn btn-primary">Click aqui!</button></a></p>
				</div>
			</div>
			<div class="col-md-3 center inter">
		<div class="center cap">
								<h6>Plano B</h6>
								<p>Assinatura Trimestral</p>
								<p>R$ 239,70 para 30 dias</p>
								<p>ou</p>
								<p>R$ 232,50 à vista c/ 3% desc.</p>
								<p class="option">-</p>
								<p class="promo">equivalente a R$ 79,90 p/mês</p>
								<p><a href="cad_cliente1.php?pla=2"><button class="btn btn-primary">Click aqui!</button></a></p>
				</div>
				</div>
				<div class="col-md-3 center inter">
		<div class="center cap">
								<h6>Plano C</h6>
								<p>Assinatura Semestral</p>
								<p>R$ 419,40 em 2x R$ 209,70</p>
								<p>ou</p>
								<p>R$ 398,40 à vista c/ 5% desc.</p>
								<p> - </p>
								<p class="promo">equivalente a R$ 69,90 p/mês</p>
								
								<p><a href="cad_cliente1.php?pla=3"><button class="btn btn-primary">Click aqui!</button></a></p>
				</div>
				</div>
				<div class="col-md-3 center inter">
		<div class="center cap">
				<h6>Plano D</h6>
								<p>Assinatura Anual</p>
								<p>R$ 718,80 em 3x R$ 239,60 </p>
								<p>ou</p>
								<p>R$ 646,92 à vista c/ 10% desc.</p>
								<p>-</p>
								
								<p class="promo">equivalente a R$ 59,90 p/mês</p>
								
								<p><a href="cad_cliente1.php?pla=4"><button class="btn btn-primary">Click aqui!</button></a></p>
				
				
								</div>
				</div>
			</div>

							</section>

		

	
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Entre em contato conosco </h2>
								<span class="mu-header-dot"></span>
								<p>Deixe aqui sua mensagem caso queira ser nosso parceiro.</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">

								<div id="form-messages"></div>
								<form id="ajax-contact" method="post" action="mailer.php" class="mu-contact-form">
									<div class="form-group">                
										<input type="text" class="form-control" placeholder="Nome" id="name" name="name" required>
									</div>
									<div class="form-group">                
										<input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
									</div> 
									<div class="form-group">                
										<input type="text" class="form-control" placeholder="Assunto" id="assunto" name="assunto" required>
									</div>              
									<div class="form-group">
										<textarea class="form-control" placeholder="Menssagem" id="message" name="message" required></textarea>
									</div>
									<button type="submit" class="mu-send-msg-btn"><span>ENVIAR</span></button>
						        </form>

							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Start Google Map -->
		<section id="mu-google-map">
			
		</section>
		<!-- End Google Map -->

	</main>
	
	<!-- End main content -->	
			

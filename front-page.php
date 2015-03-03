<?php 
/*
Template Name: Página principal
*/
 ?>

 <?php get_header(); ?>
	<!-- Banner pagina prinicpal -->


	<div class="container">
	

		<div id="owl-demo" class="owl-carousel owl-theme row">
		 
		  <div class="item"><a href="<?php echo home_url('/servicios' ); ?>"><img src="<?php bloginfo('template_url' ); ?>/img/banners1.jpg" alt="Banner1"></a></div>
		 
		  <div class="item"><a href="<?php echo home_url('/servicios' ); ?>"><img src="<?php bloginfo('template_url' ); ?>/img/banners2.jpg" alt="Banner1"></a></div>

		  <div class="item"><a href="<?php echo home_url('/servicios' ); ?>"><img src="<?php bloginfo('template_url' ); ?>/img/banners3.jpg" alt="Banner1"></a></div>
		 
		</div>
		
	</div>

	<!-- Nosotros -->

	<div class="container nosotros">

		<h2><img width="16px" src="<?php bloginfo('template_url' ); ?>/img/vineta1.png" alt=""> Nosotros</h2>

		<p><strong>L&L Talento S.A.S</strong>  es una <strong>compañía innovadora en el mercado</strong> con amplia experiencia en temas relacionados con la legislación laboral colombiana. El objetivo de nuestros servicios es optimizar los procesos de gestión humana relacionados con el talento humano de las organizaciones y brindar  a nuestros clientes una adecuada toma de decisiones para así evitar demandas de tipo laboral.</p>
	</div>

	<!-- 3 servicios -->
	<section class="cajas container">
		<div class="row">

			<section class="caja1 align-right four columns">
				<h3>Misión</h3>
				<img style="text-align:center;" src="<?php bloginfo('template_url' ); ?>/img/line-blue.png" alt="">
				<article class="bg-gray">
					<p>Brindar soluciones para mejorar y apoyar los procesos internos de las empresas clientes, con el fin de evitarles demandas por el incumplimiento a las leyes laborales colombianas vigentes y a la vez ser orientadores en prevención de riesgos laborales.</p>	
				</article>
			</section>

			<section class="caja2 align-center four columns">
				<h3>Visión</h3>
				<img style="text-align:center;" src="<?php bloginfo('template_url' ); ?>/img/line-blue.png" alt="">
				<article class="bg-gray">
					<p>Ser reconocidos en el 2018 como la empresa líder en la solución a los inconvenientes laborales, y el apoyo en procesos internos enfocados al desarrollo sostenible de nuestros clientes, entregando servicios de alta calidad.</p>	
				</article>
			</section>

			<section class="caja3 align-left four columns">
				<h3>Valores</h3>
				<img style="text-align:center;" src="<?php bloginfo('template_url' ); ?>/img/line-blue.png" alt="">
				<article class="bg-gray">
					<p>Todas nuestras acciones están guiadas por principios como:</p>
						<div>
							<ul class="valores">
								<li>Vocación de servicio</li>
								<li>Responsabilidad</li>
								<li>Honorabilidad</li>
							</ul>
						</div>
					</p>	
				</article>
			</section>
		</div>
	</section>

	<!-- Nuestros servicios -->

	<div class="cajas container nuestros-servicios-title">
		<h2><img width="16px" src="<?php bloginfo('template_url' ); ?>/img/vineta1.png" alt=""> Nuestros Servicios</h2>
	</div>

	<section class="container nuestros-servicios clearfix">
			
		<div class="six columns clearfix">
			<h4 class="twelve columns">&nbsp;&nbsp;SELECCIÓN Y CONTRATACIÓN DE PERSONAL</h4>

			<img class="four columns clearfix" src="<?php bloginfo('template_url' ); ?>/img/nuestros-servicios1.png" alt="">
			<div class="seven columns clearfix">
				<p>Realizamos la contratación del personal garantizando el cumplimiento en cuanto a documentos requerios...</p>
				<a class="button button-primary" href="<?php echo home_url('/servicios'); ?>">Ver más</a>
			</div>
		</div>
		

		<div class="six columns clearfix">
			<h4 class="twelve columns">&nbsp;&nbsp;ADMINISTRACIÓN DE NÓMINA Y SEGURIDAD</h4>

			<img class="four columns clearfix" src="<?php bloginfo('template_url' ); ?>/img/contratacion-personal.png" alt="">
			<div class="seven columns clearfix">
				<p>Basados en las novedades entregadas periódicamente por la empresa cliente, procesamos la nómina...</p>
				<a class="button button-primary" href="<?php echo home_url('/servicios'); ?>">Ver más</a>
			</div>
		</div>


	</section>

	<section class="cajas container nuestros-servicios clearfix">
			
		<div class="six columns clearfix">
			<h4 class="twelve columns">&nbsp;&nbsp;PROCESO DISCIPLINARIO, DESVINCULACIÓN DE PERSONAL</h4>

			<img class="four columns clearfix" src="<?php bloginfo('template_url' ); ?>/img/proceso-disciplinario-desvinculacion-de-personal.jpg" alt="">
			<div class="seven columns clearfix">
				<p>Realizamos la descripción de las obligaciones y responsabilidades que distinguen de los demás cargos...</p>
				<a class="button button-primary" href="<?php echo home_url('/servicios'); ?>">Ver más</a>
			</div>
		</div>
		

		<div class="six columns clearfix">
			<h4 class="twelve columns">&nbsp;&nbsp;AUDITORÍAS EN COMPENSACIÓN Y PAGOS LABORALES</h4>

			<img class="four columns clearfix" src="<?php bloginfo('template_url' ); ?>/img/Auditorias-en-compensacion-y-pagos-laborales.jpg" alt="">
			<div class="seven columns clearfix">
				<p>El empleador puede sancionar disciplinariamente a los trabajadores que incumplan con los deberes...</p>
				<a class="button button-primary" href="<?php echo home_url('/servicios'); ?>">Ver más</a>
			</div>
		</div>


	</section>

	<!-- Section Ventajas de trabajar con nosotros -->

	<div class="color-blue">
		<div class="container ventajas title-ventajas">
			<h2 class="clearfix"><img width="13px" src="<?php bloginfo('template_url' ); ?>/img/vineta2.png" alt=""> &nbsp;VENTAJAS <br><span>&nbsp;DE CONTRATAR CON NOSOTROS</span></h2>
		</div>
		<section class="container ventajas">

			<section class="four columns">
				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/1.png" alt="">&nbsp;&nbsp;No ofrecemos intermediación laboral.</p><br>

				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/2.png" alt="">&nbsp;&nbsp;Total confidencialidad en los procesos <span>e información.</span>e información.</p>
				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/3.png" alt="">&nbsp;&nbsp;Tercerización del proceso, pero sigue <span>siendo el dueño de la información.</span></p>
			</section>
			<section class="four columns">
				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/4.png" alt="">&nbsp;&nbsp;Reducción significativa de costos para <span>la empresa.</span></p>

				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/5.png" alt="">&nbsp;&nbsp;Prevenimos demandas de tipo <span>laboral.</span></p>

				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/6.png" alt="">&nbsp;&nbsp;Disminución en las cargas operativas <span>de selección, contratación y</span><span> liquidación de nómina.</span> </p>
			</section>
			<section class="four columns">
				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/7.png" alt="">&nbsp;&nbsp;Asesoría jurídica en Gestión Laboral.</p><br>

				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/8.png" alt="">&nbsp;&nbsp;Correcto manejo de las obligaciones <span>laborales establecidas por la ley.</span></p>
				<p><img width="28px" src="<?php bloginfo('template_url' ); ?>/img/9.png" alt="">&nbsp;&nbsp;Diagnosticamos, analizamos y <span>solucionamos los inconvenientes</span><span> relacionados con el personal</span>  <span>contratado.</span></p>
			</section>
		</section>
	</div>

	<!-- Clientes -->
	<section class="clientes container">

		<div class="cajas">
			<h2><img width="16px" src="<?php bloginfo('template_url' ); ?>/img/vineta1.png" alt=""> Clientes</h2>
		</div>

		<ul class="clientes">
			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/transit.jpg" alt=""></a></li>
			
			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/ofisa.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/crear-valor.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/fremac.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/acesoria-y-consultorias.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/os.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/l-y-c.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/lubri-tired.jpg" alt=""></a></li>

			<li><a href="#"><img src="<?php bloginfo('template_url' ); ?>/img/securexa.jpg" alt=""></a></li>
		</ul>
	</section>

	<!-- Footer contacto -->

	<div class="blue-fuerte">
		<section class="container contacto">
			<h3>CONTACTO</h3>
			<a href="mailto:direjecutiva@lyltalento.com">direjecutiva@lyltalento.com</a>
			<p><strong>Tel:</strong> (+57) 1 776 3293 - <strong>Cel:</strong> 300 256 4420</p>
			<p>Cra 80B No 56 - 65 | Bogotá - Colombia</p>
		</section>
	</div>

 <?php get_footer(); ?>
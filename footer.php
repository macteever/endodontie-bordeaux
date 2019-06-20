			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid" id="contact">
					<div class="container">
						<div class="row justify-content-between align-items-center mt-30 mb-30">
							<div class="col-xl-4 col-lg-4 col-12 fs-13 text-white">
									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 1', 'html5blank') )?>
							</div>
							<div class="col-xl-4 col-lg-4 col-12 fs-13 text-white text-center">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 2', 'html5blank') )?>
							</div>
							<div class="col-xl-4 col-lg-4 col-12 fs-13 text-white text-right">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget Area 3', 'html5blank') )?>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center text-white fs-12">
								<a class="text-white fw-600" href="/mentions-legales">Mentions légales ~ </a>
								<a class="text-white" target="_blank" href="http://www.ordre-chirurgiens-dentistes-gironde.fr/">Conseil de l'ordre ~ </a>
								<a class="text-white" target="_blank" href="https://sfe-endo.fr/">Société Française d'endodontie </a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>

	</body>
</html>

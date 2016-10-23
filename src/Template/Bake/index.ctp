


<?php 
	use Cake\Routing\Router;

    $baseUrl = Router::url('/', true);     

?>

<h2>WebBake CakePhp3 Console</h2>
<p>
	Developed by 
	<a href="https://github.com/julianmc90" target="_blank">
		julianmc90 (Github)
	</a> Juli&aacute;n Andr&eacute;s Muñoz Cardozo 
</p>


<div class="row">
	<div class="col-md-12">
		<div class="bs-callout bs-callout-info" id="callout-glyphicons-dont-mix"> 
			<h4>Welcome to the CakePhp3 WebBake Console</h4> 
			<p>
				This is the web based console for CakePhp3, it makes easier the tasks to bake Controllers, Models, Templates and for baking other things like Components, Plugins Helpers and more...
			</p>	
			
			<p>
				<h4>It has:</h4>

				<ul>
					<li>
						<b>List of Models:</b>
						Usefull to select the desired model to bake.
					</li>

					<li>
						<b>Custom Component Creation:</b>
						Functionality to create custom CakePhp3 components such as: 

						<ul>

							<li>
								<b>plugin</b>
							</li>
							<li>
								<b>behavior</b>
							</li>
							<li>
								<b>cell</b>
							</li>
							<li>
								<b>component</b>
							</li>
							<li>
								<b>fixture</b>
							</li>
							<li>
								<b>form</b>
							</li>
							<li>
								<b>helper</b>
							</li>
							<li>
								<b>mailer</b>
							</li>
							<li>
								<b>migration</b>
							</li>
							<li>
								<b>migration_diff</b>
							</li>
							<li>
								<b>migration_snapshot</b>
							</li>
							<li>
								<b>seed</b>
							</li>
							<li>
								<b>shell</b>
							</li>
							<li>
								<b>shell_helper</b>
							</li>
							<li>
								<b>task</b>
							</li>
							<li>
								<b>test</b>
							</li>
						</ul>
						

						Can be used Plugin.name to bake component files into plugins.

					</li>

					<li>
						
						<b>Console Results:</b>
						A console view to show the baking results from backend

					</li>
				</ul>

				<h4>have fun using it!</h4>
				<p>
					<b>Here is how to:</b> Select or write the desire element to bake and press a button to immediately start bake and see results, let's go baking <a href="<?php echo $baseUrl; ?>web-bake/bake/bake">here</a> or click in the WebBake navbar option!
				
				</p>


			</p> 
		</div>
		</div>
</div>

<?php 

	$this->Html->css('WebBake.bake', ['block' => true]);
	
	$this->Html->script('WebBake.bootstrap.min', array('block' => 'scriptBottom'));

?>
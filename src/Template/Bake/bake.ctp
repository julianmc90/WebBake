<h2>WebBake CakePhp3 Console</h2>
<p>
	Developed by 
	<a href="https://github.com/julianmc90" target="_blank">
		julianmc90 (Github)
	</a> Juli&aacute;n Andr&eacute;s Muñoz Cardozo 
</p>

<div class="row">

<div class="col-md-6">


	<label>List of Models:</label>
	<select id="selectModel" class="form-control">
			
	</select>
	
</div>

<div class="col-md-6">

<label>&nbsp;</label>
<br/>
	
	<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
	
		<div class="btn-group" role="group">

			<button type="button" class="generate btn btn-info" data-action="model">
				Model
			</button>
		</div>

		<div class="btn-group" role="group">
			<button type="button" class="generate btn btn-info" data-action="controller">
				Controller
			</button>
		</div>

		<div class="btn-group" role="group">
			<button type="button" class="generate btn btn-info" data-action="template">
				Template
			</button>
		</div>
	</div>	

	<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
	
		<div class="btn-group " role="group">

			<button type="button" class="generate btn btn-info" data-action="all">
				All
			</button>
		</div>

	</div>
</div>

</div>

<br />

<div class="row">
	
	<div class="col-md-6 ">
		
		<div class="form-group">

			<label>Custom Component Creation:</label>
			<input type="text" id="generate-c-name" class="form-control " placeholder="Component, plugin, helper or other name of CakePhp3 component to bake..." />
			
		</div>
	</div>

	<div class="col-md-6">


		<label>&nbsp;</label>
		<br/>

		<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">

			<div class="btn-group" role="group">
				<button type="button" class="generate-c btn btn-info" data-action="component">
					Component
				</button>
			</div>
			
			<div class="btn-group" role="group">
				<button type="button" class="generate-c btn btn-info" data-action="plugin">
					Plugin
				</button>
			</div>

			<div class="btn-group" role="group">
				<button type="button" class="generate-c btn btn-info" data-action="helper">
					Helper
				</button>
			</div>
		</div>
		
	</div>

</div>


<div class="row">
	<div class="col-md-12">
		<div class="bs-callout bs-callout-info" id="callout-glyphicons-dont-mix"> 
			<h4>Must be Specified!</h4> 
			<p>
				You need to write the Component, plugin, helper or other name of CakePhp3 component to bake...
			</p> 
		</div>
		</div>
</div>



<div class="row">

	<div class="col-md-12">
	<label>Console Result:</label>
		<textarea class="console form-control" rows="10">
		
		</textarea>
	</div>
</div>



<?php 

	$this->Html->css('WebBake.bake', ['block' => true]);

	$this->Html->script('WebBake.jquery-3.min', array('block' => 'scriptBottom'));

	$this->Html->script('WebBake.bootstrap.min', array('block' => 'scriptBottom'));

	$this->Html->script('WebBake.bake', array('block' => 'scriptBottom'));

?>



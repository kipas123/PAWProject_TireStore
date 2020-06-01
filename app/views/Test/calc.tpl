{extends file= "offerTempl.tpl" }
{block name=header}
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
{/block}   

{block name=offers}
    
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
	
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>
	
	
	<div class="col-12 col-sm-12 offer">
	<div class="col-sm-3 imgPlace"><img src="assets/images/indeks.png" class="img-fluid" alt="Responsive image" height="150px"></div>
	<div class="col-sm-8 offerText"><p style="font-size:20px;">Continental PremiumContact 6:</p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborumLorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
	<div class="offerInfo"> Brand:Continental Model:PremiumContact Size:16/50s Prize:150zl</div>
	</div>

{/block}

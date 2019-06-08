<!DOCTYPE html>
<html lang="en">
<head>
    <title>BasicMVC | A lightweight PHP MVC framework</title>
    <meta name="description" content="">
    <meta name="author" content=""> 
    <?php include $_SERVER['DOCUMENT_ROOT']."/parts/head.html"; ?>
</head> 

<body class="landing-page">   
	
	<!-- GITHUB BUTTON JS -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Basic</span><span class="text-bold">MVC</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>A extremely lightweight MVC Framework.</p>
                    <p>Designed to help simplify the MVC experience.</p>
                </div><!--//tagline-->
                 
                <div class="social-container">
	                <!-- Replace with your Github Button -->
	                <div class="github-btn mb-2">
						<a class="github-button" href="https://github.com/SagarBharadia/BasicMVC" data-size="large" aria-label="Star xriley/PrettyDocs-Theme on GitHub">Star</a>
                        <a class="github-button" href="https://github.com/SagarBharadia" data-size="large" aria-label="Follow @xriley on GitHub">Follow @sagarbharadia</a>
	                </div>
                 </div><!--//social-container-->
                 
                
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Getting started is easy!</h2>
                <div class="intro">
                    <p>Just drop the project folder into your htdocs and set the DocumentRoot to the public folder! It's that simple.</p>
                    <div class="cta-container">
                        <a class="btn btn-primary btn-cta" href="https://github.com/sagarbharadia/basicmvc" target="_blank"><i class="fas fa-cloud-download-alt"></i> Download Now</a>
                    </div><!--//cta-container-->
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Quick Start</h3>
                            <p class="intro">A quick guide to install a raw version of BasicMVC!</p>
                            <a class="link" href="/quick-start"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Todo List Application</h3>
                            <p class="intro">Coming soon! A simple tutorial to help visualize BasicMVC.</p>
                            <a class="link" href="/todo-list"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <!-- <div class="item item-blue col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_datareport_alt"></span>
                            </div>
                            <h3 class="title">Charts</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="charts.html"><span></span></a>
                        </div>
                    </div> -->
                    <div class="item item-purple col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_lifesaver"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Documentation</h3>
                            <p class="intro">Find out about all the in's and out's of BasicMVC!</p>
                            <a class="link" href="/docs"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <!-- <div class="item item-primary col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_genius"></span>
                            </div>
                            <h3 class="title">Showcase</h3>
                            <p class="intro">Layout for showcase page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit </p>
                            <a class="link" href="showcase.html"><span></span></a>
                        </div>
                    </div> -->
                    <!-- <div class="item item-orange col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_gift"></span>
                            </div>
                            <h3 class="title">License &amp; Credits</h3>
                            <p class="intro">Layout for license &amp; credits page. Consectetuer adipiscing elit.</p>
                            <a class="link" href="license.html"><span></span></a>
                        </div>
                    </div> -->
                </div>
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.html"; ?>
    
</body>
</html> 


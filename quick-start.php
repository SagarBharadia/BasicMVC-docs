<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quick Start | BasicMVC</title>
    <meta name="description" content="">
    <meta name="author" content="">    
    <?php include $_SERVER['DOCUMENT_ROOT']."/parts/head.html"; ?>
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.html">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Basic</span><span class="text-bold">MVC</span>
                        </a>
                    </h1>
                    
                </div><!--//branding-->
                
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Quick Start</li>
                </ol>
                
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: June 2nd, 2019</div>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title">Download</h2>
                                <div class="section-block">
                                    <p>Start by downloading the latest version of BasicMVC off GitHub.</p>
                                    <a href="https://github.com/sagarbharadia/basicmvc" class="btn btn-green" target="_blank"><i class="fas fa-download"></i> Download BasicMVC</a>
                                </div>
                            </section><!--//doc-section-->  
                            <section id="installation-section" class="doc-section">
                                <h2 class="section-title">Installation</h2>
                                <div id="step1"  class="section-block">
                                    <h3 class="block-title">Step One - Setting up the file structure</h3>
                                    <p>The BasicMVC downloaded files need to be copied into the <code>public_html/</code> directory of your chosen web server. For this tutorial (and throughout the site) I will be using Apache2 on Linux Ubuntu 18.04.</p>
                                </div><!--//section-block-->
                                <div id="step2"  class="section-block">
                                    <h3 class="block-title">Step Two - Web Server Configuration</h3>
                                    <p>The following configuration is for Apache on Linux Ubuntu.</p>
                                    <div class="code-block">
                                        <p><code>
                                            &lt;Directory /var/www/html/example.com/public_html&gt;<br><br>
                                            &emsp;&emsp;Options -Indexes<br>
                                            &emsp;&emsp;Require all granted<br><br>
                                            &lt;/Directory&gt;<br>
                                            &lt;VirtualHost *:80&gt;<br><br>
                                            &emsp;&emsp;ServerName example.com<br>
                                            &emsp;&emsp;ServerAlias www.example.com<br>
                                            &emsp;&emsp;ServerAdmin webmaster@localhost<br>
                                            &emsp;&emsp;DocumentRoot /var/www/html/example.com/public_html/public<br>
                                            &emsp;&emsp;ErrorLog /var/www/html/example.com/logs/error.log<br>
                                            &emsp;&emsp;CustomLog /var/www/html/example.com/logs/access.log combined<br><br>
                                            &lt;/VirtualHost&gt;
                                        </code></p>
                                    </div><!--//code-block-->
                                </div><!--//section-block-->
                                <div id="step3"  class="section-block">
                                    <h3 class="block-title">Step Three</h3>
                                    <p>That's it! You're sorted. If you visit your localhost or web server you will be shown the example index page. Want to get to know more? Visit the <a href="/docs.html">documentation</a> to jump deeper into BasicMVC or get straight stuck in with the <a href="/todo-list.html">todo list tutorial!</a></p>
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
	                        
	                            <nav id="doc-menu" class="nav doc-menu flex-column sticky">
	                                <a class="nav-link scrollto" href="#download-section">Download</a>
	                                <a class="nav-link scrollto" href="#installation-section">Installation</a>
                                    <nav class="doc-sub-menu nav flex-column">
                                        <a class="nav-link scrollto" href="#step1">Step One</a>
                                        <a class="nav-link scrollto" href="#step2">Step Two</a>
                                        <a class="nav-link scrollto" href="#step3">Step Three</a>
                                    </nav><!--//nav-->
	                            </nav><!--//doc-menu-->
	                        
                        </div>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
    </div><!--//page-wrapper-->
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/parts/footer.html"; ?>
    
</body>
</html> 


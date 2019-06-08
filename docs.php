<!DOCTYPE html>
<html lang="en">
<head>
    <title>Documentation | BasicMVC</title>
    <meta name="description" content="">
    <meta name="author" content="">    
    <?php include $_SERVER['DOCUMENT_ROOT']."/parts/head.html"; ?>
    
</head> 

<body class="body-purple">
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
                    <li class="breadcrumb-item active">Documentation</li>
                </ol>
                
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Documentation</h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: June 8th, 2019</div>
                </div><!--//doc-header-->
                <div class="doc-body row">
                    <div class="doc-content col-md-9 col-12 order-1">
                        <div class="content-inner">

                            <section id="getting-started" class="doc-section">
                                <h2 class="section-title">Getting Started</h2>
                                <div id="installation" class="section-block">
                                    <div class="section-block">
                                        <h3 class="block-title">Installation</h3>
                                        <p>Start by downloading the latest version of BasicMVC off GitHub.</p>
                                        <a href="https://github.com/sagarbharadia/basicmvc" class="btn btn-green" target="_blank"><i class="fas fa-download"></i> Download BasicMVC</a>
                                    </div>
                                    <div class="section-block">
                                        <h5 class="block-title">Setting up the file structure</h5>
                                        <p>The BasicMVC downloaded files need to be copied into the <code>public_html/</code> directory of your chosen web server. For this tutorial (and throughout the site) I will be using Apache2 on Linux Ubuntu 18.04.</p>
                                    </div><!--//section-block-->
                                    <div class="section-block">
                                        <h5 class="block-title">Step Two - Web Server Configuration</h5>
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
                                    <div class="section-block">
                                        <h5 class="block-title">Step Three</h5>
                                        <p>That's it! You're sorted. If you visit your localhost or web server you will be shown the example index page.</p>
                                    </div><!--//section-block-->
                                </div>
                                <div id="configuration" class="section-block">
                                    <h3 class="block-title">Configuration</h3>
                                    <div class="section-block">
                                        <p>The environment variables are contained within the <code>config.json</code> file at the root of the application.</p>
                                        <h5>Database - Currently MYSQL only.</h5>
                                        <p>DBACTIVE <strong>(Boolean)</strong> - Whether or not BasicMVC should attempt to connect to the database or not. Disable for static sites.</p>
                                        <p>DBHOST <strong>(String)</strong> - Connection domain or IP to attempt to connect to (port is optional).</p>
                                        <p>DBDATABASE <strong>(String)</strong> - Name of the database to attempt to connec to.</p>
                                        <p>DBUSER <strong>(String)</strong> - Username to use to connect to the database.</p>
                                        <p>DBPASS <strong>(String)</strong> - Password to use to connect to the database with the given user.</p>
                                        <h5>Other - Miscellaneous Configurations</h5>
                                        <p>env <strong>(String) (dev/prod)</strong> - The environment the BasicMVC application is in, 'prod' will suppress errors, 'dev' will show errors.</p>
                                        <div class="alert alert-danger" role="alert">
                                            It's highly advised to make this 'prod' for public facing websites! Otherwise routes and functions will be open to the public that could be dangerous.
                                        </div>
                                    </div>
                                </div>
                            </section><!--//doc-section-->

                            <section id="the-basics" class="doc-section">
                                <h2 class="section-title">The Basics</h2>
                                <div id="directory-structure" class="section-block">
                                    <h3 class="block-title">Directory Structure</h3>
                                    <ul class="directory-outline">
                                        <li class="root">public_html/</li>
                                        <li>controllers/</li>
                                        <li>
                                            logs/
                                            <ul>
                                                <li>debug/</li>
                                                <li>php/</li>
                                            </ul>
                                        </li>
                                        <li>models/</li>
                                        <li>public/</li>
                                        <li>
                                            vendor/
                                            <ul>
                                                <li>BasicMVC/</li>
                                            </ul>
                                        </li>
                                        <li>    views/</li>
                                        <li>bootstrap.php</li>
                                        <li>config.json</li>
                                    </ul>
                                    <br>
                                    <h4>controllers/</h4>
                                    <p>This is where all the controllers used for each route will reside. Routing with BasicMVC is a bit different, where there isnt a <code>routes.php</code> file (or similar) as you may find in other MVC frameworks. Instead BasicMVC uses a relative path system within controllers to load the corresponding controller to the route. This is further explained within the <a href="#routing-and-controllers">routing &amp; controllers</a> section.</p>
                                    <h4>logs/</h4>
                                    <p>The <code>logs/</code> folder contains the <code>php/</code> &amp; <code>debug/</code> folders. As the name suggests, this is where BasicMVC stores the php error logs and custom debug logs sent from the developer. These are accessible via routes <code>/logs/php/</code> &amp; <code>/logs/debug/</code> when the env is set to 'dev'.</p>
                                    <h4>models/</h4>
                                    <p>The models are stored here. Currently there is no model class however I plan to implement this soon, including basic database functions.</p>
                                    <h4>public/</h4>
                                    <p>This is the folder that will be public facing, all the assets (javascript files, images, style sheets) and any other public facing files should be stored here.</p>
                                    <h4>vendor/</h4>
                                    <p>Currently BasicMVC is not registered with composer however it is compatible with a little bit of tweaking in the <code>bootstrap.php</code> file in the folder root (loading the composer autoload before BasicMVC). Once stable, BasicMVC will be registered and installable via composer.</p>
                                    <h4>views/</h4>
                                    <p>All views should be stored within this directory, BasicMVC will use this folders as the base to search for all views requested.</p>
                                </div>
                                <div id="routing-and-controllers" class="section-block">
                                    <h3 class="block-title">Routing &amp; Controllers</h3>
                                    <p>Routing within BasicMVC is very simple, it searches within the controllers directory with the path provided in the url, in presedence of direct route, and as a fallback searching for a index file within the folder as a whole, and then the controller directory root.</p>
                                    <p>Example:</p>
                                    <p>With the url <code>mybasicmvcapp.com/add/todo</code> BasicMVC would look for <code>controllers/add/todo.controller.php</code>. If not found / file doesn't exist, then as a fallback BasicMVC will attempt to find <code>controllers/add/index.controller.php</code> and as a final result BasicMVC will search for <code>controllers/index.controller.php</code>. If the requested route <code>controllers/add/todo.controller.php</code> isn't found then errors will be logged within php logs, so please do check if some functionality or routes are not returning as you expected!</p>
                                    <p>All other parameters such as post request, methods and data (i.e. forms) remain the same and be passed through.</p>
                                    <p>You can change the type of the POST method by declaring a hidden field within the form or body data. This is done via the post field "_METHOD". Depending on the request type and _METHOD value, if applicable, the corresponding controller method will be executed. Below is a table of all the available request types and accepted _METHOD values.</p>
                                    <h5>Available routes</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>Function in controller</th>
                                                    <th>_METHOD value (if applicable)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">GET</th>
                                                    <td>get()</td>
                                                    <td>N/A</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">POST</th>
                                                    <td>post()</td>
                                                    <td>N/A</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">PUT</th>
                                                    <td>put()</td>
                                                    <td>PUT</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">UPDATE</th>
                                                    <td>update()</td>
                                                    <td>UPDATE</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">DELETE</th>
                                                    <td>delete()</td>
                                                    <td>DELETE</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->
                                    <p>Every controller is required to have at the least the GET method as that is the default method to be run and needs to extend the controller class.</p>

                                    <div class="code-block">
                                        <h5>Controller example</h5>
                                        <pre><code class="text-white">
&lt;?php
/**
 * index.controller.php
 * 
 * Contains controller for BasicMVCSiteIndex, absolute root controller for the site.
 */
class BasicMVCSiteIndex extends Controller {

    /**
     * Constructor. Called when the instance is created.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get Function. If the request type is GET then this function will be called.
     * @return string The output to the user.
     */
    public function get() {
        return view('index');
    }
    
}

return new BasicMVCSiteIndex();
                                        </code></pre>
                                    </div>
                                    <p>You must be wondering how to import models in? As I have aimed to make this as lightweight as possible, there is no 'autoloader' function! Shocking I know, however currently to import any other files, it must be done via <code>require | include APP_ROOT."models/mymodel.php";</code> at the top of the controller file. As this is the beginning stages of the framework, i'm sure this may change to increase maintainability of the code in the future.</p>
                                    <h5>Interacting with the database</h5>
                                    <p>Each controller instantly has access to the database via <code>$this->db</code> which is a custom Database class with a basic interface. Find out more about the Database class <a href="#database">here</a>.</p>

                                </div>
                                <div id="views" class="section-block">
                                    <h3 class="block-title">Views</h3>
                                    <p>Creating views to be returned to the user is really simple!</p>
                                    <p>It can be easily done via the <code>view($pathToView, $payload)</code> which returns a full html string that will be passed back from the controller to the <code>index.php</code> to be echoed.</p>
                                    <p><code>$pathToView</code> is the relative path to the view you want to use as the template. Example, <code>shop/shoes/index</code>. Notice the no leading slash, BasicMVC takes care of many leading slashes for you, so for the most part you can just act as if you are in that directory in the first place. This view being used would be <code>public_html/views/shops/shoes/index.view.php</code></p>
                                    <p>BasicMVC uses <code>.view.php</code> as the suffix to differentiate the views, however when defining the <code>pathToView</code> for the view function, the .view.php is not needed and should not be included.</p>
                                    <p><code>$payload</code> is a array of <code>$key => $value</code> pairs which will be extracted when compiling the view. There are no global variables while within the view so all variables must be passed in. Within the view itself, there is no template engine used, to reduce overhead. Instead it is pure PHP. Though some helper functions may be implemented in the feature such as <code>get_header()</code>, <code>get_footer()</code> and <code>get_head()</code>.</p>
                                </div>
                                <div id="models" class="section-block">
                                    <h3 class="block-title">Models</h3>
                                    <p>Model's are the different objects with your application, such as "Employee" or "Order". They should be stored within <code>public_html/models/</code>. Each model has instant access to the database through the Database object which has a basic interface. Find out more <a href="#database">here</a>.
                                    <p>Currently models do not have helper functions but as the framework grows helper functions will be added to help create, read, update, delete (and other queries) in future stages of development.</p>
                                </div>
                                <div id="database" class="section-block">
                                    <h3 class="block-title">Database</h3>
                                    <p>The database class, available globally, is a basic interface above of PDO allowing you to query the database easily.</p>
                                    <p>Using the <code>->query($sqlQuery, $values)</code> function, you can easily query the database and get returned a result with no preparation or error handling. Just check if the return is null or not. If null then there was a error which can be seen in the logs, if not null then its a response!</p>
                                    <p><code>$sqlQuery</code> is the query to prepare into the database.</p>
                                    <p><code>$values</code> is a array of <code>$key => $value</code> that will be used to send to the database. This is just a ease of use wrapper, so the standard semantics of the key => value being in PDO format applies.<br>I.e. <code>[ ':user_id' => $_SESSION['user_id'] ]</code></p>
                                    <p>If you prefer to work with the pure PDO object and setup everything yourself, that is easily accessible via <code>->pdo()</code> which returns the pure PDO object or PDOException if the connection failed.</p>
                                </div>
                                <div id="logging" class="section-block">
                                    <h3 class="block-title">Logging</h3>
                                </div>
                                <div id="global-functions" class="section-block">
                                    <h3 class="block-title">Global Functions</h3>
                                </div>
                            </section><!--//doc-section-->
                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
                        <div id="doc-nav" class="doc-nav">
	                        
                            <nav id="doc-menu" class="nav doc-menu flex-column sticky">
                                <a class="nav-link scrollto" href="#getting-started">Getting Started</a>
                                <nav class="doc-sub-menu nav flex-column">
                                    <a class="nav-link scrollto" href="#installation">Installation</a>
                                    <a class="nav-link scrollto" href="#configuration">Configuration</a>
                                </nav><!--//nav-->
                                <a class="nav-link scrollto" href="#the-basics">The Basics</a>
                                <nav class="doc-sub-menu nav flex-column">
                                    <a class="nav-link scrollto" href="#directory-structure">Directory Structure</a>
                                    <a class="nav-link scrollto" href="#routing-and-controllers">Routing &amp; Controllers</a>
                                    <a class="nav-link scrollto" href="#views">Views</a>
                                    <a class="nav-link scrollto" href="#models">Models</a>
                                    <a class="nav-link scrollto" href="#database">Database</a>
                                    <a class="nav-link scrollto" href="#logging">Logging</a>
                                    <a class="nav-link scrollto" href="#global-functions">Global Functions</a>
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


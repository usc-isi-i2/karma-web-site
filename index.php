<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Karma: A Data Integration Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="usc,isi,karma,data integration tool,knoblock,pedro">
    <meta name="author" content="Animesh Manglik">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
                                   <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" >Karma</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<%= 'active' if params[:controller] == 'yourdefaultcontroller' %>"><a href="#">Home</a></li>
              <li class="<%= 'active' if params[:controller] == 'team' %>"><a href="#team">Team</a></li>
              <li class="<%= 'active' if params[:controller] == 'publication' %>"><a href="#publication">Publications</a></li>
            </ul>
            <ul class="nav pull-right">
            <li><a href="http://www.isi.edu">Information Sciences Institute, University of Southern California</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <div id="wrap">

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
    <div id="home"></div>  
      <div class="hero-unit">
        <h1>Karma</h1>
        <h3>A Data Integration Tool</h3>
        <div id="download">
      <p class="">Karma is available as open source (Apache 2 License)
      <a href="https://github.com/InformationIntegrationGroup/Web-Karma-Public" class="btn btn-primary">Download &raquo;</a></p>
      </div>
      </div>
	 
  
  
      <!-- Example row of columns -->
      <div class="row">
        	<div class="span12">
					<div class="row">
							<div class ="span8">
									<div class="another-container">
											<div class="video">
												<iframe src="http://www.youtube.com/embed/kUIqTI56oeQ" allowfullscreen></iframe>
											</div>
									</div>
							</div>
							<div class="span4">
							<p class="text-info">Principal Investigators</p>
									<ul class="thumbnails space">
								       <li class="span2">
										  <div class="thumbnail"><a href="http://www.isi.edu/~knoblock/">
											  <img src="assets/img/staff/craig.jpeg" alt=">Craig Knoblock"></a>
											  <div class="caption">
											  <h5>Craig Knoblock</h5>
											  </div>
											  </div>
											  </li>
									   <li class="span2">
										  <div class="thumbnail"><a href="http://www.isi.edu/~szekely/">
											  <img src="assets/img/staff/pedro.jpeg" alt="Pedro Szekely"></a>
											  <div class="caption">
											  <h5>Pedro Szekely</h5>
											  </div>
											  </div>
											  </li>
							           </ul>
							</div>
					</div>
					<div class="row">
							<div class="span12">
         <p class="justify">Karma is an information integration tool that enables users to quickly and easily integrate data from a variety of data sources including databases, spreadsheets, delimited text files, XML, JSON, KML and Web APIs. Users integrate information by modeling it according to an ontology of their choice using a graphical user interface that automates much of the process. Karma learns to recognize the mapping of data to ontology classes and then uses the ontology to propose a model that ties together these classes. Users then interact with the system to adjust the automatically generated model. During this process, users can transform the data as needed to normalize data expressed in different formats and to restructure it. Once the model is complete, users can published the integrated data as RDF or store it in a database.</p>

        <!-- <p>A cool video that illustrates why Karma is significant: <a href="http://www.youtube.com/watch?v=N2zK3sAtr-4&amp;feature=youtu.be">Data Sharing and Management Snafu in 3 Short Acts</a></p> -->
            <p class="justify">All the project publications are <a href="#publication">here</a>. The best paper on the technical aspects of Karma is our <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf">ESWC'2012 paper</a> (<a href="javascript:showBib('knoblock12:eswc')">bibtex</a>), and the best application paper is our <a href="http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf">ESWC'2013 paper</a> (<a href="javascript:showBib('Szekely:2013vq')">bibtex</a>), which received the best in-use paper award at the conference.</p>
                                
        					</div>  
					</div>
        
        
      </div>
      
      </div>
      <div class="row">
        <div class="span8">
          <h2>Karma Innovations</h2>
          
<h4>Ease of use:</h4> <p class="justify">Karma uses programming-by-example, learning techniques and a Steiner tree optimization algorithm to automate as much of the process as possible to enable end-users to map their data to a chosen ontology. Users adjust the automatically generated model using a graphical user interface and never see the complex mapping rules used in other systems.</p><p>
<h4>Hierarchical sources:</h4><p class="justify"> Many systems have been developed to map tabular sources to ontologies. Karma is unique in that it also supports hierarchcal data sources such as XML, JSON and KML.</p><p>
<h4>Web APIs:</h4><p class="justify"> In addition to static sources (databases and files), Karma supports data integration from Web APIs, enabling users to leverage the thousands of data sources that are available today via Web APIs.</p><p>
<h4>Semantic models:</h4><p class="justify"> Karma uses ontologies as a basis for integrating infomation, leveraring the class and property hierarchies, domain and range information and other ontology constructs to help users integrate their data. Karma allows users to combine multiple ontologies to enable users to map their data to standard vocabularies.</p><p>
<h4>Scalable processing:</h4><p class="justify"> Users work with a subset of their data to define the models that integrate their data sources. This enables Karma to offer a responsive user interface when users are defining the model that integrates their data. Karma can then use these models in batch mode to integrate large data sources.</p><p>
<h4>Data transformations:</h4><p class="justify"> Karma offers a programming-by-example interface to enable users to define data transformation scripts that transform data expressed in multiple data formats into a common format.</p>
        </div>   
        
               <div class="span4">
  <div id="news">
  <!--
  <p align="center"><a align="center" href="https://twitter.com/KarmaSemWeb" class="twitter-follow-button" data-show-count="false">Follow @KarmaSemWeb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->


<!-- Show @KarmaSemWeb tweets -->
<a class="twitter-timeline" data-dnt=true href="https://twitter.com/KarmaSemWeb" data-widget-id="270307372130504704">Tweets by @KarmaSemWeb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </div>

<!-- https://twitter.com/about/resources/widgets/widget_search -->
<!--
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#VIVO12 karma',
  interval: 30000,
  title: 'Karma',
  subject: 'Karma #VIVO12',
  width: 300,
  height: 400,
  theme: {
    shell: {
      background: '#f0f0f0',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#919191'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
-->  
      </div>    
      </div>
      
      
      

	  <div class="row">
        <div class="span8">
          <h2>Case Studies</h2>
          <h3>Integration of Bio-Informatics Data</h3>
          <p>We used Karma to replicate the mappings done in a scenario from the Semantic MediaWiki Linked Data Extension (SMW-LDE) work [<a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BeckerBizerErdmannGreaves-SMW-LDE-Poster-ISWC2010.pdf">Becker et al.</a>] where researchers integrated ABA, Uniprot, KEGG Pathway, PharmGKB and Linking Open Drug Data datasets by mapping them to a common ontology. Papers: <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf" target="_blank">ESWC'2012</a>, <a href="http://www.isi.edu/integration/papers/knoblock11-lisc.pdf" target="_blank">ISWC'2011 Linked Science.</a> </p>
        </div>       
      </div>


	   <div class="row">
        <div class="span8">
          <h2>Mapping USC Faculty Data to VIVO</h2>
          <p><a href="http://vivoweb.org/">VIVO</a> is a system to build researcher networks across institutions. In this case study we used Karma to map data about USC faculty to the VIVO ontology and to publish the data in the RDF format that the VIVO system can ingest. Karma enables users to ingest data in VIVO by interacting with an easy to use graphical user interface, and does not require knowledge of SPARQL or other Web languages such as XSLT or XQuery. The video shows how to ingest the sample files provided in the <a href="http://www.vivoweb.org/data-ingest-guide">VIVO Data Ingest Guide.</a></p>
<p>Karma at the VIVO'2012 Conference in Miami, Florida: Abstract (<a href="other-materials/vivo2012/Karma-Abstract-v2.pdf">PDF</a>), Slides (<a href="other-materials/vivo2012/2012-08-22-VIVO-Conference-Karma-v01.pptx">Powerpoint</a>), Ontology and datasets (<a href="other-materials/vivo2012/2012-08-22-VIVO-Conference-Demo-Files.zip">zip</a>) </p>
        </div>
        <div class="span4">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/EQcMc4TrfuE"  allowfullscreen></iframe>
        </div>
       </div>        
      </div>

	     <div class="row">
        <div class="span8">
          <h2>Smithsonian American Art Museum</h2>
          <p class="justify">In this case study we used Karma to convert records of 44,000 of the museum’s holdings to Linked Open Data according to the <a href="http://www.europeana.eu/schemas/edm/">Europeana Data Model (EDM)</a>. The records are stored in several tables in a SQL Server database. Using Karma we modeled these tables in terms of the EDM ontology and converted the data into RDF. We are creating a 5-star Linked Data, linked to DBpedia, the Getty Union List of Artist Names (ULAN)® and the NY Times Linked Data. The USC <a href="http://universityofsoutherncalifornia.createsend1.com/t/ViewEmail/j/DEB74B7D328C85AA">press release</a>. Our paper on this work received the best in-use paper award at the ESWC'2013 conference: <a href="http://bit.ly/11X5YPo">paper</a>, <a href="http://slidesha.re/18vxMnn">slides</a>. The Linked Data is now deployed: each time you visit an artist page in the Smithsonian American Art Museum <a href="http://americanart.si.edu/collections/search/artist/?id=4253">web site</a>, a SPARQL query is issued to retrieve links to Wikipedia and the NY Times. </p>
          
        </div>
        <div class="span4">
        <div class="video">
         <!-- Keep ref to old image so we can use it elsewhere: <a href="assets/img/saam-graphic-v4-no-border-PNG.png"><img src="assets/img/saam-graphic-v4-no-border-PNG.png" alt="project"></a> -->
            <iframe src="//www.youtube.com/embed/1Vaytr09H1w" allowfullscreen></iframe>
        </div>
        </div>
      </div>

	  
	   <div class="row">
        <div class="span8">
          <h2>Geospatial Data and Services</h2>
          <p class="justify">In this case study we show how Karma could be used to help first responders plan evacuations of affected personnel in the event of a fire in an oil field. We used Karma to integrate <a href="http://www.conservation.ca.gov/dog/maps/Pages/GISMapping2.aspx">publicly available data about oil well</a> locations available in MS Excel format, data about personnel locations from a text file, information about the extent of the fire and the location of care centers from a KML file. In this example, no detailed road network information is available for the region in question, so our software extracted the road network data from a USGS map. In this case study we also show how Karma can invoke services that perform complex geospatial reasoning to 1) subtract from the road network the roads that intersect the region affected by the fire, 2) compute the shortest evacuation path for each person avoiding roads that go through the fire, and 3) perform a simulation of the likely spread of the fire based on wind conditions extracted from a public weather service. Users can perform the information integration tasks, invoke the services interactively and visualize the results on a map using Karma.</p>
        </div>
        <div class="span4">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/nlYCjSppPMU"  allowfullscreen></iframe>
        </div>
       </div>      
      </div>

	     <div class="row">
        <div class="span12">
          <h2>Integration of Environmental Data</h2>
          <p class="justify">In this case study we used Karma to help an environmental scientists to construct a model of the metabolism of the Merced river in California. An important bottleneck that the scientists face is to prepare the data used to fit and run the models. In this case, data came from the California Data Exchange Center (<a href="water.ca.gov">CDEC</a>), the scientists' own sensors, and weather information from <a href="http://www.noaa.gov/">NOAA</a>. The CDEC and NOAA data was accessible via web services, and the scientists' data was available in CSV files. In addition, the data used different formats to represent dates, times and units, different time resolutions and contained errors. We used Karma to retrieve, clean, normalize, integrate and publish the data. Karma published the data in the format needed by the executable models, and produced semantic metadata that allowed the <a href="http://www.wings-workflows.org/">WINGS</a> workflow system to help users compose the different parts of the <a href="http://www.wings-workflows.org/node/17618">workflow</a>. In addition, Karma exported the data preparation procedures in a script that could be executed every day to produce fresh data. This allowed WINGS to automatically execute the workflow every day. Paper:  <a href="http://www.isi.edu/integration/papers/gil11-iswc.pdf">ISWC'2011</a>.</p>
        </div>      
      </div>
      
      
      <div class="row">
        <div class="span8">
          <h2>Rapidly Integrating Services into the Linked Data Cloud</h2>
          <p class="justify">The amount of data available in the Linked Data cloud continues to grow. Yet, few services consume and produce linked data. There is recent work that allows a user to define a linked service from an online service, which includes the specifications for consuming and producing linked data, but building such models is time consuming and requires specialized knowledge of RDF and SPARQL. We present a new approach that allows domain experts to rapidly create semantic models of services by demonstration in an interactive web-based interface. First, the user provides examples of the service request URLs. Then, the system automatically proposes a service model the user can refine interactively. Finally, the system saves a service specification using a new expressive vocabulary that includes lowering and lifting rules. This approach empowers end users to rapidly model existing services and immediately use them to consume and produce linked data. Paper: <a href="http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf">ISWC'2012</a>.</p>
        </div>
        <div class="span4 pull-right">
        <div class="another-container">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/3L1G5kh5jYg"  allowfullscreen></iframe>
        </div>
       </div>    
        </div>  
      </div>
<div id="team"></div>     
      <div class="row space" >
        <div class="span12">
          <h2>Team</h2>
	       <ul class="thumbnails space">
	       <li class="span2">
			  <div class="thumbnail"><a href="http://www.isi.edu/~knoblock/">
				  <img src="assets/img/staff/craig.jpeg" alt=">Craig Knoblock"></a>
				  <div class="caption">
				  <h5>Craig Knoblock</h5>
				  </div>
				  </div>
		</li>
		
		<li class="span2">
			  <div class="thumbnail"><a href="http://www.isi.edu/~szekely/">
				  <img src="assets/img/staff/pedro.jpeg" alt="Pedro Szekely"></a>
				  <div class="caption">
				  <h5>Pedro Szekely</h5>
				  </div>
				  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"><a href="http://www.isi.edu/~ambite/">
			  <img src="assets/img/staff/jose_ambite.jpg" alt="Jose Luis Ambite"></a>
			  <div class="caption">
			  <h5>Jose Luis Ambite</h5>
			  </div>
			  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"><a href="http://www.isi.edu/~shubhamg">
			  <img src="assets/img/staff/shubham.jpg" alt="Shubham Gupta"></a>
			  <div class="caption">
			  <h5>Shubham Gupta</h5>
			  </div>
			  </div>
	    </li>
	    
		<li class="span2">
		  <div class="thumbnail"> <a href="http://www.isi.edu/~mariam/">
			  <img src="assets/img/staff/maria.jpg" alt="Maria Muslea"></a>
			  <div class="caption">
			  <h5>Maria Muslea</h5>
			  </div>
			  </div>
	    </li>
	    
		<li class="span2">
		  <div class="thumbnail"><a href="http://www-scf.usc.edu/~taheriya/">
			  <img src="assets/img/staff/mohsen.jpg" alt="Mohsen Taheriyan"></a>
			  <div class="caption">
			  <h5>Mohsen Taheriyan</h5>
			  </div>
			  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"> <a href="http://www-scf.usc.edu/~wubo/">
			  <img src="assets/img/staff/bo.jpg" alt="Bo Wu"></a>
			  <div class="caption">
			  <h5>Bo Wu</h5>
			  &nbsp;
			  </div>
			  </div>
	    </li>
	    
			  
		<li class="span2">
          <div class="thumbnail"><a href="http://www.yoyoi.info/">
            <img src="assets/img/staff/yaoyi.jpg" alt="Yao-Yi Chiang"></a>
            <div class="caption">
              <h5>Yao-Yi Chiang</h5>
               </div>
			   </div>
        </li>
			  
			  
		<li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/vineet-gadodia/63/138/787/">
            <img src="assets/img/students/VG.jpg" alt="Vineet Gadodia"></a>
            <div class="caption">
              <h5>Vineet Gadodia</h5>
               </div>
			   </div>    
        </li>
    
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/mohammad-shaarif-zia/66/636/306">
            <img src="assets/img/students/shaarif.jpg" alt="Shaarif Zia"></a>
            <div class="caption">
              <h5>Shaarif Zia</h5>
              &nbsp;
               </div>
          </div>
          </li>
                  
     
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/hao-zhang/41/39a/74b">
            <img src="assets/img/students/Hao1.jpg" alt="Hao Zhang"></a>
            <div class="caption">
              <h5>Hao Zhang</h5>
               </div>
          </div>
          </li> 
      

          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/jianliang-chen/57/aa/1aa">
            <img src="assets/img/students/Jianliang.jpeg" alt="Jianliang Chen"></a>
            <div class="caption">
              <h5>Jianliang Chen</h5>
               </div>
			   </div>
        </li>
       
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/in/yutingliu1">
            <img src="assets/img/students/Liu.jpg" alt="Yuting Liu"></a>
            <div class="caption">
              <h5>Yuting Liu</h5>
              &nbsp;
               </div>
			   </div>
          </li>
          
          
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/shraddha-deshmukh/a/916/585">
            <img src="assets/img/students/Shraddha.jpg" alt="Shraddha Deshmukh"></a>
            <div class="caption">
              <h5>Shraddha Deshmukh</h5>
               </div>
			   </div>
        </li>
        
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/shrikanth-narayanan/30/145/904/">
            <img src="assets/img/students/Shrikanth1.jpg" alt="Shrikanth Narayanan"></a>
            <div class="caption">
              <h5>Shrikanth Narayanan</h5>
               </div>
			   </div>  
			   </li>
			   
        <li class="span2">
          <div class="thumbnail"><a href=" http://in.linkedin.com/pub/ayush-jaiswal/5b/589/29a/">
            <img src="assets/img/students/Ayush.jpg" alt="Ayush Jaiswal"></a>
            <div class="caption">
              <h5>Ayush Jaiswal</h5>
            </div>
          </div>
        </li>
 
 
          <li class="span2">
          <div class="thumbnail"><a href="http://cn.linkedin.com/pub/ying-zhang/53/545/b56">
            <img src="assets/img/students/Ying1.jpg" alt="Ying Zhang"></a>
            <div class="caption">
              <h5>Ying Zhang</h5>
               </div>
			   </div>
        </li>
        
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/animesh-manglik/14/6b2/97b">
            <img src="assets/img/students/ani.jpg" alt="Animesh Manglik"></a>
            <div class="caption">
              <h5>Animesh Manglik</h5>
               </div>
          </div>
          </li>
        <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/akshay-dani/9/549/683">
            <img src="assets/img/students/akshay.jpg" alt="Akshay Ramesh Dani"></a>
            <div class="caption">
              <h5>Akshay Ramesh Dani</h5>
               </div>
          </div>
          </li>
           <!-- 
        </li>
          <li class="span2">
          <div class="thumbnail">
            <img src="shoes2.jpg" alt="product 2">
            <div class="caption">
              <h5>Product detail</h5>
               </div>
          </div>
        -->
      </ul>

        </div>      
      </div>
      
<div id="publication"></div>  
	  <div class="row">
	  <div class="span12">
	  <h2>Publications</h2> 
	  

          
          

<div id="bibbase">
  <script type="text/javascript">
    var bibbase = {
      params: {"bib":"http://www.isi.edu/integration/karma/karma-bib.bib","groupby":"year","proxy":"1"},
      data: [{"bibbaseid":"szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013","urls":{"Youtube":"http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA","Slideshare":"http://slidesha.re/18vxMnn","Paper":"http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf"},"role":"author","year":"2013","urlyoutube":"http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA","urlslideshare":"http://slidesha.re/18vxMnn","urlpaper":"http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf","uri":"̆rlpapers2://publication/uuid/B9751C9E-0A53-4B2E-93C4-7524C7351942","type":"inproceedings","title":"Connecting the Smithsonian American Art Museum to the Linked Data Cloud","rating":"0","month":"May","key":"Szekely:2013vq","id":"Szekely:2013vq","date-modified":"2013-05-04T01:24:47GMT","date-added":"2013-03-17T04:37:12GMT","booktitle":"Proceedings of the 10th Extended Semantic Web Conference","bibtype":"inproceedings","bibtex":"@inproceedings{ Szekely:2013vq,\n  author = {Szekely, Pedro and Knoblock, Craig A and Fengyu, Yang and Zhu, Xuming and Fink, Eleanor and Allen, Rachel and Goodlander, Georgina},\n  title = {{Connecting the Smithsonian American Art Museum to the Linked Data Cloud}},\n  booktitle = {Proceedings of the 10th Extended Semantic Web Conference},\n  year = {2013},\n  address = {Montpellier},\n  month = {May},\n  rating = {0},\n  date-added = {2013-03-17T04:37:12GMT},\n  date-modified = {2013-05-04T01:24:47GMT},\n  uri = {̆rl{papers2://publication/uuid/B9751C9E-0A53-4B2E-93C4-7524C7351942}},\n  urlpaper = {http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf},\n  urlslideshare = {http://slidesha.re/18vxMnn},\n  urlyoutube = {http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA}\n}","author_short":["Szekely, P.","Knoblock","A, C.","Fengyu, Y.","Zhu, X.","Fink, E.","Allen, R.","Goodlander, G."],"author":["Szekely, Pedro","Knoblock","A, Craig","Fengyu, Yang","Zhu, Xuming","Fink, Eleanor","Allen, Rachel","Goodlander, Georgina"],"address":"Montpellier","downloads":19,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"Szekely:2013vq\"> </a>Connecting the Smithsonian American Art Museum to the Linked Data Cloud.</span>\n\t<span class=\"bibbase_paper_author\">\nSzekely, P.; Knoblock; A, C.; Fengyu, Y.; Zhu, X.; Fink, E.; Allen, R.;  and Goodlander, G.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2013</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 10th Extended Semantic Web Conference</i>, Montpellier, May 2013.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.youtube.com/watch?v=1Vaytr09H1w&amp;feature=share&amp;list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA\"\n     onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/blank.png\"\n\t alt=\"Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Youtube</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://slidesha.re/18vxMnn')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://slidesha.re/18vxMnn\"\n     onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://slidesha.re/18vxMnn')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/blank.png\"\n\t alt=\"Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.re/18vxMnn]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Slideshare</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf\"\n     onclick=\"javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('Szekely:2013vq')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Connecting the Smithsonian American Art Museum to the Linked Data Cloud [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>19 downloads</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012","urls":{"Poster":"http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf","Paper":"http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf"},"role":"author","year":"2012","urlposter":"http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf","urlpaper":"http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf","type":"inproceedings","title":"Rapidly Integrating Services into the Linked Data Cloud","keywords":"\"Source modeling\"","key":"taheriyan12:iswc","id":"taheriyan12:iswc","booktitle":"Proceedings of the 11th International Semantic Web Conference (ISWC 2012)","bibtype":"inproceedings","bibtex":"@inproceedings{ taheriyan12:iswc,\n  author = {Mohsen Taheriyan and Craig A. Knoblock and Pedro Szekely and Jose Luis Ambite},\n  title = {Rapidly Integrating Services into the Linked Data Cloud},\n  booktitle = {Proceedings of the 11th International Semantic Web Conference (ISWC 2012)},\n  year = {2012},\n  keywords = {\"Source modeling\"},\n  urlpaper = {http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf},\n  urlposter = {http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf}\n}","author_short":["Taheriyan, M.","Knoblock, C.<nbsp>A.","Szekely, P.","Ambite, J.<nbsp>L."],"author":["Taheriyan, Mohsen","Knoblock, Craig A.","Szekely, Pedro","Ambite, Jose Luis"],"downloads":21,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"taheriyan12:iswc\"> </a>Rapidly Integrating Services into the Linked Data Cloud.</span>\n\t<span class=\"bibbase_paper_author\">\nTaheriyan, M.; Knoblock, C.&nbsp;A.; Szekely, P.;  and Ambite, J.&nbsp;L.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2012</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 11th International Semantic Web Conference (ISWC 2012)</i>,  2012.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf\"\n     onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Rapidly Integrating Services into the Linked Data Cloud [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Poster</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf\"\n     onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Rapidly Integrating Services into the Linked Data Cloud [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('taheriyan12:iswc')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Rapidly Integrating Services into the Linked Data Cloud [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>21 downloads</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012","urls":{"Youtube":"http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]","Presentation":"http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf","Paper":"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf"},"role":"author","year":"2012","urlyoutube":"http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]","urlpresentation":"http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf","type":"inproceedings","title":"Semi-Automatically Mapping Structured Sources into the Semantic Web","keywords":"\"Source Modeling\"","key":"knoblock12:eswc","id":"knoblock12:eswc","booktitle":"Proceedings of the Extended Semantic Web Conference","bibtype":"inproceedings","bibtex":"@inproceedings{ knoblock12:eswc,\n  urlpresentation = {http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf},\n  title = {Semi-Automatically Mapping Structured Sources into the Semantic Web},\n  booktitle = {Proceedings of the Extended Semantic Web Conference},\n  author = {Craig A. Knoblock and Pedro Szekely and Jose Luis Ambite and Shubham Gupta and Aman Goel and Maria Muslea and Kristina Lerman and Parag Mallick},\n  year = {2012},\n  address = {Crete, Greece},\n  keywords = {\"Source Modeling\"},\n  urlpaper = {http://www.isi.edu/integration/papers/knoblock12-eswc.pdf},\n  urlyoutube = {http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]}\n}","author_short":["Knoblock, C.<nbsp>A.","Szekely, P.","Ambite, J.<nbsp>L.","Gupta, S.","Goel, A.","Muslea, M.","Lerman, K.","Mallick, P."],"author":["Knoblock, Craig A.","Szekely, Pedro","Ambite, Jose Luis","Gupta, Shubham","Goel, Aman","Muslea, Maria","Lerman, Kristina","Mallick, Parag"],"address":"Crete, Greece","downloads":2,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"knoblock12:eswc\"> </a>Semi-Automatically Mapping Structured Sources into the Semantic Web.</span>\n\t<span class=\"bibbase_paper_author\">\nKnoblock, C.&nbsp;A.; Szekely, P.; Ambite, J.&nbsp;L.; Gupta, S.; Goel, A.; Muslea, M.; Lerman, K.;  and Mallick, P.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2012</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the Extended Semantic Web Conference</i>, Crete, Greece,  2012.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.youtube.com/watch?v=kUIqTI56oeQ&amp;feature=share&amp;list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/blank.png\"\n\t alt=\"Semi-Automatically Mapping Structured Sources into the Semantic Web [.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Youtube</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Semi-Automatically Mapping Structured Sources into the Semantic Web [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Semi-Automatically Mapping Structured Sources into the Semantic Web [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('knoblock12:eswc')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Semi-Automatically Mapping Structured Sources into the Semantic Web [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>2 downloads</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"taheriyan-knoblock-szekely-ambite-semiautomaticallymodelingwebapistocreatelinkedapis-2012","urls":{"Paper":"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf"},"role":"author","year":"2012","urlpaper":"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf","type":"inproceedings","title":"Semi-Automatically Modeling Web APIs to Create Linked APIs","keywords":"\"Source modeling\"","key":"taheriyan12:lapis","id":"taheriyan12:lapis","booktitle":"Proceedings of the ESWC 2012 Workshop on Linked APIs","bibtype":"inproceedings","bibtex":"@inproceedings{ taheriyan12:lapis,\n  keywords = {\"Source modeling\"},\n  booktitle = {Proceedings of the ESWC 2012 Workshop on Linked APIs},\n  title = {Semi-Automatically Modeling Web APIs to Create Linked APIs},\n  year = {2012},\n  author = {Mohsen Taheriyan and Craig A. Knoblock and Pedro Szekely and Jose Luis Ambite},\n  urlpaper = {http://www.isi.edu/integration/papers/knoblock12-eswc.pdf}\n}","author_short":["Taheriyan, M.","Knoblock, C.<nbsp>A.","Szekely, P.","Ambite, J.<nbsp>L."],"author":["Taheriyan, Mohsen","Knoblock, Craig A.","Szekely, Pedro","Ambite, Jose Luis"],"downloads":1,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"taheriyan12:lapis\"> </a>Semi-Automatically Modeling Web APIs to Create Linked APIs.</span>\n\t<span class=\"bibbase_paper_author\">\nTaheriyan, M.; Knoblock, C.&nbsp;A.; Szekely, P.;  and Ambite, J.&nbsp;L.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2012</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the ESWC 2012 Workshop on Linked APIs</i>,  2012.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-semiautomaticallymodelingwebapistocreatelinkedapis-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/knoblock12-eswc.pdf\"\n     onclick=\"javascript:log_download('taheriyan-knoblock-szekely-ambite-semiautomaticallymodelingwebapistocreatelinkedapis-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Semi-Automatically Modeling Web APIs to Create Linked APIs [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('taheriyan12:lapis')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Semi-Automatically Modeling Web APIs to Create Linked APIs [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>1 download</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"wu-szekely-knoblock-learningdatatransformationrulesthroughexamplespreliminaryresults-2012","urls":{},"role":"author","year":"2012","type":"inproceedings","title":"Learning Data Transformation Rules through Examples: Preliminary Results","keywords":"\"Data cleaning\"","key":"wu12:iiweb","id":"wu12:iiweb","booktitle":"Ninth International Workshop on Information Integration on the Web (IIWeb 2012)","bibtype":"inproceedings","bibtex":"@inproceedings{ wu12:iiweb,\n  keywords = {\"Data cleaning\"},\n  booktitle = {Ninth International Workshop on Information Integration on the Web (IIWeb 2012)},\n  title = {Learning Data Transformation Rules through Examples: Preliminary Results},\n  year = {2012},\n  author = {Bo Wu and Pedro Szekely and Craig A. Knoblock}\n}","author_short":["Wu, B.","Szekely, P.","Knoblock, C.<nbsp>A."],"author":["Wu, Bo","Szekely, Pedro","Knoblock, Craig A."],"downloads":0,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"wu12:iiweb\"> </a>Learning Data Transformation Rules through Examples: Preliminary Results.</span>\n\t<span class=\"bibbase_paper_author\">\nWu, B.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2012</span>. -->\n</span>\n\n\n\nIn\n<i>Ninth International Workshop on Information Integration on the Web (IIWeb 2012)</i>,  2012.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  \n  <a href=\"javascript:showBib('wu12:iiweb')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Learning Data Transformation Rules through Examples: Preliminary Results [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011","urls":{"Paper":"http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf","Link":"http://dl.acm.org/citation.cfm?doid=1993053.1993058"},"role":"author","year":"2011","volume":"5","urlpaper":"http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf","urllink":"http://dl.acm.org/citation.cfm?doid=1993053.1993058","type":"article","title":"Building Mashups by Demonstration","number":"3","month":"July","keywords":"\"Mashup Construction\"","key":"tuchinda11:acmtw","journal":"ACM Transactions on the Web (TWEB)","id":"tuchinda11:acmtw","bibtype":"article","bibtex":"@article{ tuchinda11:acmtw,\n  urllink = {http://dl.acm.org/citation.cfm?doid=1993053.1993058},\n  title = {Building Mashups by Demonstration},\n  journal = {ACM Transactions on the Web (TWEB)},\n  author = {Rattapoom Tuchinda and Craig A. Knoblock and Pedro Szekely},\n  number = {3},\n  month = {July},\n  volume = {5},\n  year = {2011},\n  keywords = {\"Mashup Construction\"},\n  urlpaper = {http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf}\n}","author_short":["Tuchinda, R.","Knoblock, C.<nbsp>A.","Szekely, P."],"author":["Tuchinda, Rattapoom","Knoblock, Craig A.","Szekely, Pedro"],"downloads":3,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"tuchinda11:acmtw\"> </a>Building Mashups by Demonstration.</span>\n\t<span class=\"bibbase_paper_author\">\nTuchinda, R.; Knoblock, C.&nbsp;A.;  and Szekely, P.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2011</span>. -->\n</span>\n\n\n\n<i>ACM Transactions on the Web (TWEB)</i>,\n\n5(3).\n\nJuly 2011.\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf\"\n     onclick=\"javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Mashups by Demonstration [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://dl.acm.org/citation.cfm?doid=1993053.1993058')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://dl.acm.org/citation.cfm?doid=1993053.1993058\"\n     onclick=\"javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://dl.acm.org/citation.cfm?doid=1993053.1993058')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/blank.png\"\n\t alt=\"Building Mashups by Demonstration [.1993058]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Link</span></a> \n  \n  \n  <a href=\"javascript:showBib('tuchinda11:acmtw')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Building Mashups by Demonstration [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>3 downloads</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011","urls":{"Presentation":"http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf","Paper":"http://www.isi.edu/integration/papers/knoblock11-lisc.pdf","Link":"http://CEUR-WS.org/Vol-783/"},"role":"author","year":"2011","urlpresentation":"http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/knoblock11-lisc.pdf","urllink":"http://CEUR-WS.org/Vol-783/","type":"inproceedings","title":"Interactively Mapping Data Sources into the Semantic Web","keywords":"\"Source Modeling\"","key":"knoblock11:lisc","id":"knoblock11:lisc","booktitle":"Proceedings of the First International Workshop on Linked Science 2011 in Conjunction with the 10th International Semantic Web Conference","bibtype":"inproceedings","bibtex":"@inproceedings{ knoblock11:lisc,\n  urlpresentation = {http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf},\n  urllink = {http://CEUR-WS.org/Vol-783/},\n  title = {Interactively Mapping Data Sources into the Semantic Web},\n  booktitle = {Proceedings of the First International Workshop on Linked Science 2011 in Conjunction with the 10th International Semantic Web Conference},\n  author = {Craig A. Knoblock and Pedro Szekely and Jose Luis Ambite and Shubham Gupta and Aman Goel and Maria Muslea and Kristina Lerman and Parag Mallick},\n  year = {2011},\n  address = {Bonn, Germany},\n  keywords = {\"Source Modeling\"},\n  urlpaper = {http://www.isi.edu/integration/papers/knoblock11-lisc.pdf}\n}","author_short":["Knoblock, C.<nbsp>A.","Szekely, P.","Ambite, J.<nbsp>L.","Gupta, S.","Goel, A.","Muslea, M.","Lerman, K.","Mallick, P."],"author":["Knoblock, Craig A.","Szekely, Pedro","Ambite, Jose Luis","Gupta, Shubham","Goel, Aman","Muslea, Maria","Lerman, Kristina","Mallick, Parag"],"address":"Bonn, Germany","downloads":1,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"knoblock11:lisc\"> </a>Interactively Mapping Data Sources into the Semantic Web.</span>\n\t<span class=\"bibbase_paper_author\">\nKnoblock, C.&nbsp;A.; Szekely, P.; Ambite, J.&nbsp;L.; Gupta, S.; Goel, A.; Muslea, M.; Lerman, K.;  and Mallick, P.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2011</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the First International Workshop on Linked Science 2011 in Conjunction with the 10th International Semantic Web Conference</i>, Bonn, Germany,  2011.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Interactively Mapping Data Sources into the Semantic Web [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/papers/knoblock11-lisc.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/knoblock11-lisc.pdf\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/papers/knoblock11-lisc.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Interactively Mapping Data Sources into the Semantic Web [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://CEUR-WS.org/Vol-783/')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://CEUR-WS.org/Vol-783/\"\n     onclick=\"javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://CEUR-WS.org/Vol-783/')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/blank.png\"\n\t alt=\"Interactively Mapping Data Sources into the Semantic Web [.org/Vol-783/]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Link</span></a> \n  \n  \n  <a href=\"javascript:showBib('knoblock11:lisc')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Interactively Mapping Data Sources into the Semantic Web [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>1 download</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011","urls":{"Presentation":"http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf","Paper":"http://www.isi.edu/integration/papers/gil11-iswc.pdf"},"role":"author","year":"2011","urlpresentation":"http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/gil11-iswc.pdf","type":"inproceedings","title":"Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows","keywords":"\"Source Modeling\"","key":"gil11:iswc","id":"gil11:iswc","booktitle":"Proceedings of the 10th International Semantic Web Conference (ISWC 2011)","bibtype":"inproceedings","bibtex":"@inproceedings{ gil11:iswc,\n  urlpresentation = {http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf},\n  title = {Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows},\n  booktitle = {Proceedings of the 10th International Semantic Web Conference (ISWC 2011)},\n  author = {Yolanda Gil and Pedro Szekely and Sandra Villamizar and Thomas C. Harmon and Varun Ratnakar and Shubham Gupta and Maria Muslea and Fabio Silva and Craig A. Knoblock},\n  year = {2011},\n  keywords = {\"Source Modeling\"},\n  urlpaper = {http://www.isi.edu/integration/papers/gil11-iswc.pdf}\n}","author_short":["Gil, Y.","Szekely, P.","Villamizar, S.","Harmon, T.<nbsp>C.","Ratnakar, V.","Gupta, S.","Muslea, M.","Silva, F.","Knoblock, C.<nbsp>A."],"author":["Gil, Yolanda","Szekely, Pedro","Villamizar, Sandra","Harmon, Thomas C.","Ratnakar, Varun","Gupta, Shubham","Muslea, Maria","Silva, Fabio","Knoblock, Craig A."],"downloads":1,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"gil11:iswc\"> </a>Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows.</span>\n\t<span class=\"bibbase_paper_author\">\nGil, Y.; Szekely, P.; Villamizar, S.; Harmon, T.&nbsp;C.; Ratnakar, V.; Gupta, S.; Muslea, M.; Silva, F.;  and Knoblock, C.&nbsp;A.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2011</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 10th International Semantic Web Conference (ISWC 2011)</i>,  2011.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf\"\n     onclick=\"javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/papers/gil11-iswc.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/gil11-iswc.pdf\"\n     onclick=\"javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/papers/gil11-iswc.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('gil11:iswc')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>1 download</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011","urls":{"Presentation":"http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf","Paper":"http://www.isi.edu/integration/papers/goel11-aaai.pdf"},"role":"author","year":"2011","urlpresentation":"http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf","urlpaper":"http://www.isi.edu/integration/papers/goel11-aaai.pdf","type":"inproceedings","title":"Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation","keywords":"\"Source Modeling\"","key":"goel11:aaai","id":"goel11:aaai","booktitle":"Proceedings of the 25th National Conference on Artificial Intelligence (AAAI-11)","bibtype":"inproceedings","bibtex":"@inproceedings{ goel11:aaai,\n  urlpresentation = {http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf},\n  title = {Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation},\n  booktitle = {Proceedings of the 25th National Conference on Artificial Intelligence (AAAI-11)},\n  author = {Aman Goel and Craig A. Knoblock and Kristina Lerman},\n  year = {2011},\n  address = {San Francisco, CA},\n  keywords = {\"Source Modeling\"},\n  urlpaper = {http://www.isi.edu/integration/papers/goel11-aaai.pdf}\n}","author_short":["Goel, A.","Knoblock, C.<nbsp>A.","Lerman, K."],"author":["Goel, Aman","Knoblock, Craig A.","Lerman, Kristina"],"address":"San Francisco, CA","downloads":1,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"goel11:aaai\"> </a>Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation.</span>\n\t<span class=\"bibbase_paper_author\">\nGoel, A.; Knoblock, C.&nbsp;A.;  and Lerman, K.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2011</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 25th National Conference on Artificial Intelligence (AAAI-11)</i>, San Francisco, CA,  2011.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf\"\n     onclick=\"javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/papers/goel11-aaai.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/goel11-aaai.pdf\"\n     onclick=\"javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/papers/goel11-aaai.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('goel11:aaai')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>1 download</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011","urls":{"Presentation":"http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf","Paper":"http://www.isi.edu/integration/papers/szekely11-sso.pdf"},"role":"author","year":"2011","urlpresentation":"http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/szekely11-sso.pdf","type":"inproceedings","title":"Exploiting Semantics of Web Services for Geospatial Data Fusion","keywords":"\"Geospatial Fusion\"","key":"szekely11:sso","id":"szekely11:sso","booktitle":"Proceedings of the SIGSPATIAL International Workshop on Spatial Semantics and Ontologies (SSO 2011)","bibtype":"inproceedings","bibtex":"@inproceedings{ szekely11:sso,\n  urlpresentation = {http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf},\n  title = {Exploiting Semantics of Web Services for Geospatial Data Fusion},\n  booktitle = {Proceedings of the SIGSPATIAL International Workshop on Spatial Semantics and Ontologies (SSO 2011)},\n  author = {Pedro Szekely and Craig A. Knoblock and Shubham Gupta and Mohsen Taheriyan and Bo Wu},\n  year = {2011},\n  address = {Chicago, IL},\n  keywords = {\"Geospatial Fusion\"},\n  urlpaper = {http://www.isi.edu/integration/papers/szekely11-sso.pdf}\n}","author_short":["Szekely, P.","Knoblock, C.<nbsp>A.","Gupta, S.","Taheriyan, M.","Wu, B."],"author":["Szekely, Pedro","Knoblock, Craig A.","Gupta, Shubham","Taheriyan, Mohsen","Wu, Bo"],"address":"Chicago, IL","downloads":1,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"szekely11:sso\"> </a>Exploiting Semantics of Web Services for Geospatial Data Fusion.</span>\n\t<span class=\"bibbase_paper_author\">\nSzekely, P.; Knoblock, C.&nbsp;A.; Gupta, S.; Taheriyan, M.;  and Wu, B.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2011</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the SIGSPATIAL International Workshop on Spatial Semantics and Ontologies (SSO 2011)</i>, Chicago, IL,  2011.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf\"\n     onclick=\"javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Exploiting Semantics of Web Services for Geospatial Data Fusion [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/papers/szekely11-sso.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/szekely11-sso.pdf\"\n     onclick=\"javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/papers/szekely11-sso.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Exploiting Semantics of Web Services for Geospatial Data Fusion [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('szekely11:sso')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Exploiting Semantics of Web Services for Geospatial Data Fusion [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  <span class=\"bibbase_stats_paper\" style=\"color: #777;\">\n    <span>1 download</span>\n  </span>\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"goel--a-lerman-exploitingstructurewithindataforaccuratelabelingusingconditionalrandomfields-2012","urls":{},"role":"author","year":"2012","uri":"̆rlpapers2://publication/uuid/D091747F-284E-4CED-9D63-85846F82BE46","type":"inproceedings","title":"Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields","rating":"0","key":"goel12:exploiting","id":"goel12:exploiting","date-modified":"2013-05-04T01:25:59GMT","date-added":"2013-01-20T04:52:24GMT","booktitle":"Proceedings of the 14th International Conference on Artificial Intelligence (ICAI)","bibtype":"inproceedings","bibtex":"@inproceedings{ goel12:exploiting,\n  author = {Goel, Aman and Knoblock, Craig A and Lerman, Kristina},\n  title = {{Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields}},\n  booktitle = {Proceedings of the 14th International Conference on Artificial Intelligence (ICAI)},\n  year = {2012},\n  rating = {0},\n  date-added = {2013-01-20T04:52:24GMT},\n  date-modified = {2013-05-04T01:25:59GMT},\n  uri = {̆rl{papers2://publication/uuid/D091747F-284E-4CED-9D63-85846F82BE46}}\n}","author_short":["Goel, A.","Knoblock","A, C.","Lerman, K."],"author":["Goel, Aman","Knoblock","A, Craig","Lerman, Kristina"],"downloads":0,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"goel12:exploiting\"> </a>Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields.</span>\n\t<span class=\"bibbase_paper_author\">\nGoel, A.; Knoblock; A, C.;  and Lerman, K.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2012</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 14th International Conference on Artificial Intelligence (ICAI)</i>,  2012.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  \n  <a href=\"javascript:showBib('goel12:exploiting')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010","urls":{"Presentation":"http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf","Paper":"http://www.isi.edu/integration/papers/gupta10-iscram.pdf"},"role":"author","year":"2010","urlpresentation":"http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/gupta10-iscram.pdf","type":"inproceedings","title":"Building Geospatial Mashups to Visualize Information for Crisis Management","keywords":"\"Mashup Construction\"","key":"gupta10:iscram","id":"gupta10:iscram","booktitle":"Proceedings of the 7th International Conference on Information Systems for Crisis Response and Management","bibtype":"inproceedings","bibtex":"@inproceedings{ gupta10:iscram,\n  urlpresentation = {http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf},\n  title = {Building Geospatial Mashups to Visualize Information for Crisis Management},\n  booktitle = {Proceedings of the 7th International Conference on Information Systems for Crisis Response and Management},\n  author = {Shubham Gupta and Craig A. Knoblock},\n  year = {2010},\n  keywords = {\"Mashup Construction\"},\n  urlpaper = {http://www.isi.edu/integration/papers/gupta10-iscram.pdf}\n}","author_short":["Gupta, S.","Knoblock, C.<nbsp>A."],"author":["Gupta, Shubham","Knoblock, Craig A."],"downloads":0,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"gupta10:iscram\"> </a>Building Geospatial Mashups to Visualize Information for Crisis Management.</span>\n\t<span class=\"bibbase_paper_author\">\nGupta, S.;  and Knoblock, C.&nbsp;A.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2010</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 7th International Conference on Information Systems for Crisis Response and Management</i>,  2010.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf\"\n     onclick=\"javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Geospatial Mashups to Visualize Information for Crisis Management [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/papers/gupta10-iscram.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/gupta10-iscram.pdf\"\n     onclick=\"javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/papers/gupta10-iscram.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Geospatial Mashups to Visualize Information for Crisis Management [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('gupta10:iscram')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Building Geospatial Mashups to Visualize Information for Crisis Management [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"tuchinda-szekely-knoblock-buildingmashupsbyexample-2008","urls":{"Presentation":"http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf","Paper":"http://www.isi.edu/integration/papers/tuchinda08-iui.pdf"},"role":"author","year":"2008","urlpresentation":"http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/tuchinda08-iui.pdf","type":"inproceedings","title":"Building Mashups by Example","month":"January","keywords":"\"Mashup Construction\"","key":"tuchinda08:iui","id":"tuchinda08:iui","booktitle":"Proceedings of the 2008 International Conference on Intelligent User Interface","bibtype":"inproceedings","bibtex":"@inproceedings{ tuchinda08:iui,\n  urlpresentation = {http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf},\n  author = {Rattapoom Tuchinda and Pedro Szekely and Craig A. Knoblock},\n  booktitle = {Proceedings of the 2008 International Conference on Intelligent User Interface},\n  title = {Building Mashups by Example},\n  month = {January},\n  year = {2008},\n  keywords = {\"Mashup Construction\"},\n  urlpaper = {http://www.isi.edu/integration/papers/tuchinda08-iui.pdf}\n}","author_short":["Tuchinda, R.","Szekely, P.","Knoblock, C.<nbsp>A."],"author":["Tuchinda, Rattapoom","Szekely, Pedro","Knoblock, Craig A."],"downloads":0,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"tuchinda08:iui\"> </a>Building Mashups by Example.</span>\n\t<span class=\"bibbase_paper_author\">\nTuchinda, R.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2008</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the 2008 International Conference on Intelligent User Interface</i>, January 2008.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf\"\n     onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Mashups by Example [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/papers/tuchinda08-iui.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/tuchinda08-iui.pdf\"\n     onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/papers/tuchinda08-iui.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Mashups by Example [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('tuchinda08:iui')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Building Mashups by Example [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"},{"bibbaseid":"tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007","urls":{"Presentation":"http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf","Paper":"http://www.isi.edu/integration/papers/tuchinda07-iui.pdf"},"role":"author","year":"2007","urlpresentation":"http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf","urlpaper":"http://www.isi.edu/integration/papers/tuchinda07-iui.pdf","type":"inproceedings","title":"Building Data Integration Queries by Demonstration","month":"January","keywords":"\"Mashup Construction\"","key":"tuchinda07:iui","id":"tuchinda07:iui","booktitle":"Proceedings of the International Conference on Intelligent User Interface","bibtype":"inproceedings","bibtex":"@inproceedings{ tuchinda07:iui,\n  urlpresentation = {http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf},\n  author = {Rattapoom Tuchinda and Pedro Szekely and Craig A. Knoblock},\n  booktitle = {Proceedings of the International Conference on Intelligent User Interface},\n  title = {Building Data Integration Queries by Demonstration},\n  month = {January},\n  year = {2007},\n  keywords = {\"Mashup Construction\"},\n  urlpaper = {http://www.isi.edu/integration/papers/tuchinda07-iui.pdf}\n}","author_short":["Tuchinda, R.","Szekely, P.","Knoblock, C.<nbsp>A."],"author":["Tuchinda, Rattapoom","Szekely, Pedro","Knoblock, Craig A."],"downloads":0,"html":"<div class=\"bibbase_paper\">\n\n\n<span class=\"bibbase_paper_titleauthoryear\">\n\t<span class=\"bibbase_paper_title\"><a name=\"tuchinda07:iui\"> </a>Building Data Integration Queries by Demonstration.</span>\n\t<span class=\"bibbase_paper_author\">\nTuchinda, R.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>\n\t<!-- <span class=\"bibbase_paper_year\">2007</span>. -->\n</span>\n\n\n\nIn\n<i>Proceedings of the International Conference on Intelligent User Interface</i>, January 2007.\n\n\n\n\n\n<br class=\"bibbase_paper_content\"/>\n\n<span class=\"bibbase_paper_content\">\n  \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf\"\n     onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Data Integration Queries by Demonstration [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Presentation</span></a> \n  \n  <!-- <i -->\n     <!-- onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/papers/tuchinda07-iui.pdf')\">DEBUG -->\n  <!-- </i> -->\n\n  <a href=\"http://www.isi.edu/integration/papers/tuchinda07-iui.pdf\"\n     onclick=\"javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/papers/tuchinda07-iui.pdf')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/pdf.png\"\n\t alt=\"Building Data Integration Queries by Demonstration [.pdf]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\" ><span class=\"bibbase_icon_text\">Paper</span></a> \n  \n  \n  <a href=\"javascript:showBib('tuchinda07:iui')\">\n    <img src=\"http://www.bibbase.org/img/filetypes/bib.png\" \n\t alt=\"Building Data Integration Queries by Demonstration [bib]\" \n\t class=\"bibbase_icon\"\n\t style=\"width: 24px; height: 24px; border: 0px; vertical-align: text-top\"><span class=\"bibbase_icon_text\">Bibtex</span></a>\n  \n  &nbsp; \n\n  \n  \n  &nbsp;\n  \n  \n\n  \n  \n</span>\n\n<!--  -->\n\n</div>\n"}]
    };
  </script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>

  <!-- <script src="http://www.bibbase.org/js/bootstrap.min.js" type="text/javascript"></script> -->
  <script src="http://www.bibbase.org/js/bibbase.min.js" type="text/javascript"></script>
  <!-- <script src="http://www.bibbase.org/js/google_analytics.js" type="text/javascript"></script> -->

  <script charset="utf-8" 
	  type="text/javascript" 
	  src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/bib0d-20/8005/988928d1-4ba9-465b-91e6-b5496ef7f913">
  </script>


  <div id="bibbase_header">

    <ul class="nav nav-pills" style="margin: 0px;">

      <li style="font-size: larger;">
	<a href="http://www.bibbase.org/rss?bib=http%3A%2F%2Fwww.isi.edu%2Fintegration%2Fkarma%2Fkarma-bib.bib">
	  <i class="icon-rss"></i>
	</a>
      </li>

      <li class="dropdown">
	<a class="dropdown-toggle"
	   data-toggle="dropdown"
	   href="#">
          Group by
          <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
    	  <li><a tabindex="-1" 
		 href="javascript:groupby('type')">
	      type</a>
	  </li>
    	  <li><a tabindex="-1" 
		 href="javascript:groupby('year')">
	      year</a>
	  </li>
    	  <li><a tabindex="-1" 
		 href="javascript:groupby('author_short')">
	      author</a>
	  </li>
	</ul>
      </li>

      <li>
	<a href="javascript:toggleAll()">
	  Toggle All
	</a>
      </li>

      <li style="float: right; margin-right: 50px;">
	<a href="http://bibbase.org">generated by 
	  <img src="http://www.bibbase.org/img/bibbase_small.png" 
	       style="vertical-align: top;"/>
	</a>
      </li>

    </ul>

  </div>


  <div id="bibbase_body">
  <div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="Szekely:2013vq"> </a>Connecting the Smithsonian American Art Museum to the Linked Data Cloud.</span>
	<span class="bibbase_paper_author">
Szekely, P.; Knoblock; A, C.; Fengyu, Y.; Zhu, X.; Fink, E.; Allen, R.;  and Goodlander, G.</span>
	<!-- <span class="bibbase_paper_year">2013</span>. -->
</span>



In
<i>Proceedings of the 10th Extended Semantic Web Conference</i>, Montpellier, May 2013.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.youtube.com/watch?v=1Vaytr09H1w&amp;feature=share&amp;list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA"
     onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.youtube.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA')">
    <img src="http://www.bibbase.org/img/filetypes/blank.png"
	 alt="Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.com/watch?v=1Vaytr09H1w&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Youtube</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://slidesha.re/18vxMnn')">DEBUG -->
  <!-- </i> -->

  <a href="http://slidesha.re/18vxMnn"
     onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://slidesha.re/18vxMnn')">
    <img src="http://www.bibbase.org/img/filetypes/blank.png"
	 alt="Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.re/18vxMnn]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Slideshare</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf"
     onclick="javascript:log_download('szekely--a-fengyu-zhu-fink-allen-goodlander-connectingthesmithsonianamericanartmuseumtothelinkeddatacloud-2013', 'http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Connecting the Smithsonian American Art Museum to the Linked Data Cloud [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('Szekely:2013vq')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Connecting the Smithsonian American Art Museum to the Linked Data Cloud [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>19 downloads</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="tuchinda11:acmtw"> </a>Building Mashups by Demonstration.</span>
	<span class="bibbase_paper_author">
Tuchinda, R.; Knoblock, C.&nbsp;A.;  and Szekely, P.</span>
	<!-- <span class="bibbase_paper_year">2011</span>. -->
</span>



<i>ACM Transactions on the Web (TWEB)</i>,

5(3).

July 2011.




<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf"
     onclick="javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://www.isi.edu/integration/papers/tuchinda11-acmtw.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Mashups by Demonstration [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://dl.acm.org/citation.cfm?doid=1993053.1993058')">DEBUG -->
  <!-- </i> -->

  <a href="http://dl.acm.org/citation.cfm?doid=1993053.1993058"
     onclick="javascript:log_download('tuchinda-knoblock-szekely-buildingmashupsbydemonstration-2011', 'http://dl.acm.org/citation.cfm?doid=1993053.1993058')">
    <img src="http://www.bibbase.org/img/filetypes/blank.png"
	 alt="Building Mashups by Demonstration [.1993058]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Link</span></a> 
  
  
  <a href="javascript:showBib('tuchinda11:acmtw')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Building Mashups by Demonstration [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>3 downloads</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="goel12:exploiting"> </a>Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields.</span>
	<span class="bibbase_paper_author">
Goel, A.; Knoblock; A, C.;  and Lerman, K.</span>
	<!-- <span class="bibbase_paper_year">2012</span>. -->
</span>



In
<i>Proceedings of the 14th International Conference on Artificial Intelligence (ICAI)</i>,  2012.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  
  <a href="javascript:showBib('goel12:exploiting')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Exploiting Structure within Data for Accurate Labeling Using Conditional Random Fields [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="taheriyan12:iswc"> </a>Rapidly Integrating Services into the Linked Data Cloud.</span>
	<span class="bibbase_paper_author">
Taheriyan, M.; Knoblock, C.&nbsp;A.; Szekely, P.;  and Ambite, J.&nbsp;L.</span>
	<!-- <span class="bibbase_paper_year">2012</span>. -->
</span>



In
<i>Proceedings of the 11th International Semantic Web Conference (ISWC 2012)</i>,  2012.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf"
     onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/integration/karma/other-materials/taheriyan/gss2012-poster.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Rapidly Integrating Services into the Linked Data Cloud [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Poster</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf"
     onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-rapidlyintegratingservicesintothelinkeddatacloud-2012', 'http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Rapidly Integrating Services into the Linked Data Cloud [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('taheriyan12:iswc')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Rapidly Integrating Services into the Linked Data Cloud [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>21 downloads</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="knoblock11:lisc"> </a>Interactively Mapping Data Sources into the Semantic Web.</span>
	<span class="bibbase_paper_author">
Knoblock, C.&nbsp;A.; Szekely, P.; Ambite, J.&nbsp;L.; Gupta, S.; Goel, A.; Muslea, M.; Lerman, K.;  and Mallick, P.</span>
	<!-- <span class="bibbase_paper_year">2011</span>. -->
</span>



In
<i>Proceedings of the First International Workshop on Linked Science 2011 in Conjunction with the 10th International Semantic Web Conference</i>, Bonn, Germany,  2011.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/slides/knoblock11-lisc-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Interactively Mapping Data Sources into the Semantic Web [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/papers/knoblock11-lisc.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/knoblock11-lisc.pdf"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://www.isi.edu/integration/papers/knoblock11-lisc.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Interactively Mapping Data Sources into the Semantic Web [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://CEUR-WS.org/Vol-783/')">DEBUG -->
  <!-- </i> -->

  <a href="http://CEUR-WS.org/Vol-783/"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-interactivelymappingdatasourcesintothesemanticweb-2011', 'http://CEUR-WS.org/Vol-783/')">
    <img src="http://www.bibbase.org/img/filetypes/blank.png"
	 alt="Interactively Mapping Data Sources into the Semantic Web [.org/Vol-783/]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Link</span></a> 
  
  
  <a href="javascript:showBib('knoblock11:lisc')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Interactively Mapping Data Sources into the Semantic Web [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>1 download</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="gupta10:iscram"> </a>Building Geospatial Mashups to Visualize Information for Crisis Management.</span>
	<span class="bibbase_paper_author">
Gupta, S.;  and Knoblock, C.&nbsp;A.</span>
	<!-- <span class="bibbase_paper_year">2010</span>. -->
</span>



In
<i>Proceedings of the 7th International Conference on Information Systems for Crisis Response and Management</i>,  2010.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf"
     onclick="javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/slides/gupta10-iscram-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Geospatial Mashups to Visualize Information for Crisis Management [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/papers/gupta10-iscram.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/gupta10-iscram.pdf"
     onclick="javascript:log_download('gupta-knoblock-buildinggeospatialmashupstovisualizeinformationforcrisismanagement-2010', 'http://www.isi.edu/integration/papers/gupta10-iscram.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Geospatial Mashups to Visualize Information for Crisis Management [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('gupta10:iscram')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Building Geospatial Mashups to Visualize Information for Crisis Management [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="knoblock12:eswc"> </a>Semi-Automatically Mapping Structured Sources into the Semantic Web.</span>
	<span class="bibbase_paper_author">
Knoblock, C.&nbsp;A.; Szekely, P.; Ambite, J.&nbsp;L.; Gupta, S.; Goel, A.; Muslea, M.; Lerman, K.;  and Mallick, P.</span>
	<!-- <span class="bibbase_paper_year">2012</span>. -->
</span>



In
<i>Proceedings of the Extended Semantic Web Conference</i>, Crete, Greece,  2012.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.youtube.com/watch?v=kUIqTI56oeQ&amp;feature=share&amp;list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.youtube.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]')">
    <img src="http://www.bibbase.org/img/filetypes/blank.png"
	 alt="Semi-Automatically Mapping Structured Sources into the Semantic Web [.com/watch?v=kUIqTI56oeQ&feature=share&list=PLdD4tO6i0DwMXmBhOwlt7zEZKoOWrWpOA]]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Youtube</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/slides/knoblock12-eswc-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Semi-Automatically Mapping Structured Sources into the Semantic Web [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf"
     onclick="javascript:log_download('knoblock-szekely-ambite-gupta-goel-muslea-lerman-mallick-semiautomaticallymappingstructuredsourcesintothesemanticweb-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Semi-Automatically Mapping Structured Sources into the Semantic Web [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('knoblock12:eswc')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Semi-Automatically Mapping Structured Sources into the Semantic Web [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>2 downloads</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="gil11:iswc"> </a>Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows.</span>
	<span class="bibbase_paper_author">
Gil, Y.; Szekely, P.; Villamizar, S.; Harmon, T.&nbsp;C.; Ratnakar, V.; Gupta, S.; Muslea, M.; Silva, F.;  and Knoblock, C.&nbsp;A.</span>
	<!-- <span class="bibbase_paper_year">2011</span>. -->
</span>



In
<i>Proceedings of the 10th International Semantic Web Conference (ISWC 2011)</i>,  2011.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf"
     onclick="javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/slides/gil11-iswc-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/papers/gil11-iswc.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/gil11-iswc.pdf"
     onclick="javascript:log_download('gil-szekely-villamizar-harmon-ratnakar-gupta-muslea-silva-knoblock-mindyourmetadataexploitingsemanticsforconfigurationadaptationandprovenanceinscientificworkflows-2011', 'http://www.isi.edu/integration/papers/gil11-iswc.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('gil11:iswc')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Mind Your Metadata: Exploiting Semantics for Configuration, Adaptation, and Provenance in Scientific Workflows [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>1 download</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="tuchinda08:iui"> </a>Building Mashups by Example.</span>
	<span class="bibbase_paper_author">
Tuchinda, R.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>
	<!-- <span class="bibbase_paper_year">2008</span>. -->
</span>



In
<i>Proceedings of the 2008 International Conference on Intelligent User Interface</i>, January 2008.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf"
     onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/slides/tuchinda08-iui-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Mashups by Example [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/papers/tuchinda08-iui.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/tuchinda08-iui.pdf"
     onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingmashupsbyexample-2008', 'http://www.isi.edu/integration/papers/tuchinda08-iui.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Mashups by Example [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('tuchinda08:iui')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Building Mashups by Example [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="taheriyan12:lapis"> </a>Semi-Automatically Modeling Web APIs to Create Linked APIs.</span>
	<span class="bibbase_paper_author">
Taheriyan, M.; Knoblock, C.&nbsp;A.; Szekely, P.;  and Ambite, J.&nbsp;L.</span>
	<!-- <span class="bibbase_paper_year">2012</span>. -->
</span>



In
<i>Proceedings of the ESWC 2012 Workshop on Linked APIs</i>,  2012.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-semiautomaticallymodelingwebapistocreatelinkedapis-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf"
     onclick="javascript:log_download('taheriyan-knoblock-szekely-ambite-semiautomaticallymodelingwebapistocreatelinkedapis-2012', 'http://www.isi.edu/integration/papers/knoblock12-eswc.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Semi-Automatically Modeling Web APIs to Create Linked APIs [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('taheriyan12:lapis')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Semi-Automatically Modeling Web APIs to Create Linked APIs [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>1 download</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="goel11:aaai"> </a>Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation.</span>
	<span class="bibbase_paper_author">
Goel, A.; Knoblock, C.&nbsp;A.;  and Lerman, K.</span>
	<!-- <span class="bibbase_paper_year">2011</span>. -->
</span>



In
<i>Proceedings of the 25th National Conference on Artificial Intelligence (AAAI-11)</i>, San Francisco, CA,  2011.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf"
     onclick="javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/slides/goel11-aaai-poster.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/papers/goel11-aaai.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/goel11-aaai.pdf"
     onclick="javascript:log_download('goel-knoblock-lerman-usingconditionalrandomfieldstoexploittokenstructureandlabelsforaccuratesemanticannotation-2011', 'http://www.isi.edu/integration/papers/goel11-aaai.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('goel11:aaai')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Using Conditional Random Fields to Exploit Token Structure and Labels for Accurate Semantic Annotation [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>1 download</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="tuchinda07:iui"> </a>Building Data Integration Queries by Demonstration.</span>
	<span class="bibbase_paper_author">
Tuchinda, R.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>
	<!-- <span class="bibbase_paper_year">2007</span>. -->
</span>



In
<i>Proceedings of the International Conference on Intelligent User Interface</i>, January 2007.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf"
     onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/slides/tuchinda07-iui-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Data Integration Queries by Demonstration [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/papers/tuchinda07-iui.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/tuchinda07-iui.pdf"
     onclick="javascript:log_download('tuchinda-szekely-knoblock-buildingdataintegrationqueriesbydemonstration-2007', 'http://www.isi.edu/integration/papers/tuchinda07-iui.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Building Data Integration Queries by Demonstration [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('tuchinda07:iui')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Building Data Integration Queries by Demonstration [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="wu12:iiweb"> </a>Learning Data Transformation Rules through Examples: Preliminary Results.</span>
	<span class="bibbase_paper_author">
Wu, B.; Szekely, P.;  and Knoblock, C.&nbsp;A.</span>
	<!-- <span class="bibbase_paper_year">2012</span>. -->
</span>



In
<i>Ninth International Workshop on Information Integration on the Web (IIWeb 2012)</i>,  2012.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  
  <a href="javascript:showBib('wu12:iiweb')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Learning Data Transformation Rules through Examples: Preliminary Results [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>
<div class="bibbase_paper">


<span class="bibbase_paper_titleauthoryear">
	<span class="bibbase_paper_title"><a name="szekely11:sso"> </a>Exploiting Semantics of Web Services for Geospatial Data Fusion.</span>
	<span class="bibbase_paper_author">
Szekely, P.; Knoblock, C.&nbsp;A.; Gupta, S.; Taheriyan, M.;  and Wu, B.</span>
	<!-- <span class="bibbase_paper_year">2011</span>. -->
</span>



In
<i>Proceedings of the SIGSPATIAL International Workshop on Spatial Semantics and Ontologies (SSO 2011)</i>, Chicago, IL,  2011.





<br class="bibbase_paper_content"/>

<span class="bibbase_paper_content">
  
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf"
     onclick="javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/slides/szekely11-sso-slides.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Exploiting Semantics of Web Services for Geospatial Data Fusion [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Presentation</span></a> 
  
  <!-- <i -->
     <!-- onclick="javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/papers/szekely11-sso.pdf')">DEBUG -->
  <!-- </i> -->

  <a href="http://www.isi.edu/integration/papers/szekely11-sso.pdf"
     onclick="javascript:log_download('szekely-knoblock-gupta-taheriyan-wu-exploitingsemanticsofwebservicesforgeospatialdatafusion-2011', 'http://www.isi.edu/integration/papers/szekely11-sso.pdf')">
    <img src="http://www.bibbase.org/img/filetypes/pdf.png"
	 alt="Exploiting Semantics of Web Services for Geospatial Data Fusion [.pdf]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top" ><span class="bibbase_icon_text">Paper</span></a> 
  
  
  <a href="javascript:showBib('szekely11:sso')">
    <img src="http://www.bibbase.org/img/filetypes/bib.png" 
	 alt="Exploiting Semantics of Web Services for Geospatial Data Fusion [bib]" 
	 class="bibbase_icon"
	 style="width: 24px; height: 24px; border: 0px; vertical-align: text-top"><span class="bibbase_icon_text">Bibtex</span></a>
  
  &nbsp; 

  
  <span class="bibbase_stats_paper" style="color: #777;">
    <span>1 download</span>
  </span>
  
  
  &nbsp;
  
  

  
  
</span>

<!--  -->

</div>

  </div>


  <!-- BibTex Modal -->
  <div id="myModal" 
       class="modal hide fade" 
       tabindex="-1" 
       role="dialog" 
       aria-labelledby="myModalLabel" 
       aria-hidden="true">
    <!-- <div class="modal-header"> -->
    <!--   <\!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -\-> -->
    <!--   <h3 id="myModalLabel">BibTex</h3> -->
    <!-- </div> -->
    <div class="modal-body">
      <pre style="white-space: pre-wrap">
      </pre>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" 
	      data-dismiss="modal" 
	      aria-hidden="true">
	Close
      </button>
    </div>
  </div>

  <!-- Abstract Modal -->
  <div id="abstractModal" 
       class="modal hide fade" 
       tabindex="-1" 
       role="dialog" 
       aria-labelledby="abstractModalLabel" 
       aria-hidden="true">
    <!-- <div class="modal-header"> -->
    <!--   <\!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -\-> -->
    <!--   <h3 id="myModalLabel">BibTex</h3> -->
    <!-- </div> -->
    <div class="modal-body">
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" 
	      data-dismiss="modal" 
	      aria-hidden="true">
	Close
      </button>
    </div>
  </div>

  <iframe id="bibbase_controlframe"
	  style="display: none;">
  </iframe>

</div>

 

          

          
          
          
          
          
          
    <div id="footer">
      <div class="container">
        <p class="muted credit">This research is based upon work supported in part by the National Science Foundation under award number IIS-1117913, the NIH through the following NCRR grant: the Biomedical Informatics Research Network (1 U24 RR025736-01), the National Institutes of Health under grant number (1 UL1 RR031986-01), and Chevron Corp. under the joint project Center for Interactive Smart Oilfield Technologies (CiSoft), at the University of Southern California.</p>
      </div>
    </div>
    </div> <!-- /container -->
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="assets/js/bootstrap-tooltip.js"></script>
     <script src="assets/js/bootstrap-popover.js"></script>
       <script src="http://www.bibbase.org/js/bibbase.js" type="text/javascript"></script>
           <script src="assets/js/bootstrap-dropdown.js"></script>
     <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>     
    <script src="assets/js/bootstrap-button.js"></script>   
    <script src="assets/js/bootstrap-typeahead.js"></script>
     <script src="assets/js/bootstrap-collapse.js"></script>

  <script src="http://www.bibbase.org/js/google_analytics.js" type="text/javascript"></script>
  <script charset="utf-8" 
	  type="text/javascript" 
	  src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/bib0d-20/8005/988928d1-4ba9-465b-91e6-b5496ef7f913">
  </script>
   
	<!--Javascript not used
	    <script src="assets/js/bootstrap-dropdown.js"></script>
     <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
	
    <script src="assets/js/bootstrap-scrollspy.js"></script>
   
    
    <script src="assets/js/bootstrap-alert.js"></script>
 --> 
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42422679-1', 'isi.edu');
  ga('send', 'pageview');

</script>
  </body>
</html>

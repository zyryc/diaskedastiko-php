<?php
class WelcomeController {

  public function __construct() {
  }

  public function index() {
  	$data =[
  		'title'=>"Home",
  		'content'=>'<p id="isPasted">Welcome to our website! We are a [company/organization/service] that [description of what you do].</p>

<p>We believe in [mission statement/values]. Our goal is to [what you aim to accomplish].</p>

<p>Here are a few of the things that make us stand out:</p>

<ul>
	<li>[Feature/benefit/differentiator 1]</li>
	<li>[Feature/benefit/differentiator 2]</li>
	<li>[Feature/benefit/differentiator 3]</li>
</ul>

<p>Take a look around our site to learn more about what we do and how we can help you. If you have any questions or would like to get in touch with us, please don&#39;t hesitate to [contact us]. We&#39;d love to hear from you!</p>'

  	];
    view("welcome",$data);
  }

  public function about(){
  	$data =[
  		'title'=>"About",
  		'content'=>'<p id="isPasted">Our PHP framework is a powerful tool for building modern web applications. It is built on top of proven technologies and features a robust set of libraries and components that make it easy to develop professional-grade applications quickly and efficiently.</p>

<p>Some of the key features of our framework include:</p>

<ul>
	<li>

		<p>MVC architecture: Our framework is based on the Model-View-Controller (MVC) pattern, which separates the application&#39;s logic, data, and presentation layers. This makes it easy to maintain and scale your applications over time.</p>
	</li>
	<li>

		<p>Easy-to-use API: Our framework provides a simple, intuitive API that makes it easy to build complex applications without having to worry about low-level details.</p>
	</li>
	<li>

		<p>Extensive documentation: We provide comprehensive documentation that covers all aspects of the framework, making it easy to get started and learn new features as you go.</p>
	</li>
	<li>

		<p>Active community: Our community of developers is always available to help with any questions or issues you may have. We have an active forum where you can get help and share your knowledge with others.</p>
	</li>
</ul>

<p>We believe that our framework is the best choice for building professional-grade web applications, and we hope you&#39;ll give it a try!</p>'

  	];
    view("welcome",$data);

  } public function contact(){
  	$data =[
  		'title'=>"Contact",
  		'content'=>'<p id="isPasted">Need to get in touch with us? Here are a few ways to contact us:</p>

<ul>
	<li>

		<p>Email: Send us an email at <a href="mailto:email@domain.com" target="_new">email@domain.com</a>. We&#39;ll do our best to get back to you as soon as possible.</p>
	</li>
	<li>

		<p>Phone: Give us a call at +1 (123) 456-7890. If we&#39;re not available, please leave a message and we&#39;ll get back to you as soon as we can.</p>
	</li>
	<li>

		<p>Social media: Follow us on <a href="https://twitter.com/username" target="_new">Twitter</a> or <a href="https://facebook.com/username" target="_new">Facebook</a> for updates and to ask us questions.</p>
	</li>
</ul>

<p>We look forward to hearing from you!</p>'

  	];
    view("welcome",$data);
  	
  } public function news(){
  	$data =[
  		'title'=>"News",
  		'content'=>'<p id="isPasted">Welcome to our news page! Here, you&#39;ll find the latest updates and announcements about our company, products, and services.</p>

<ul>
	<li>

		<p><a href="https://chat.openai.com/chat/69fd8de7-8302-43d5-ad2e-9d51fb558b7d#" target="_new">New feature released</a>: We&#39;re excited to announce the release of a new feature that makes it easier than ever to [description of feature]. [More information and details about the feature]</p>
	</li>
	<li>

		<p><a href="https://chat.openai.com/chat/69fd8de7-8302-43d5-ad2e-9d51fb558b7d#" target="_new">Company milestone reached</a>: We&#39;re proud to announce that we&#39;ve reached [milestone]! [More information and details about the milestone]</p>
	</li>
	<li>

		<p><a href="https://chat.openai.com/chat/69fd8de7-8302-43d5-ad2e-9d51fb558b7d#" target="_new">Upcoming event</a>: Don&#39;t miss out on our upcoming event [event name] on [date]! [More information and details about the event]</p>
	</li>
</ul>

<p>Keep checking back for the latest updates, and follow us on <a href="https://twitter.com/username" target="_new">Twitter</a> or <a href="https://facebook.com/username" target="_new">Facebook</a> for real-time updates.</p>
'

  	];
    view("welcome",$data);
  	
  }
}

// I hope this helps! Let me know if you have any further questions.

<header id="top">
	<style>
		a {
			text-decoration: underline;
			color: purple;
		}

		a:hover {
			text-decoration: none;
		}

		a:visited {
			color: blue;
		}

		header a {
			text-decoration: none;
		}

		header a:hover,
		header a:focus {
			text-decoration: underline;
		}

		#top nav ul {
			list-style: none;
			padding: 0;
		}

		#top nav ul li {
			padding-bottom: 0.25rem;
		}

		#top nav ul a {
			text-decoration: none;
		}

		#top nav ul a:hover,
		#top nav ul a:focus {
			text-decoration: underline;
		}

		#top nav ul a.active {
			font-weight: bold;
			text-decoration: underline;
		}

		/* indicate class related items */
		#top nav ul li.workshop,
		#top nav ul li.exhibition,
		#top nav ul li.talk,
		#top nav ul li.lecture {
			font-style: italic;
		}

		#top nav ul li abbr {
			cursor: help;
			font-style: normal;
			font-family: monospace;
		}

		/* year separator */
		#top nav ul li .date {
			display: inline-block;
			margin-top: 1em;
			font-family: monospace;
		}
	</style>
	<center>
		<pre>



NMMMMM MMMMMMMMMMMMMMM  MMMMMMMMMMMMMMMMy:    
NMMMMM MMMMMMMMMMMMMMM  MMMMMMMMMMMMMMMMMMy:  
NMMMMM MMNNNNNNNMMMMMM  MMMMMMMMMMMMMMMMMMMMy:
NMMMMM          MMMMMM  MMMMMM +dMMMMM  MMMMMM
NMMMMM          MMMMMM  MMMMMM  .+dMMM  MMMMMM
NMMMMM          MMMMMM  MMMMMM    .+MM  MMMMMM
/dMMMM          MMMMMM  MMMMMM      ./  MMMMMM
  /dMM          MMMMMM  MMMMMM          MMMMMM
    /d          MMMMMM  MMMMMM          MMMMMM

            ~ ~ New Media Kassel ~ ~            


		</pre>
		<nav>
			<ul>
				<!-- Todo: add active link state -->
				<li><a href="/" rel="home">Home</a></li>
				<li><a href="/we">About the Class</a></li>
			</ul>

			<ul>
				<li><a href="http://newsletter.newmediakassel.com" target="_blank">Subscribe to our Newsletter</a></li>
				<li><a href="http://calendar.newmediakassel.com" target="_blank">See our Events in the Calendar</a></li>
				<li><a href="https://twitter.com/nmkhk" target="_blank">Follow us on Twitter</a></li>
			</ul>

			<ul>
				{% block navigation %}
				
					{% for Link in Navigation %}
						<li{% if Link.Type %} class="{{ Link.Type|lower|e('html_attr') }}"{% endif %}>
							{% if Link.IsDate %}
								~ <strong class="date" id="{{ Link.Title }}">{{ Link.Title }}</strong> ~
							{% elseif Link.Url %}
								<a href="{{ Link.Url }}" rel="bookmark" class="{% if Link.IsActive %}active{% endif %}">
									{{ Link.Title }}
								</a>

								{% if Link.Type and Link.Type|lower != "project" %}
									<abbr title="{{ Link.Type }}">
										[{{ Link.Type|first|upper }}]
									</abbr>
								{% endif %}
							{% else %}
								{{ Link.Title }}
							{% endif %}
						</li>
					{% endfor %}

				{% endblock %}
			</ul>
		</nav>

		<pre>


~ ~ * ~ x o x ~ * ~ ~


		</pre>
	</center>
</header>

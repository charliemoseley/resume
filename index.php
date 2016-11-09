<!DOCTYPE html>
<html>
<head>
  <title>Charlie Moseley Resume</title>
  <link href="http://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="pure-g">
  <div class="pure-u-7-12">
    <header id="name">
      <h1>Charlie Moseley</h1>
      <span>web *splat / full stack engineer</span>
    </header>

    <section id="websplat">
<pre>def web(*splat)
  splat = :developer if splat.empty?
  splat.map do |role|
    { "Can you be a web #{role} for us?" => true }
  end
end</pre>
    </section>

    <section id="introduction">
      <h2>introduction</h2>
      <p>
        "When you frequent being with a companies of less than five, you do everything asked of you, and frequently much more."
      </p>
      <br />
      <p>
        Hello, my name is Charlie Moseley.  Thanks for taking the time to read my slightly unconventional resume. I hope it allows you to get some insight into my work history and assist you in whatever decision making process you may have.<br />
        <br />
        Historically, I have had a preference for joining very early stage startups. This focus has led me to "specialize" in being exceptionally versatile. Frequently put into positions where I wear many hats, I have become competent in most components of building successful web applications - both technical and not.<br />
        <br />
        As an engineer, I primarily focus on web application development in the Ruby stack and enjoy analyzing and breaking down complex requirements into easily digestible engineering goals. In recent years, I've taken a keen interest and focus in API design and development from my experiences at API Science. Outside of engineering, I have also participated in a fair amount of product management, team management, hiring, interface design, customer relations and evangelism.
      </p>
    </section>
  </div>
  <div class="pure-u-1-12"></div>
  <div id="intro-right" class="pure-u-1-3">
    <section id="contact">
      <a href="mailto:charlie@robopengu.in">
        charlie@robopengu.in
      </a><br />
      <a href="http://github.com/charliemoseley">
        github.com/charliemoseley
      </a><br />
      <a href="http://linkedin.com/in/charlesmoseley">
        linkedin.com/in/charlesmoseley
      </a>
    </section>

    <section class="skills">
      <h2>technical</h2>
      <ul>
        <li><strong>- web application development</strong></li>
        <li>ruby / rails / javascript / angular / ember</li>
        <li>postgres / redis / neo4j</li>
        <li>html5 / css3 / coffeescript / sass</li>
        <li><strong>- infrastructor</strong></li>
        <li>aws / heroku</li>
        <li>mri / rubinius / jruby / eventmachine</li>
        <li>puma / torquebox / goliath</li>
        <li><strong>- mobile</strong></li>
        <li>iOS / swift</li>
        <li><strong>- legacy</strong></li=>
        <li>php / codeigniter / cakephp</li>
      </ul>
    </section>

    <section class="skills">
      <h2>process</h2>
      <ul>
        <li>full stack development</li>
        <li>TDD</li>
        <li>pair programming / teaching</li>
        <li>end to end architecture design</li>
        <li>domain modeling</li>
        <li>cost benefit analysis</li>
        <li>decoupled and api driven design</li>
        <li>layout/ux/design work</li>
        <li>recruiting</li>
        <li>being awesome to be around</li>
      </ul>
    </section>
  </div>
</div>

<div class="pure-g">
  <div class="pure-u-1">
    <hr />
    <h2>past work</h2>

    <section class="experience">
      <h3>
        <span><a href="https://www.doughbies.com">Doughbies</a></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Lead Developer
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        July 2015 - Current
      </h3>
      <p>
        <a href="https://www.doughbies.com">Doughbies</a> is an on-demand food delivery service specializing in delivering cookies and treats to the Bay Area in under 20 minutes and across the US overnight.  Through the usage of great tasting products, mobile warehouse concepts, and smart logistics, Doughbies is one of the fastest growing and profitable food delivery services in the Bay Area.
      </p>
      <ul>
        <li>Took a simplistic Ember+Rails application with a single client and region model and expanded it to support multiple clients (iOS and third party API integrations) and a multi-region model to support both hyper local delivers and nationwide delivery.</li>
        <li>Assisted in the development of the iOS app in both application coding and implementation of mobile optimized API calls.</li>
        <li>Analyzed, designed, and implemented a dispatch application with deep two way integration with Onfleet to replace a laborious, complex and error prone spreadsheet system.  This required discussions with all the stakeholders, analysis of the existing systems, and proposing various design mocks to find a an optimal system.  After implementation and iteration was complete, the new application allowed the company to increase dispatch volume by 2.5x without having to hire more staff.</li>
        <li>Created abstract concepts such as Order Status that would analyze various internal and third party system to determine whether an order was going to become an issue and attempt to mitigate or notify a customer service rep before it became an actually customer complaint.</li>
        <li>Built out the entirety of the admin and reporting systems, shipping integrations, and infrastructure.</li>
        <li>Hired and managed the development team of three across three different timezones.</li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="https://www.apiscience.com">API Science</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Lead Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        September 2013 - August 2015
      </h3>
      <p>
        <a href="https://www.apiscience.com">API Science</a> intended to modernize how production API monitoring by building powerful tools for production API monitoring and testing. Running a distributed SaaS-based monitoring architecture on AWS and coordinated across multiple regions, the Rails-based core integrated with other components (ex: JS V8) to implement advanced features such multi-step monitoring, scriptable validations and Slack/PagerDuty support.
      </p>
      <ul>
        <li>Worked with the CEO to help refine and develop the business goals to create API Science.</li>
        <li>Designed and implemented the majority of the current API Science application from database schemas to user design and everything between.</li>
        <li>Designed Ruby "runners" that could understand user submitted JavaScript to allow custom validation support and basic control and logic support for our API test.</li>
        <li>Completed a full Stripe integration supporting subscriptions, mult-tiered pricing, free trial support, and webhook integration.</li>
        <li>Created a generic alerting engine that allows us to notify users when issues occur.  With simple adapter classes, alerts from the system could easily be delivered over various mediums; email, webhook, Slack, and PagerDuty currently supported.</li>
        <li>Created optimized Ruby runners that could run 2000+ API calls in under one minute via a single AWS instance by optimizing AWS hardware, ruby implementation, and code.</li>
        <li>Designed, developed, and documented the <a href="https://developer.apiscience.com/">API Science API</a>.</li>
        <li>Pretty much built everything myself.</li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="http://experiment.com">Microryza / Experiment (YC W13)</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Lead Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Dec 2012 - April 2013
      </h3>
      <p>
        <a href="http://experiment.com">Microryza (YC W13)</a> (now known as Experiment) was a YCombinator Winter 2013 startup focused on crowdfunding science and early stage / risky research.  When my
        friends Cindy and Denny, the founders of Microryza, found out they had been accepted, they invited me to join the
        program to provide the technical expertise to make it through YC.  Excited about the opportunity and challenge, I packed my
        entire life into a convertible and drove from Seattle to Palo Alto on Christmas day.  It was one of the most fun,
        challenging, and strenuous experiences I have ever partaken.
      </p>
      <ul>
        <li>
          Worked in a rapidly changing and demanding environment to build an awesome product with a large growth curve in
          only four months.
        </li>
        <li>
          Took a questionably functioning Rails MVP and rewrote the internals into a standards compliant and well tested
          application while juggling a full site redesign and customer interaction testing.  This was all done with staggered
          deploys to push new code out as soon as possible without breaking any other major functionality of the site.
        </li>
        <li>
          Optimized the Rails stack to happily survive a front page Reddit posting on three Heroku dynos.
          Thank you rubinius, puma, memcached, and keeping a low Rails memory footprint for your hard work.
        </li>
        <li>
          After completion of the program, was offered official role as CTO with large equity, but turned
          down due to personal reasons.
        </li>
        <li>
          Proved ability to consume inhuman amounts of caffeine without poisoning to survive YC.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="http://hark.com">Hark</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Developer / System Architect&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Jan 2012 - Dec 2012
      </h3>
      <p>
        <a href="http://hark.com">Hark</a> was an audio platform startup, similar to Soundcloud, that desired to be the central repository to any and all
        audio bytes and quote content no matter the source.  With licenses to many major movie studios, the AP, and many other
        major companies, Hark had accumulated a library of many million audio bytes at it's peak.  Unfortunately, due to
        advertising and licensing complications, the company had to close it's doors and only a small fragment of it's past
        library is still available.<br />
        <br />
        Brought in as the third engineer in a time of rapid growth, I was primarily tasked with building a modular
        service stack to replace the monolithic Rails application that had become cryptic and unmaintainable.
        In addition, I also contributed to UX design, recruiting, seo analysis/optimization, and many other roles whenever
        required.
      </p>
      <ul>
        <li>
          Designed and developed three of a five component system that became the foundation of the site's
          new application architecture that averaged 30k+ concurrent visitors.
        </li>
        <li>
          Constructed a modeless Sinatra service to handle rendering of the front end.  All data was consumed as JSON
          via internal API calls to our relational service.  Blazing fast due to never having to do any work besides basic
          templating logic and rendering JSON.
        </li>
        <li>
          Constructed a relationships service that modeled the complex relationships between sound bytes and their meta
          information in a Neo4j graph database.  Exposed an easy to understand API to request and create data with said
          service.  Performance tuned by utilizing Goliath, JRuby, and aggressive memcaching to allow this service to only
          require one primary vps (and a fail over) to handle the load.
        </li>
        <li>
          Constructed a data analysis and aggregation service to analyze the legacy database and pull in correct content and
          relationships to be properly modeled in the new relationships service.  Also constructed an interim state for the
          data and a dashboard for the content team to review and update the data before it was pushed into the relationship
          service.
        </li>
        <li>
          Juggled front end coding, recruiting, assisting/training for the intern program, converting the office into
          a Nerf Counterstrike battlefield, ect, while doing above tasks.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="http://www.performanceradiator.com/">Performance Radiator</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Developer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        2009 - 2010
      </h3>
      <p>
        <a href="http://www.performanceradiator.com/">Performance Radiator</a> is one of the largest aftermarket radiator distributors in the world.  Faced with an old and
        buggy mission critical console application (connected to a Btrieve database) that was becoming more and more
        unwieldy by the day, I was brought on to provide expertise in building out a modern web based intranet software to
        replace the legacy app.  Equipped with PHP, CodeIgniter, jQuery, and a MySQL, our three man team essentially
        launched Performance Radiator's internal tools 20 years into the modern times.
      </p>
      <ul>
        <li>
          Worked on an intranet system to manage sales, representative, inventory, pricing, and logistic management of one
          of the largest radiator distributors in the world.
        </li>
        <li>
          Played an integral role in both the design and development of said intranet system including architecture choices,
          code structure, and practices.
        </li>
        <li>
          Introduced good engineering practices such as version control (git) and redundant software/hardware setups to a
          company without much engineering experience.
        </li>
        <li>
          Developed a multi platform system that utilized Linux, Windows Server, MySQL, MSSQL, MongoDB, Btrieve SQL, and
          Apache harmoniously so that new systems could be developed on a modern web platform without breaking support for
          existing legacy applications.
        </li>
        <li>
          Cooked some of the most popular food for the monthly company potluck.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="http://fiveultimate.com">Five Ultimate</a> / <a href="http://fivebamboo.com">Five Bamboo</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Technology Consultant / Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        2008 - 2012
      </h3>
      <p>
        <a href="http://fiveultimate.com">Five Ultimate</a> and <a href="http://fivebamboo.com">Five Bamboo</a> are a pair of apparel companies specializing in Ultimate Frisbee and ultra clean
        bamboo apparel.  Having met the five siblings that run the two companies many years ago through a friend, I provided
        them technical consulting for many years; eventually training one of their internal employees to be able to take
        over my role when I did not have enough bandwidth to meet their growing needs.
      </p>
      <ul>
        <li>
          Developed and maintained the entire ecosystem of two well-trafficked online stores from code
          to product logistics cycle and everything in-between.
        </li>
        <li>
          Created process that combined personnel, hardware, off the shelf software, custom code, and procedures to mostly
          automate the process of a sale and book keeping.
        </li>
        <li>
          Organized and executed a multi week large scale data migration to new software packages and hosting provider
          while keeping downtime to less then a couple hours over the entire duration.
        </li>
        <li>
          Created custom reports to analyze online store data and trends across multiple data points to make evaluations
          on how successful different on-site location marketing was.
        </li>
        <li>
          As needed, worked in roles such as UX/layout, design, SEO, marketing, training, tech support, manual labor,
          resident nerd prankster, dog walker, and many others.
        </li>
      </ul>
    </section>

    <hr />
    <h2>personal / community work</h2>

    <section class="experience">
      <h3>
        <span><a href="http://emotejiji.herokuapp.com/">emotejiji.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        2011-2014 (development currently in hiatus)
      </h3>
      <p>
        <a href="http://emotejiji.herokuapp.com/">Emotejiji</a> is a emoticon / text face tagging and search site.  Being a purveyor of using text based emoticons, I had a need to easily find and categorize emoticons I discovered.  Looking for a good excuse to dabble in Angular, emotejiji was born.<br />
      </p>
      <ul>
        <li>
          Fully API driven application utilize Grape API Framework and Angular.js to power the back and front ends.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3><span>Teaching</span></h3>
      <p>
        I have a passion for teaching and bringing more people into the craft of web development.  I teach at
        <a href="http://workshops.railsbridge.org/">Railsbridge</a> and <a href="https://generalassemb.ly/">General Assembly</a> whenever I can and have provided numerous free
        tutoring sessions to students I meet through Railsbridge/Meetups/life.  Where there is a desire to learn,
        as long as availability checks out, I lend my expertise to help mentor a new generation of web developers.
      </p>
    </section>

    <!--
    <p id="pdf-version">
      Originally a web document resume exported as a PDF.  The web version can be viewed at:<br />
      <a href="http://resume.robopengu.in">http://resume.robopengu.in</a>
    </p>
    -->
  </div>
</div>

</body>
</html>
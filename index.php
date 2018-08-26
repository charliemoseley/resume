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
      <span>full stack engineer / api specialist</span>
    </header>

    <section id="introduction">
      <h2>introduction</h2>
      <p>
        Hello, my name is Charlie Moseley.  Thank you for taking time to read this resume and hopefully it will help any considerations you may have.<br />
        <br />
        I am a full stack web developer with a focus in the Ruby ecosystem.  My experience in early stage startups has allowed me to develop a large and versatile skillset. Put into positions where I wore many hats, I have become competent in most components of building successful web applications - both technical and not.<br />
        <br />
        As an engineer, I was frequently tasked with working with the business side to analyzing and breaking down complex requirements into easily digestible engineering goals and make sure both business and engineering concerns were met.  Furthermore, I also contributed to many other non-engineering related tasks such as product development, team management, hiring, interface design, customer relations and evangelism.<br />
        <br />
        Since my time at API Science, I developed a passion for well designed APIs and have put a great amount of focus in studying and implementing good API patterns.
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
        <li>torquebox / goliath</li>
        <li><strong>- mobile</strong></li>
        <li>iOS / swift</li>
        <li><strong>- api</strong></li>
        <li>design / integration / graphhopper / google</li>
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
        <li>layout/ux/design</li>
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
        Head of Engineering
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        July 2015 - current
      </h3>
      <p>
        <a href="https://www.doughbies.com">Doughbies</a> is an on-demand food delivery service specializing in delivering cookies and treats to the Bay Area in under 20 minutes and across the US overnight.  Through the usage of great tasting products, mobile warehouse concepts, and smart logistics, Doughbies was one of the fastest growing food delivery services in the Bay Area.
      </p>
      <ul>
        <li>Took a simplistic Ember+Rails application with a single client and region model and expanded it to support multiple clients (iOS and third party API integrations) and a multi-region model to support both hyper local delivers and nationwide delivery.</li>
        <li>Assisted in the development of the iOS app in both application coding and implementation of mobile optimized API calls.</li>
        <li>Created abstract concepts such as Order Status that would analyze various internal and third party system to determine whether an order was going to become an issue and attempt to mitigate or notify a customer service rep before it became an actually customer complaint.</li>
        <li>Built out the entirety of the admin and reporting systems, shipping integrations, and infrastructure.</li>
        <li>Analyzed, designed, and implemented a dispatch application with deep two way integration with Onfleet to replace a laborious, complex and error prone spreadsheet system.  This required discussions with all the stakeholders, analysis of the existing systems, and proposing various design mocks to find a an optimal system.  After implementation and iteration was complete, the new application allowed the company to increase dispatch volume by 2.5x without having to hire more staff.</li>
        <li>Created a complex logistics system that utilized three different APIs (GraphHopper, Google Distant Matrix, and Onfleet) and our own system to progromatically determine optimal routes for our courier fleet.  At it's peak utilization, it planned routes for over 50 couriers to deliver more than 1500 orders in a six hour period with an on-time success rate of over 95%.</li>
        <li>Hired and managed the development team of three across three different timezones.</li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="https://www.apiscience.com">API Science</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Lead Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        September 2013 - July 2015
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

    <section class="experience" style="margin-bottom: 20px;">
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
   
    <p id="pdf-version">
      Exported as a PDF; the web version can be viewed at:<br />
      <a href="http://resume.robopengu.in">http://resume.robopengu.in</a>
    </p>
  </div>
</div>

</body>
</html>
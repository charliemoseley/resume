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
      <span>web *splat</span>
    </header>

    <section id="websplat">
<pre>def web(*splat)
  splat = [:developer] if splat.empty?
  splat.map do |role|
    { "Can you be a web #{role} for us?:" => true }
  end
end</pre>
    </section>

    <section id="introduction">
      <h2>introduction</h2>
      <p>
        I like <em class="emphasize">awesome</em>.  Specifically making people's lives more awesome.<br />
        <br />
        Typically this is achieved through building awesome things or teaching people to build their own awesome
        things.  However, I am not partial to these two methods, so if you have ideas on how I can create more
        awesome in the world, <a href="mailto:charlie@robopengu.in">please get in touch</a>.<br />
        <br />
        Professionally, some call me a developer, some a system architect, for others a project manager, and even too a few: wrangler
        of the bad bits.  As someone who has primarily been brought in to companies when their engineering teams could
        be counted on one hand, I've developed into a jack of all trades generalist who excels in breaking down complex requirements into
        easily digestible engineering goals.  Whatever the role required, either I will have had some experience in it before
        or will rapidly learn whatever is necessary to complete the task at hand.<br />
        <br />
        Oh yeah, I'm also a pretty awesome and funny dude to be around too :3.
        <!--
        Enabling awesomeness is not easy and thus I partake in the mythic arts of web development. After years of harsh
        training [on site] under harsher master and with some deep medidated introspection, I have found myself to one
        who excels in breaking down complex and changing requirements into viable solutions no matter the fearsome
        opponents presented. Equipped with a large expanse of tools to utilize at my disposal, I tackle opponents with
        a attention to detail and ability to determine which tool most effectively meets the challenge at hand.
        -->
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
      </a><br />
      425-281-0769
    </section>

    <section class="skills">
      <h2>technical</h2>
      <ul>
        <li>ruby / rails / sinatra / grape</li>
        <li>rubinius / puma / jruby / torquebox / goliath</li>
        <li>postgres / redis / neo4j / memcached</li>
        <li>html5 / haml / slim / css3 / scss</li>
        <li>javascript / coffeescript / jquery / underscore</li>
        <li>angular.js</li>
        <li>php / codeigniter / cakephp</li>
      </ul>
    </section>

    <section class="skills">
      <h2>process</h2>
      <ul>
        <li>back and front end development</li>
        <li>TDD</li>
        <li>pair programming / teaching</li>
        <li>end to end architecture design</li>
        <li>domain modeling</li>
        <li>cost benefit analysis</li>
        <li>decoupled and api driven design</li>
        <li>backup ux/design work</li>
        <li>recruiting</li>
        <li>being awesome to be around</li>
      </ul>
    </section>

    <!--
    <section>
      <h2>community</h2>
      <ul>
        <li>frequent teacher at Railsbridge</li>
        <li>free private tutoring whenever time is available</li>
        <li>maintains open source codebases for examples</li>
        <li>actively working on tutorials and curriculums</li>
        <li>frequent attender of hacknights to provide help</li>
      </ul>
    </section
    -->
  </div>
</div>

<div class="pure-g">
  <div class="pure-u-1">
    <hr />
    <h2>past work</h2>

    <section class="experience">
      <h3>
        <span><a href="http://microryza.com">Microryza (YC W13)</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Developer #1 / Acting CTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Dec 2012 - April 2013
      </h3>
      <p>
        <a href="http://microryza.com">Microryza (YC W13)</a> is a YCombinator Winter 2013 startup focused on crowdfunding science and early stage / risky research.  When my
        friends Cindy and Denny, the founders of Microryza, found out they had been accepted, they invited me to join the
        program to shape the technical destiny of their company.  Excited about the opportunity and challenge, I packed my
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
          Proved ability to consume inhuman amounts of caffenne without poisoning to survive YC.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="http://hark.com">Hark</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Developer #3 / System Architect&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Jan 2012 - Dec 2012
      </h3>
      <p>
        <a href="http://hark.com">Hark</a> was an audio platform startup, similar to Soundcloud, that desired to be the central repository to any and all
        audio bytes and quote content no matter the source.  With licenses to many major movie studios, the AP, and many other
        major companies, Hark had accumulated a library of many million audio bytes at it's peak.  Unfortunately, due to
        adveristing and licensing complications, the company had to close it's doors and only a small fragment of it's past
        library is still availabe.<br />
        <br />
        Brought in as the third engineer in a time of rapid growth, I was primarly tasked with building a modular
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
          Constructed a data analysis and aggegration service to analyze the legacy database and pull in correct content and
          relationships to be properly modeled in the new relationships service.  Also constructed an interm state for the
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
        Developer #2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        2009 - 2010
      </h3>
      <p>
        <a href="http://www.performanceradiator.com/">Performance Radiator</a> is one of the largest aftermarket radiator distributors in the world.  Faced with an old and
        buggy mission critical console application (connected to a Btrieve database) that was becoming more and more
        unweildy by the day, I was brought on to provide expertise in building out a modern web based intranet software to
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
          Introduced good engineering practices such as version control (git) and redudant software/hardware setups to a
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
        Consultant / Sole Developer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
        <span><a href="http://emotejiji.com">emotejiji.com</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        2011-ongoing
      </h3>
      <p>
        <a href="http://emotejiji.com">Emotejiji</a> is a emoticon / text face tagging and search site.  Being a purveyor of emoticons all over my text messages,
        Facebook, and emails, I had a need to easily find and categorize the emoticons I found and used on the web.  Itching
        my own scratch, emotejiji was born.  Having been running for more than a year and a half now, it has become a
        popular resource for people online looking for emoticons.<br />
      </p>
      <ul>
        <li>
          Fully API driven application utilize Grape API Framework and Angular.js to power the back and front ends.
        </li>
        <li>
          Maintain the codebase as an open source project to be used into as an example for people looking into how to integrate
          Angular.js into Ruby/Rails/Grape.
        </li>
        <li>
          Actively working on a deep dive tutorial into building API backed applications using Ruby and Angular by
          recreating emotejiji.com.  Embedded throughout the codebase is many notes on gotchas or complications I ran into
          while developing emotejiji.
        </li>
        <li>
          Actively working on an iOS client utilizing RubyMotion.
        </li>
      </ul>
    </section>

    <section class="experience">
      <h3>
        <span><a href="https://github.com/charliemoseley/eventbox_spike1">eventbox.io spike</a></span>
      </h3>
      <p>
        An <a href="https://github.com/charliemoseley/eventbox_spike1">experiment</a> into the feasibility to build a generic syncing service to take event (or other data) from a source
        and output to a desired location (ex: a calendar or API endpoint) and maintain a two way sync between those services.
        Essentially a recreation of Google Now or Cue but API driven and not limited to the certain data sets they specify.
        Redis Pub/Sub and Sidekiq background workers where employed to manage subscription states and keep everything in sync.<br />
        <br />
        Due to the overall complexity and verbosity of the GData/GCalendar gem and the neglected Meetup.com gem, the start of
        a generic <a href="https://github.com/charliemoseley/eventbox_spike1/blob/master/lib/echidna/echidna.rb">OAuth2 API
        consumer gem</a> and a <a href="https://github.com/charliemoseley/eventbox_spike1/tree/master/lib/gcalendar">Google
        Calendar API gem</a> where started.  At the completion of the spike, a two way binding between Meetup
        and Google Calendar was working for multiple users accounts.
      </p>
    </section>

    <section class="experience">
      <h3><span>Teaching</span></h3>
      <p>
        I have a passion for teaching and bringing more people into the craft of web development.  I teach at
        <a href="http://workshops.railsbridge.org/">Railsbridge</a> whenever I can and have provided numerous free
        tutoring sessions to students I meet through Railsbridge/Meetups/life.  Where there is a desire and will to learn,
        as long as availability checks out, I lend my expertise to help mentor a new generation of web developers.  Additionally,
        I contributor to the Railsbridge curriculum and docs to help keep everything up to date and allow
        other teachers/teaching groups out there to use the resources Railsbridge has created.
      </p>
    </section>
  </div>
</div>

</body>
</html>
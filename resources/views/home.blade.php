@extends('frontend.master')
@section('title', 'Home')
@section('content')
<aside class="menu" id="menu">
    <div class="logo">

      <!-- css -->
      
      <!-- Logo image-->
    <div class="logo">
    <img src="{{ asset('assets/images/LOGO1.jpeg') }}" alt="Chelsea Logo">
    <span>Chelsea Nicole Mukhanyi</span>
</div>
      <!-- Logo name-->
      <span>Chelsea Nicole Mukhanyi</span></div>
    <!-- Mobile Navigation-->
    <a href="index.html.menu1" class="menu-link"></a>
    <!-- Left Navigation-->
    <nav id="menu1" role="navigation"> <a href="{{route('home')}}"><span id="link_introduction" class="active">Home</span></a>
        <a href="{{route('about')}}"><span id="link_about">About</span></a>
        <a href="{{route('skills')}}"><span id="link_skills">Skills</span></a>
        <a href="{{route('experience')}}"><span id="link_experience">Experience</span></a>
         <a href="{{route('education')}}"><span id="link_education">Education</span></a>
<a href="{{route('contact')}}"><span id="link_contact">Contact</span></a><br>

  <a href="https://www.linkedin.com/in/chelsea-nicole-354420240" target="_blank"><i class="fa fa-linkedin"></i></a>
   <a href="https://github.com/Chelly2003" target="_blank"><i class="fa fa-github"></i></a>

<br>
  </aside>
  <!-- Go to top link for mobile device -->
  <a href="index.html.menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper">

      <!-- Introduction -->
      <article class="content introduction noscroll" id="chapterintroduction">
        <div class="inner">
          <h2><span>HEllo, I'm</span><br>
            Chelsea Nicole Mukhanyi</h2>
          <span class="title">IT Support / Junior Software Developer</span> </div>
        <div id="owl-demo" class="owl-carousel">
          <div class="item"><img src="{{ asset('assets/images/hacker2.jpg') }}"  alt="" style="height: 1250px"/></div>
          <div class="item"><img src="{{ asset('assets/images/chelsea.jpeg') }}" style="height: 1250px" /></div>
          <div class="item"><img src="{{ asset('assets/images/computer.jpg') }}"alt="" style="height: 1250px" /></div>
        </div>
      </article>

      <!-- About -->
      <article class="content about white-bg" id="chapterabout">
        <div class="inner">
          <h2>About</h2>

          <div class="title-divider"></div>
          <div class="about-con">
            <ul>
              <li>Name: Chelsea Nicole Mukhanyi</li>
              <li>Email: <a href="mailto:chelseamukhanyi@gmail.com">chelseamukhanyi@gmail.com</a></li>
              <li>Address: PO Box 00100 Ongata Rongai, Magadi Road, KENYA.</li>
              <li>Nationality: Kenyan</li>
            </ul>
            <h3>Professional Profile</h3>
                        <p>I am a Business Information Technology student at the Cooperative University of Kenya with a diploma (credit) in the same field. I have experience in front-end development (HTML, CSS, JavaScript), backend development with PHP and Laravel, and hold Cisco certifications in Introduction to Cybersecurity and Ethical Hacking. I’ve worked as a social media manager for Shiftech Africa, driving brand engagement, and completed a 4-month internship at NHIF Head Office where I gained hands-on IT support experience. I’m seeking opportunities to apply my skills in tech, cybersecurity, and digital strategy to help organizations grow.<br>
            </p>
             <a href="{{ asset('assets/resume.pdf') }}" download class="button">Download Resume</a>
<br>
           <img src="{{ asset('assets/images/signature.png') }}" class="signature" alt=""> </div>
        </div>
      </article>

   <!-- Skills -->
<article class="content skills gray-bg" id="chapterskills">
    <div class="inner">
        <h2>Skills</h2>
        <div class="title-divider"></div>

        <h3>Technical Skills & Expertise</h3>

        <p>
            I am passionate about building secure, efficient, and user-friendly technology solutions.
            My expertise spans software engineering, IT support, networking, and cybersecurity.
            I have hands-on experience developing responsive web applications using HTML, CSS,
            JavaScript, PHP, Laravel, and MySQL, as well as providing technical support for
            hardware, software, operating systems, and network-related issues. Through Cisco
            Networking Academy certifications, I have strengthened my knowledge of networking,
            ethical hacking, cybersecurity fundamentals, and Security Operations Center (SOC)
            concepts. I continuously expand my skills by working on real-world projects and
            staying up to date with emerging technologies and industry best practices.
        </p>

        <div class="skills-con">

            <div class="container-sub margin-top50">
                <div class="row">

                    <div class="col-6 margin-bottom50">
                        <div class="col-6">
                            <span class="chart" data-percent="85">
                                <span class="percent"></span>
                            </span>
                        </div>

                        <div class="col-6 chart-text">
                            <h4>Web Development</h4>
                            <p>Advanced</p>
                        </div>
                    </div>

                    <div class="col-6 margin-bottom50">
                        <div class="col-6">
                            <span class="chart" data-percent="80">
                                <span class="percent"></span>
                            </span>
                        </div>

                        <div class="col-6 chart-text">
                            <h4>PHP & Laravel</h4>
                            <p>Advanced</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="col-6">
                            <span class="chart" data-percent="45">
                                <span class="percent"></span>
                            </span>
                        </div>

                        <div class="col-6 chart-text">
                            <h4>Cybersecurity</h4>
                            <p>Beginner</p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="col-6">
                            <span class="chart" data-percent="85">
                                <span class="percent"></span>
                            </span>
                        </div>

                        <div class="col-6 chart-text">
                            <h4>IT Support</h4>
                            <p>Advanced</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="full-divider"></div>

            <div class="container-sub skill-list">
                <div class="row">

                    <h3>Technical Knowledge</h3>

                    <p>
                        I have practical knowledge in software engineering, IT support,
                        networking, and cybersecurity. My experience includes developing
                        web applications using Laravel and PHP, managing MySQL databases,
                        troubleshooting hardware and software, configuring Windows and Linux
                        systems, using Git for version control, and applying cybersecurity
                        principles to protect systems and data. I am committed to continuous
                        learning and keeping up with modern technologies and industry best practices.
                    </p>

                    <div class="col-4 margin-top10">
                        <ul>
                            <li>HTML5 & CSS3</li>
                            <li>JavaScript</li>
                            <li>PHP & Laravel</li>
                            <li>MySQL</li>
                        </ul>
                    </div>

                    <div class="col-4 margin-top10">
                        <ul>
                            <li>Git & GitHub</li>
                            <li>Linux (Kali)</li>
                            <li>Networking</li>
                            <li>Cybersecurity</li>
                        </ul>
                    </div>

                    <div class="col-4 margin-top10">
                        <ul>
                            <li>Windows Administration</li>
                            <li>Hardware Troubleshooting</li>
                            <li>Microsoft Office</li>
                            <li>Technical Support</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="full-divider"></div>

            <div class="container-sub">
                <div class="row">

                    <h3>Language Skills</h3>

                    <p>
                        I am fluent in English and Kiswahili, both written and spoken,
                        enabling effective communication in professional and multicultural
                        environments.My communication
                        abilities support technical documentation, customer support,
                        teamwork, and collaboration.
                    </p>

                    <div class="progressbar-main margin-top50">
                        <div class="progress-bar-description">
                            English - Fluent
                        </div>

                        <div id="progressBar" class="progress">
                            <div class="progress-value"></div>
                        </div>
                    </div>

                    <div class="progressbar-main margin-top40">
                        <div class="progress-bar-description">
                            Kiswahili - Fluent
                        </div>

                        <div id="progressBar2" class="progress">
                            <div class="progress-value"></div>
                        </div>
                    </div>

                   

                </div>
            </div>

        </div>
    </div>
</article>

      <!-- Experience -->
      <article class="content experience white-bg" id="chapterexperience">
        <div class="inner">
          <h2>Experience</h2>
          <div class="title-divider"></div>
          <h3>2 Years Experience!</h3>
          <p>I have hands-on experience in both IT and digital media roles. During my internship at NHIF, I provided technical support, including printer troubleshooting, software installation, and system maintenance. At Shiftech Africa, I worked as a social media manager, handling content creation, campaign planning, and online brand engagement. This dual exposure has helped me develop strong organizational, communication, and problem-solving skills,
             while deepening my understanding of business systems, tech support, and digital strategy.</p>
          <div class="experience-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-send-o"></i></div>
                    <div class="flot-left">
                      <h5>Shiftech Africa</h5>
                      <h4>SOftware Engineer</h4>
                      <span>2025-2026</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> As a software engineer, I have hands-on experience in both front-end and back-end development. I’ve worked with languages such as HTML, CSS, JavaScript, PHP, and SQL, and have built responsive websites and functional web applications using Laravel. My experience includes designing user interfaces, managing databases, and integrating systems to meet business requirements. I’m also familiar with version control (Git), troubleshooting, and deploying solutions that align with both user needs and technical goals. </div>
                </div>
                <div class="full-divider"></div>
                <div class="experience-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-briefcase"></i></div>
                    <div class="flot-left">
                      <h5>Shiftech Africa</h5>
                      <h4>Social Media Manager</h4>
                      <span>2025-2026</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> As a Social Media Manager, I create and manage digital content to build brand awareness and engage target audiences. I plan and schedule posts, analyze performance metrics, and develop strategies to improve online presence. I also handle audience interactions, run ad campaigns when needed, and
                    ensure that all content aligns with the brand’s voice and goals. </div>
                </div>
                <div class="full-divider"></div>


              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Education -->
      <article class="content education gray-bg" id="chaptereducation">
        <div class="inner">
          <h2>Education</h2>
          <div class="title-divider"></div>
          <h3>Just My Education</h3>
          <p>Completed a Bachelor's degree course in Business Information Technology at the Cooperative University of Kenya, awaiting graduation that is to be held in Dec 2026. I hold a Diploma in the same field from the same institution, where I graduated with credit. My education has provided me with a strong foundation in programming, database management, business systems, and IT support, as well as practical exposure through academic projects and internship experience.

</p>
          <div class="education-con">
            <div class="container-sub">
              <div class="full-divider"></div>
              <div class="row">
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Co-operative University of Kenya</h5>
                      <h4>Bachelor in Business Information Technology</h4>
                      <span>2023- 2026(anticipated graduation)</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Combines IT and business studies, equipping students with skills to design, develop, and manage information systems that support business operations. It covers programming, database management, cybersecurity, networking, e-commerce, business management, and IT project planning—preparing graduates to bridge the gap between technology and business strategy in modern organizations. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Cisco Networking Academy</h5>
                      <h4>Introduction to Cybersecurity</h4>
                      <span>Feb - March 2025</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Completed Cisco’s Introduction to Cybersecurity course, gaining a solid understanding of cybersecurity principles, online threats, data protection, and best practices for securing networks and systems. The course introduced key concepts such as cybercrime, cybersecurity laws, and the importance of ethical behavior in protecting digital information.

</div>
                </div>

                 <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Cisco Networking Academy</h5>
                      <h4>Networking Basics</h4>
                      <span>Feb - March 2026</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">   Completed Cisco's Networking Basics course, gaining practical knowledge of computer networking concepts including IP addressing, network devices, switching, routing, wireless networking, network troubleshooting, and the OSI and TCP/IP models. The course provided a strong foundation for designing, configuring, and maintaining modern computer networks.

</div>
                </div>

   <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Cisco Networking Academy</h5>
                      <h4>Cybersecurity Defense Analyst Career Path</h4>
                      <span>Feb - March 2026</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Completed Cisco's Cybersecurity Defense Analyst Career Path, developing skills in Security Operations Center (SOC) workflows, threat detection, incident response, log analysis, network monitoring, endpoint security, and Security Information and Event Management (SIEM) using Splunk. Prepared to identify, investigate, and respond to cybersecurity threats in enterprise environments.

</div>
                </div>

                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Cisco Networking Academy</h5>
                      <h4>Ethical Hacking Certificate</h4>
                      <span>March 2025 - April 2025</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top">Completed the Cisco Ethical Hacker course, gaining foundational knowledge in penetration testing, vulnerability scanning, and ethical hacking techniques used to identify and prevent cyber threats.

 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Pportfolio will be removed-->


      <!-- Contact -->
      <article class="content contact gray-bg" id="chaptercontact">
        <div class="inner">
          <h2>Contact</h2>
          <div class="title-divider"></div>
          <h3>Let's Keep In Touch</h3>
          <p>Feel free to reach out for collaboration, internship opportunities, or tech-related projects. I’m open to connecting with professionals and teams in the fields of IT, cybersecurity,
            software development, and digital strategy.</p>
          <div class="full-divider"></div>
          <div class="contact-con margin-top50">
            <div class="container-sub">
              <div class="row">
                <div class="contact-details">
                  <div class="col-6">
                    <div class="contact-text">
                      <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i></div>
                      <div class="flot-left"> <strong>Chelsea Nicole Mukhanyi</strong><br>
                        PO Box 00100 Magadi Road,<br>
                        Ongata Rongai, Kenya. </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                      <div class="flot-left"> <strong>Phone</strong><br>
                        +254-711212971 </div>
                    </div>
                    <div class="contact-text">
                      <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                      <div class="flot-left"> <strong>Email</strong><br>
                        <a href="mailto:no-reply@domain.com">chelseamukhanyi@gmail.com</a> </div>
                    </div>
                  </div>
                  <div class="col-6 m-margin-top30">
                   
                    <div class="contact-social margin-top30">
                      <a href="https://www.linkedin.com/in/chelsea-nicole-354420240" target="_blank"><i class="fa fa-linkedin"></i></a> 
                      <a href="https://github.com/Chelly2003" target="_blank"><i class="fa fa-github"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
<h3>SEND ME A MESSAGE</h3>
                     @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
               <form id="form1" name="form1" method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    <input name="name" type="text" id="name" placeholder="Your Name..." required/>
                    <input name="email" type="text" id="email" placeholder="Your Email..." required/>
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."required></textarea>
                    <input type="submit" name="button" id="button" value="Send"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>

      <!-- Introduction -->
      <article class="content introduction-end" id="chapterthankyou">
        <div class="inner">
          <div class="introduction-end-con margin-top50">
            <h3><strong>Chelsea Nicole Mukhanyi</strong></h3>
            <div id="rotate" class="rotate">
              <div><span>awesome.</span></div>
              <div><span>invincible.</span></div>
              <div><span>unbeatable.</span></div>
              <div><span>indestructible.</span></div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <!-- content-wrapper -->
  </div>
  <!-- content-scroller -->
</div>
@endsection

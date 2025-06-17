@extends('components.layouts.app')
@section('title', 'Home')
@section('content')
<aside class="menu" id="menu">
    <div class="logo">
      <!-- Logo image-->
      <img src="images/LOGO1.jpeg" width="140" height="140" alt=""/>
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
<!-- Portfolio route was removed-->
          <a href="{{route('contact')}}"><span id="link_contact">Contact</span></a>
<br>
     <a href="https://www.linkedin.com/in/chelsea-nicole-354420240" target="_blank"><i class="fa fa-linkedin"></i></a>

  </aside>
  <!-- Go to top link for mobile device -->
  <a href="index.html.menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper">



      <!-- About -->
      <article class="content about white-bg" id="chapterabout">
        <div class="inner">
          <h2>About</h2>
          <div class="title-divider"></div>
          <div class="about-con">
            <ul>
              <li>Name: Chelsea Nicole Mukhanyi</li>
              <li>Email: <a href="mailto:chelseamukhanyi@gmail">chelseamukhanyi@gmail</a></li>
              <li>Address: PO Box 00100 Ongata Rongai, Magadi Road, KENYA.</li>
              <li>Nationality: Kenyan</li>
            </ul>
            <h3>Professional Profile</h3>
                        <p>I am a Business Information Technology student at the Cooperative University of Kenya with a diploma (credit) in the same field. I have experience in front-end development (HTML, CSS, JavaScript), backend development with PHP and Laravel, and hold Cisco certifications in Introduction to Cybersecurity and Ethical Hacking. I’ve worked as a social media manager for Shiftech Africa, driving brand engagement, and completed a 4-month internship at NHIF Head Office where I gained hands-on IT support experience. I’m seeking opportunities to apply my skills in tech, cybersecurity, and digital strategy to help organizations grow.<br>
            </p>
           <a href="{{ asset('resume.pdf') }}" download class="button">Download Resume</a><br>
<img src="images/signature.png" class="signature" alt=""/> </div>
        </div>
      </article>

      <!-- Skills -->
      <article class="content skills gray-bg" id="chapterskills">
        <div class="inner">
          <h2>Skills</h2>
          <div class="title-divider"></div>
          <h3>Just My Awesome Skills</h3>
          <p>I have strong technical skills in front-end development using HTML, CSS,
            and JavaScript, as well as back-end development with PHP and Laravel.
            I'm proficient in MySQL for database management and have foundational
            knowledge in cybersecurity, having completed Cisco’s Introduction to Cybersecurity
             and Ethical Hacking courses, along with basic experience using Kali Linux.
             I also have hands-on IT support skills, including printer troubleshooting
             and general hardware/software maintenance gained during my internship at NHIF.
              In addition, I’m experienced in social media management, content creation, and
               brand engagement through my role at Shiftech Africa. I work well in team environments,
                communicate effectively, and bring strong problem-solving, time management, and
                 creative thinking to every project I take on.</p>
          <div class="skills-con">
            <div class="container-sub margin-top50">
              <div class="row">
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="75"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Cybersecurity Fundamentals </h4>
                    <p>Expert, 1 year</p>
                  </div>
                </div>
                <div class="col-6 margin-bottom50">
                  <div class="col-6"><span class="chart" data-percent="88"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>PHP & Laravel Development</h4>
                    <p>Advanced, 2 years</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="90"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Technical Expertise</h4>
                    <p>Expert, 2 years</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="col-6"><span class="chart" data-percent="96"><span class="percent"></span> </span></div>
                  <div class="col-6 chart-text">
                    <h4>Social Media Management</h4>
                    <p>Expert, 1 year</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub skill-list">
              <div class="row">
                <h3>Knowledge</h3>
                <p>I possess a strong foundation in front-end and back-end web development, with practical knowledge of HTML, CSS, JavaScript, PHP, and Laravel. I have a solid grasp of database management using MySQL and essential cybersecurity principles, supported by Cisco certifications in Introduction to Cybersecurity and Ethical Hacking. My knowledge extends to using Kali Linux for basic penetration testing and system analysis. I also understand digital branding, content strategy, and audience engagement, which I apply in my work as a social media manager. Additionally, I have practical IT support knowledge, including troubleshooting hardware, software, and printer issues gained during my internship at NHIF.</p>
                <div class="col-4 margin-top10">
                  <ul>
                    <li>Google Analythics & SEO</li>
                    <li>Install and Configure</li>
                    <li>E-commerce Platform</li>
                    <li>Web Usability</li>
                  </ul>
                </div>

                <div class="col-4 margin-top10">
                  <ul>
                    <li>Video Editing</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <h3>Language Skills</h3>
                <p>I am fluent in English and Kiswahili, both written and spoken,
                                    allowing me to communicate effectively in diverse professional
                                     settings. I also have basic Spanish and German skills and am currently
                                     working to improve my proficiency for broader communication in international
                                      or multicultural environments. My language strengths support clear documentation,
                                      professional correspondence, content creation, and effective teamwork.</p>
                <div class="progressbar-main margin-top50">
                  <div class="progress-bar-description">English Experienced</div>
                  <div id="progressBar" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">Spanish Basic</div>
                  <div id="progressBar2" class="progress">
                    <div class="progress-value"></div>
                  </div>
                </div>
                <div class="progressbar-main margin-top40">
                  <div class="progress-bar-description">German Basic</div>
                  <div id="progressBar3" class="progress">
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
                      <span>Currently Working</span> </div>
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
                      <span>Currently Working</span> </div>
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
          <p>I am currently pursuing a Bachelor's degree in Business Information Technology at the Cooperative University of Kenya, expected to graduate in 2026. I hold a Diploma in the same field from the same institution, where I graduated with credit. My education has provided me with a strong foundation in programming, database management, business systems, and IT support, as well as practical exposure through academic projects and internship experience.

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
                      <span>2023- 2026(anticipated)</span> </div>
                  </div>
                  <div class="col-6 margin-bottom50 margin-top50 no-margin-top"> Combines IT and business studies, equipping students with skills to design, develop, and manage information systems that support business operations. It covers programming, database management, cybersecurity, networking, e-commerce, business management, and IT project planning—preparing graduates to bridge the gap between technology and business strategy in modern organizations. </div>
                </div>
                <div class="full-divider"></div>
                <div class="education-details">
                  <div class="col-6 margin-bottom50 margin-top50">
                    <div class="col-3 icon-block"><i class="fa fa-laptop"></i></div>
                    <div class="flot-left">
                      <h5>Boston State University</h5>
                      <h4>Introduction to Cybersecurity</h4>
                      <span>2006 - 2007</span> </div>
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
                      <h4>Ethical Hacking Certificate</h4>
                      <span>Feb 2025 - March 2025</span> </div>
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
                    <h3>I'm also on Social Networks</h3>
                   I am active on several social platforms where I share insights on technology, cybersecurity, and digital creativity. These networks allow me to connect with like-minded professionals, stay updated on industry trends, and showcase my work. Engaging on social media has also helped me grow my skills in branding, communication, and content strategy.
                    <div class="contact-social margin-top30"><a href="https://www.linkedin.com/in/chelsea-nicole-354420240" target="_blank"><i class="fa fa-linkedin"></i></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="full-divider"></div>
            <div class="container-sub">
              <div class="row">
                <div class="contact-form">
                  <h3>Drop Me a Line</h3>
                    @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
                  <form  id="form1" name="form1" method="POST" >
                    @csrf
                    <input name="name" type="text" id="name" placeholder="Your Name..." />
                    <input name="email" type="text" id="email" placeholder="Your Email..." />
                    <textarea name="message" id="message" cols="45" rows="5" placeholder="Your Message..."></textarea>
                    <input type="submit" name="button" id="button" value="Send" >
                    <div id="successmsg" ></div>
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



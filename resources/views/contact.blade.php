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

          <a href="{{route('contact')}}"><span id="link_contact">Contact</span></a>
<br>
    <a href="https://www.linkedin.com/in/chelsea-nicole-354420240" target="_blank"><i class="fa fa-linkedin"></i></a>

  </aside>
  <!-- Go to top link for mobile device -->
  <a href="index.html.menu" class="totop-link">Go to the top</a>
  <div class="content-scroller">
    <div class="content-wrapper">



      <!-- Portfolio will be removed-->


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
                  <form id="form1" name="form1" method="POST" >
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

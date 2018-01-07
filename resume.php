<?php

  include('functions.php');
  include('db_connection.php');

?>

<!DOCTYPE html>
<html>
<title>MyPortfolio | Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

  <?php
    $sql = "SELECT * FROM description";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc())
      {
  
  ?>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="img/grad.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>Chirayu Patel</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Software Engineer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>New Jersey</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>chirayu9515@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>2015193984</p>
          <a class="w3-btn w3-blue w3-margin-bottom" href="https://www.linkedin.com/in/chirayu-patel-2a391a85" target="_blank">View my LinkedIn</a>
          <a class="w3-btn w3-red w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/" target="_blank">View my Portfolio</a>
          <a class="w3-btn w3-green w3-margin-bottom" href="https://github.com/chirayu1" target="_blank">View my GitHub</a>
          <a class="w3-btn w3-indigo w3-margin-bottom" href="ChirayuPatel_Resume2017.docx" download="ChirayuPatel_Resume2017.docx">Download Resume</a>
          
          <hr>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Top Skills</b></p>
          <p>HTML5</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Bootstrap</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>PHP & MySQL</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>JavaScript & jQuery</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Gujarati</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:85%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-pencil fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Objective</h2>
        <div class="w3-container">
          <p>BSCS graduate with a strong foundation in Web Development and Software Applications seeking an internship or an entry-level position in Software Engineering in which problem-solving and critical thinking skills can be utilized.</p>
        </div>
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-asterisk fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Skills</h2>
        <div class="w3-container">
          <div class="skill-badges">
            <button class="w3-btn w3-blue w3-margin-bottom">HTML5</button> 
            <button class="w3-btn w3-red w3-margin-bottom">CSS</button> 
            <button class="w3-btn w3-green w3-margin-bottom">JavaScript</button> 
            <button class="w3-btn w3-light-green w3-margin-bottom w3-text-white">jQuery</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">DOM</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">PHP</button> 
            <button class="w3-btn w3-dark-gray w3-margin-bottom">MySQL</button>
            <button class="w3-btn w3-teal w3-margin-bottom">AJAX</button>
            <button class="w3-btn w3-amber w3-margin-bottom">JSON</button>
            <button class="w3-btn w3-deep-purple w3-margin-bottom">CURL</button>
            <button class="w3-btn w3-indigo w3-margin-bottom">Bootstrap</button>
            <button class="w3-btn w3-pink w3-margin-bottom">AngularJS</button>
            <button class="w3-btn w3-yellow w3-margin-bottom">Python</button>
            <button class="w3-btn w3-green w3-margin-bottom">Java</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">Data Structures</button>
            <button class="w3-btn w3-teal w3-margin-bottom">C#</button>
            <button class="w3-btn w3-blue w3-margin-bottom">SQL</button>
            <button class="w3-btn w3-red w3-margin-bottom">C</button>
            <button class="w3-btn w3-brown w3-margin-bottom">C++</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">XHTML</button>
            <button class="w3-btn w3-blue w3-margin-bottom">Mathematics</button>
            <button class="w3-btn w3-amber w3-margin-bottom">Computer Architecture</button>
            <button class="w3-btn w3-deep-purple w3-margin-bottom">Assembly Language</button>
            <button class="w3-btn w3-cyan w3-margin-bottom w3-text-white">Computer Hardware</button>
            <button class="w3-btn w3-pink w3-margin-bottom">Bash</button>
            <button class="w3-btn w3-amber w3-margin-bottom">Linux</button>
            <button class="w3-btn w3-deep-orange w3-margin-bottom">RESTful API</button>
            <button class="w3-btn w3-green w3-margin-bottom">Android Development</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">XML</button>
            <button class="w3-btn w3-green w3-margin-bottom">Android Studio</button>
            <button class="w3-btn w3-blue w3-margin-bottom">Microsoft Word</button>
            <button class="w3-btn w3-green w3-margin-bottom">Microsoft Excel</button>
            <button class="w3-btn w3-red w3-margin-bottom">Microsoft PowerPoint</button>
            <button class="w3-btn w3-green w3-margin-bottom">GitHub</button>
            <button class="w3-btn w3-light-green w3-margin-bottom">Git</button>
            <button class="w3-btn w3-blue w3-margin-bottom">Windows</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">Management</button>
            <button class="w3-btn w3-amber w3-margin-bottom">Tutoring</button>
            <button class="w3-btn w3-red w3-margin-bottom">Organization</button>
            <button class="w3-btn w3-teal w3-margin-bottom">Customer Service</button>
            <button class="w3-btn w3-brown w3-margin-bottom">Communication</button>
          </div>
        </div>
      </div>


      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-folder fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Full-Stack Developer | MYPORTFOLIO</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Dec 2017 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Responsibilities</p>
          <ul>
            <li>Designed the entire project using HTML5, CSS3, and Bootstrap 4.</li>
            <li>Built a partial admin CMS to edit and update content.</li>
            <li>Implemented AngularJS for login validation.</li>
            <li>Used AJAX, jQuery, and JSON to encode and authenticate data instantly.</li>
            <li>Constructed PHP and MySQL for mostly Front-End and Database implementation.</li>
            <li>Created an online resume template using W3.CSS Framework</li>   
          </ul>
          <p>Tools</p>
          <div class="skill-badges">
            <button class="w3-btn w3-blue w3-margin-bottom">HTML5</button> 
            <button class="w3-btn w3-red w3-margin-bottom">CSS3</button> 
            <button class="w3-btn w3-green w3-margin-bottom">JavaScript</button>
            <button class="w3-btn w3-light-green w3-margin-bottom w3-text-white">jQuery</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">DOM</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">PHP</button> 
            <button class="w3-btn w3-dark-gray w3-margin-bottom">MySQL</button>
            <button class="w3-btn w3-teal w3-margin-bottom">AJAX</button>
            <button class="w3-btn w3-amber w3-margin-bottom">JSON</button>
            <button class="w3-btn w3-indigo w3-margin-bottom">Bootstrap 4</button>
            <button class="w3-btn w3-pink w3-margin-bottom">AngularJS</button>
          </div>
          <p>Project Links</p>
          <div class="project-links">
            <a class="w3-btn w3-blue w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/" target="_blank">Live Demo</a> 
            <a class="w3-btn w3-green w3-margin-bottom" href="https://github.com/chirayu1/myportfolio">View on GitHub</a> 
            <a class="w3-btn w3-teal w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/portfolio-images.php" target="_blank">Learn More</a> 
          </div> 
          <hr>
        </div>
                <div class="w3-container">
          <h5 class="w3-opacity"><b>Front-End Developer | NEW YORK'S FINEST PIZZA & SUBS</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2018 - Jan 2018</h6>
          <p>Responsibilities</p>
          <ul>
            <li>Implemented HTML5, CSS3, and Bootstrap 4 for Front-End User Interface.</li>
            <li>Constructed a Single Page Application with AngularJS.</li>
            <li>Created JSON data for menu items that can easily be retrieved using AngularJS.</li>
            <li>Added Google Maps for approximate location of the restaurant.</li>
            <li>Designed relative desktop to mobile layout using Bootstrap 4.</li>   
          </ul>
          <p>Tools</p>
          <div class="skill-badges">
            <button class="w3-btn w3-blue w3-margin-bottom">HTML5</button> 
            <button class="w3-btn w3-red w3-margin-bottom">CSS</button> 
            <button class="w3-btn w3-indigo w3-margin-bottom">Bootstrap 4</button>
            <button class="w3-btn w3-pink w3-margin-bottom">AngularJS</button>
            <button class="w3-btn w3-amber w3-margin-bottom">JSON</button>
            <button class="w3-btn w3-green w3-margin-bottom">Google Maps</button>
          </div>
          <p>Project Links</p>
          <div class="project-links">
            <a class="w3-btn w3-blue w3-margin-bottom" href="https://web.njit.edu/~cp262/pizza/" target="_blank">Live Demo</a> 
            <a class="w3-btn w3-green w3-margin-bottom" href="https://github.com/chirayu1/pizza" target="_blank">View on GitHub</a> 
            <a class="w3-btn w3-teal w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/pizza-images.php" target="_blank">Learn More</a> 
          </div> 
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Android Developer / Co-Project Manager | NJIT CAPSTONE PROJECT</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>May 2017 - Aug 2017</h6>
          <p>Responsibilities</p>
          <ul>
            <li>Designed layouts for the app using a Wireframe software.</li>
            <li>Implemented a database for user login and registration purposes.</li>
            <li>Assisted Project Manager with the required documentations.</li>
            <li>Helped other team members in the group developing the app.</li>
            <li>Troubleshooted Java/Android Studio code implementation.</li>
            <li>Tested the application’s features and functionalities.</li>
          </ul>
          <p>Tools</p>
          <div class="skill-badges">
            <button class="w3-btn w3-green w3-margin-bottom">Java</button>
            <button class="w3-btn w3-green w3-margin-bottom">Android Studio</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">XML</button>
            <button class="w3-btn w3-amber w3-margin-bottom">JSON</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">PHP</button> 
            <button class="w3-btn w3-dark-gray w3-margin-bottom">MySQL</button>
          </div>
          <p>Project Links</p>
          <div class="project-links">
            <a class="w3-btn w3-blue w3-margin-bottom" href="#">Live Demo</a> 
            <a class="w3-btn w3-green w3-margin-bottom" href="https://github.com/chirayu1/Animodules" target="_blank">View on GitHub</a> 
            <a class="w3-btn w3-teal w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/animodules-images.php" target="_blank">Learn More</a> 
          </div> 
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front-End Developer | NJIT SOFTWARE ENGINEERING PROJECT</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2017 - May 2017</h6>
          <p>Responsibilities</p>
          <ul>
            <li>Designed the home page, student portal, and teacher portal using HTML and CSS.</li>
            <li>Created a login system and allowed user to input valid credentials to access their portal.</li>
            <li>Implemented AJAX and JavaScript for creating questions and exams functionalities. </li>
            <li>Secured CURL PHP to send data to the Back-End and receive data back using JSON. </li>
            <li>Constructed a MVC architecture for a friendly user interface and web applications.</li>
          </ul>
          <p>Tools</p>
          <div class="skill-badges">
            <button class="w3-btn w3-blue w3-margin-bottom">HTML</button> 
            <button class="w3-btn w3-red w3-margin-bottom">CSS</button> 
            <button class="w3-btn w3-green w3-margin-bottom">JavaScript</button>
            <button class="w3-btn w3-light-gray w3-margin-bottom">DOM</button>
            <button class="w3-btn w3-blue-gray w3-margin-bottom">PHP</button> 
            <button class="w3-btn w3-dark-gray w3-margin-bottom">MySQL</button>
            <button class="w3-btn w3-teal w3-margin-bottom">AJAX</button>
            <button class="w3-btn w3-amber w3-margin-bottom">JSON</button>
            <button class="w3-btn w3-deep-purple w3-margin-bottom">CURL</button>
          </div> 
          <p>Project Links</p>
          <div class="project-links">
            <a class="w3-btn w3-blue w3-margin-bottom" href="https://web.njit.edu/~cp262/rc" target="_blank">Live Demo</a> 
            <a class="w3-btn w3-green w3-margin-bottom" href="https://github.com/chirayu1/Senior-Project---Teacher-Student-Exam-Portal" target="_blank">View on GitHub</a> 
            <a class="w3-btn w3-teal w3-margin-bottom" href="https://web.njit.edu/~cp262/portfolio/portal-images.php" target="_blank">Learn More</a> 
          </div>
        </div>
        
      </div>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Crew Member / Dunkin Donuts</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2013 - Apr 2014</h6>
          <ul>
            <li>Consistently provided a superior customer experience and heartfelt hospitality.</li> 
            <li>Promptly handled guest concerns and complaints.</li>
            <li>Demonstrated integrity while interacting with team members and managers.</li>
            <li>Cross-trained and coordinated scheduling with team members to ensure streamlined service.</li>
            <li>Managed high standards of customer service during high-volume, fast-paced operations.</li>
          </ul>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>New Jersey Institute of Technology</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015 - 2017</h6>
          <p>Bachelor of Science Degree: Computer Science</p>
          <p>GPA: 3.0</p>
          <p>Awards: Dean's List - Fall 2016</p>
          <p>Relevant Computing Coursework:</p>
          <ul>
            <li>Data Structures (Java)</li>
            <li>Advanced Data Structures</li>
            <li>Software Engineering</li>
            <li>Programming Languages Concepts (C++)</li>
            <li>Intensive Programming in Linux (C, Bash)</li>
            <li>Cryptography & Internet Security </li>
            <li>Computer Networks</li>
            <li>Python Programming</li>
            <li>Computational Theory</li>
          </ul>
          <p>Relevant Mathematics Coursework:</p>
          <ul>
            <li>Differential Equations</li>
            <li>Probability and Statistics</li>
            <li>Discrete Mathematics II</li>
          </ul>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Montclair State University</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Major: Computer Science</p>
          <p>Relevant Computing Coursework:</p>
          <ul>
            <li>Computer Science I & II (Java)</li> 
            <li>Database Management Systems</li>
            <li>Computer Architecture and Organization</li>
          </ul>
          <p>Relevant Mathematics Coursework:</p>
          <ul>
            <li>Calculus I & II</li>
            <li>Linear Algebra</li>
            <li>Discrete Mathematics I</li>
          </ul>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <div class="container text-center">
    <p>Copyright &copy; <?php echo $row['title']; } } ?> <script>var d = new Date(); document.write(d.getFullYear());</script></p>
  </div>
</footer>

</body>
</html>
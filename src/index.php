<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hailegebriel Bekalu | Full Stack Developer</title>
    <meta name="description" content="Portfolio of Hailegebriel Bekalu, Full Stack Developer specializing in MERN, Next.js, Node.js, React, n8n, and Python.">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">Haile<span>.dev</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact" class="btn-primary-outline">Hire Me</a></li>
            </ul>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <header id="home" class="hero section">
        <div class="container hero-container">
            <div class="hero-content">
                <p class="greeting">Hello, I'm</p>
                <h1 class="name">Hailegebriel Bekalu</h1>
                <h2 class="role">Full Stack Developer</h2>
                <p class="summary">
                    I build exceptional, high-performance digital experiences. Specializing in the 
                    MERN stack, Next.js, and Python, I bring ideas to life through robust backend 
                    architectures and stunning frontend interfaces. Let's create something amazing.
                </p>
                <div class="hero-actions">
                    <a href="#projects" class="btn-primary">View My Work</a>
                    <a href="#contact" class="btn-secondary">Contact Me</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="images/hero.png" alt="Hailegebriel Bekalu" class="hero-image">
                <div class="glow-effect"></div>
            </div>
        </div>
    </header>

    <section id="skills" class="skills section bg-light">
        <div class="container">
            <h2 class="section-title">My Technical <span>Arsenal</span></h2>
            <p class="section-subtitle">Technologies I work with to bring solutions to life.</p>
            
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fab fa-react skill-icon" style="color: #61DAFB;"></i>
                    <h3>React & Next.js</h3>
                    <p>Building highly interactive and performant single-page & server-rendered applications.</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-node-js skill-icon" style="color: #339933;"></i>
                    <h3>Node.js & Express</h3>
                    <p>Developing scalable backend APIs and real-time microservices.</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-database skill-icon" style="color: #47A248;"></i>
                    <h3>MongoDB (MERN)</h3>
                    <p>Designing flexible NoSQL databases and robust data architectures.</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-python skill-icon" style="color: #3776AB;"></i>
                    <h3>Python</h3>
                    <p>Creating automation scripts, data analysis pipelines, and intelligent backends.</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-project-diagram skill-icon" style="color: #FF6C37;"></i>
                    <h3>n8n</h3>
                    <p>Designing advanced workflow automations and integrating diverse systems.</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-docker skill-icon" style="color: #2496ED;"></i>
                    <h3>Docker</h3>
                    <p>Containerizing applications for consistent deployment and scalable infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="projects section">
        <div class="container">
            <h2 class="section-title">Featured <span>Projects</span></h2>
            <p class="section-subtitle">A selection of my recent work.</p>
            
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/project1.png" alt="E-Commerce Platform">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Full-Stack E-Commerce</h3>
                        <p>A comprehensive MERN stack platform featuring user authentication, payment processing, and a real-time admin dashboard.</p>
                        <div class="project-tags">
                            <span>React</span><span>Node.js</span><span>MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/project2.png" alt="Workflow Automation Tool">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Automated Marketing Sync</h3>
                        <p>An intricate n8n and Python automation syncing CRM data with marketing platforms, processing over 10k records daily.</p>
                        <div class="project-tags">
                            <span>n8n</span><span>Python</span><span>API</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="images/project3.png" alt="SaaS Dashboard">
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3>Analytics SaaS Dashboard</h3>
                        <p>A Next.js application delivering high-performance charting and analytics metrics using Server-Side Rendering.</p>
                        <div class="project-tags">
                            <span>Next.js</span><span>Tailwind</span><span>Chart.js</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact section bg-light">
        <div class="container">
            <h2 class="section-title">Get In <span>Touch</span></h2>
            <p class="section-subtitle">Have a question or want to work together? Leave your details and I'll get back to you.</p>
            
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:hailegebrielbekalu47@gmail.com">hailegebrielbekalu47@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fab fa-linkedin-in"></i></div>
                        <div>
                            <h4>LinkedIn</h4>
                            <a href="https://www.linkedin.com/in/hailegebriel-bekalu-44237533b" target="_blank">View Profile</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Location</h4>
                            <p>Available Worldwide (Remote)</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <form id="contactForm" action="contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div id="formMessage" class="form-message"></div>
                        <button type="submit" class="btn-primary btn-block">
                            <span>Send Message</span> <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Hailegebriel Bekalu. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

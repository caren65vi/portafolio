<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viviana Gómez | Dev Backend</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
  
    <header class="header">
        <nav class="nav container">
            <a href="#" class="logo">VG<span>.</span></a>
            <ul class="nav-menu">
                <li><a href="#inicio" class="nav-link">Inicio</a></li>
                <li><a href="#sobre-mi" class="nav-link">Sobre mí</a></li>
                <li><a href="#experiencia" class="nav-link">Experiencia</a></li>
                <li><a href="#proyectos" class="nav-link">Proyectos</a></li>
                <li><a href="#contacto" class="nav-link">Contacto</a></li>
            </ul>
            <button class="menu-btn" id="menuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <main>

        <section id="inicio" class="hero">
            <div class="hero-container container">
                <div class="hero-content">
                    <div class="hero-tag">
                        <span>Disponible para proyectos</span>
                    </div>
                    <h1 class="hero-title">
                        Hola, soy <span class="accent">Viviana Gómez</span>
                    </h1>
                    <div class="hero-rol">
                        <span class="rol-text">Desarrolladora Backend</span>
                        <span class="cursor-blink">|</span>
                    </div>
                    <p class="hero-desc">
                        Ingeniera de Sistemas en formación. Apasionada por crear soluciones 
                        escalables con Java, Spring Boot y buenas prácticas. 
                        Transformo ideas en código funcional.
                    </p>
                    <div class="hero-btns">
                        <a href="#proyectos" class="btn btn-primary">
                            <i class="fas fa-arrow-down"></i> Ver proyectos
                        </a>
                        <a href="#contacto" class="btn btn-outline">
                            <i class="fas fa-paper-plane"></i> Contáctame
                        </a>
                        <a href="https://github.com/vivian21-bit" target="_blank" class="btn-icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/viviana-gomez-55b0a6210" target="_blank" class="btn-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="img-wrapper">
                        <img src="img/formal.png" alt="Viviana Gómez">
                        <div class="exp-badge">
                            <i class="fas fa-code"></i> 1+ años
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="sobre-mi" class="section">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-user-astronaut"></i>
                    <h2>Sobre mí</h2>
                    <div class="header-line"></div>
                </div>
                <div class="about-grid">
                    <div class="about-text">
                        <p>Soy estudiante de <strong>Ingeniería de Sistemas</strong> en la Universidad de la Amazonía y Tecnóloga en Análisis y Desarrollo de Software en el SENA.</p>
                        <p>Me especializo en <strong>backend con Java y Spring Boot</strong>, construyendo APIs robustas y escalables. Me encanta resolver problemas complejos y aprender nuevas tecnologías cada día.</p>
                        <p><i class="fas fa-map-marker-alt"></i> Florencia, Caquetá, Colombia</p>
                        <p><i class="fas fa-calendar-alt"></i> Disponibilidad inmediata</p>
                    </div>
                    <div class="about-stats">
                        <div class="stat-card">
                            <i class="fas fa-code"></i>
                            <h3>Java</h3>
                            <span>Backend</span>
                        </div>
                        <div class="stat-card">
                            <i class="fas fa-database"></i>
                            <h3>SQL</h3>
                            <span>MySQL · PostgreSQL</span>
                        </div>
                        <div class="stat-card">
                            <i class="fab fa-spring"></i>
                            <h3>Spring Boot</h3>
                            <span>REST APIs</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     
        <section id="experiencia" class="section bg-light">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-briefcase"></i>
                    <h2>Experiencia & Formación</h2>
                    <div class="header-line"></div>
                </div>
                <div class="exp-edu-grid">
                
                    <div class="card">
                        <div class="card-icon"><i class="fas fa-briefcase"></i></div>
                        <h3>Experiencia</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="timeline-date">2024 - 2025</span>
                                <h4>Instructora Técnica</h4>
                                <p>Formación en programación, bases de datos y soporte técnico. Desarrollo de material didáctico.</p>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-date">2023 - Actual</span>
                                <h4>Desarrolladora Freelance</h4>
                                <p>Sistemas de gestión de inventarios, pacientes y automatización de procesos.</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                        <h3>Educación</h3>
                        <div class="timeline">
                            <div class="timeline-item">
                                <span class="timeline-date">2023 - Presente</span>
                                <h4>Ingeniería de Sistemas</h4>
                                <p>Universidad de la Amazonía</p>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-date">En curso</span>
                                <h4>Análisis y Desarrollo de Software</h4>
                                <p>SENA</p>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-date">2022</span>
                                <h4>Misión TIC</h4>
                                <p>Universidad Nacional</p>
                            </div>
                        </div>
                    </div>
          
                    <div class="card">
                        <div class="card-icon"><i class="fas fa-certificate"></i></div>
                        <h3>Certificaciones</h3>
                        <ul class="cert-list">
                            <li><i class="fas fa-check"></i> Full Stack Spring Boot & Angular - 2025</li>
                            <li><i class="fas fa-check"></i> Cisco Networking Basics - 2025</li>
                            <li><i class="fas fa-check"></i> Metodología Scrum - 2025</li>
                            <li><i class="fas fa-check"></i> Git & GitHub Workshop - 2025</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="skills" class="section">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-code"></i>
                    <h2>Tech Stack</h2>
                    <div class="header-line"></div>
                </div>
                <div class="skills-container">
                    <div class="skill-group">
                        <h3><i class="fas fa-server"></i> Backend</h3>
                        <div class="skill-tags">
                            <span>Java</span>
                            <span>Spring Boot</span>
                            <span>Python</span>
                            <span>Node.js</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h3><i class="fas fa-database"></i> Bases de Datos</h3>
                        <div class="skill-tags">
                            <span>MySQL</span>
                            <span>PostgreSQL</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h3><i class="fas fa-palette"></i> Frontend</h3>
                        <div class="skill-tags">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>Angular</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                    <div class="skill-group">
                        <h3><i class="fas fa-tools"></i> Herramientas</h3>
                        <div class="skill-tags">
                            <span>Git</span>
                            <span>GitHub</span>
                            <span>VS Code</span>
                            <span>NetBeans</span>
                            <span>Figma</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
        <section id="proyectos" class="section bg-light">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-laptop-code"></i>
                    <h2>Proyectos</h2>
                    <div class="header-line"></div>
                    <p class="section-subtitle">Trabajos realizados durante mi formación</p>
                </div>
                <div class="projects-grid">
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-store"></i>
                        </div>
                        <h3>Supermarket Management</h3>
                        <p>Sistema de inventario con Java y MySQL. CRUD completo y reportes.</p>
                        <div class="project-techs">
                            <span>Java</span>
                            <span>MySQL</span>
                        </div>
                    </article>
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-hospital-user"></i>
                        </div>
                        <h3>Hospital System</h3>
                        <p>Gestión de pacientes y citas médicas con Java OOP.</p>
                        <div class="project-techs">
                            <span>Java</span>
                            <span>OOP</span>
                        </div>
                    </article>
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-tractor"></i>
                        </div>
                        <h3>Cattle Farm Control</h3>
                        <p>Control de ganado, vacunas y producción en Java.</p>
                        <div class="project-techs">
                            <span>Java</span>
                            <span>POO</span>
                        </div>
                    </article>
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-registered"></i>
                        </div>
                        <h3>User Registration App</h3>
                        <p>Formulario con validaciones JS y almacenamiento local.</p>
                        <div class="project-techs">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JS</span>
                        </div>
                    </article>
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Community Network</h3>
                        <p>Diseño de topología rural con Cisco Packet Tracer.</p>
                        <div class="project-techs">
                            <span>Networking</span>
                            <span>Cisco</span>
                        </div>
                    </article>
                    <article class="project-card">
                        <div class="project-img">
                            <i class="fas fa-film"></i>
                        </div>
                        <h3>Movie Grid</h3>
                        <p>Diseño de grid de películas con CSS Grid y Flexbox.</p>
                        <div class="project-techs">
                            <span>CSS Grid</span>
                            <span>Flexbox</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-language"></i>
                    <h2>Idiomas</h2>
                    <div class="header-line"></div>
                </div>
                <div class="languages-grid">
                    <div class="lang-card">
                        <span class="lang-name">Español</span>
                        <span class="lang-level native">Nativo</span>
                    </div>
                    <div class="lang-card">
                        <span class="lang-name">Inglés</span>
                        <span class="lang-level intermediate">Intermedio B1</span>
                    </div>
                    <div class="lang-card">
                        <span class="lang-name">Portugués</span>
                        <span class="lang-level basic">Básico</span>
                    </div>
                </div>
            </div>
        </section>

  
        <section id="contacto" class="section bg-light">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-envelope"></i>
                    <h2>Contacto</h2>
                    <div class="header-line"></div>
                </div>
                <div class="contact-grid">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>vivianaramon10@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <span>+57 3229351700</span>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-github"></i>
                            <a href="https://github.com/vivian21-bit">github.com/vivian21-bit</a>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-linkedin"></i>
                            <a href="https://www.linkedin.com/in/viviana-gomez-55b0a6210">LinkedIn</a>
                        </div>
                    </div>
                    <div class="contact-buttons">
                        <a href="mailto:vivianaramon10@gmail.com" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Enviar email
                        </a>
                        <a href="https://wa.me/573229351700" target="_blank" class="btn btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

  
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-question-circle"></i>
                    <h2>Preguntas frecuentes</h2>
                    <div class="header-line"></div>
                </div>
                <div class="faq-grid">
                    <details>
                        <summary>¿Qué tecnologías dominas?</summary>
                        <p>Java, Spring Boot, MySQL, PostgreSQL, HTML, CSS, JavaScript, Angular y Git.</p>
                    </details>
                    <details>
                        <summary>¿Estás disponible para proyectos?</summary>
                        <p>Sí, actualmente busco oportunidades como desarrolladora backend o full stack.</p>
                    </details>
                    <details>
                        <summary>¿Cuál es tu enfoque como desarrolladora?</summary>
                        <p>Código limpio, mantenible y eficiente. Me gusta entender el problema antes de escribir código.</p>
                    </details>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy;  <i>2026 Viviana Gómez</i></p>
            <div class="footer-social">
                <a href="https://github.com/vivian21-bit"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/viviana-gomez-55b0a6210"><i class="fab fa-linkedin-in"></i></a>
                <a href="mailto:vivianaramon10@gmail.com"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Menú móvil
        const menuBtn = document.getElementById('menuBtn');
        const navMenu = document.querySelector('.nav-menu');
        
        if (menuBtn) {
            menuBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }
        
        // Cerrar menú al hacer click en un link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
        
        // Efecto de cursor blink
        const cursor = document.querySelector('.cursor-blink');
        if (cursor) {
            setInterval(() => {
                cursor.style.opacity = cursor.style.opacity === '0' ? '1' : '0';
            }, 500);
        }
    </script>
</body>
</html>
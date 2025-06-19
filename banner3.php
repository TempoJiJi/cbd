<style>
    /* Import JetBrains Mono for terminal feel */
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap');

    /* Terminal Container */
    .terminal-container {
        background: #0d1117;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        margin: 40px auto;
        max-width: 900px;
        border: 1px solid #30363d;
    }

    /* Terminal Header */
    .terminal-header {
        background: #21262d;
        padding: 12px 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        border-bottom: 1px solid #30363d;
    }

    .terminal-buttons {
        display: flex;
        gap: 8px;
    }

    .terminal-button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .terminal-button.close { background: #ff5f56; }
    .terminal-button.minimize { background: #ffbd2e; }
    .terminal-button.maximize { background: #27ca3f; }

    .terminal-title {
        color: #8b949e;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        margin-left: 12px;
    }

    /* Terminal Body */
    .terminal-body {
        background: #0d1117;
        padding: 20px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        line-height: 1.6;
        color: #c9d1d9;
        min-height: 300px;
    }

    /* Terminal Text Styles */
    .terminal-prompt {
        color: #58a6ff;
        font-weight: 600;
    }

    .terminal-path {
        color: #7c3aed;
        font-weight: 500;
    }

    .terminal-command {
        color: #f85149;
        font-weight: 500;
    }

    .terminal-output {
        color: #56d364;
        margin: 8px 0;
    }

    .terminal-comment {
        color: #8b949e;
        font-style: italic;
    }

    .terminal-string {
        color: #a5d6ff;
    }

    .terminal-number {
        color: #79c0ff;
    }

    /* Typing Animation */
    .typing-animation {
        border-right: 2px solid #58a6ff;
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 50% { border-color: #58a6ff; }
        51%, 100% { border-color: transparent; }
    }

    /* Code Block Styling */
    .code-block {
        background: #161b22;
        border: 1px solid #30363d;
        border-radius: 6px;
        padding: 16px;
        margin: 16px 0;
        overflow-x: auto;
    }

    .code-line {
        display: block;
        margin: 4px 0;
    }

    .line-number {
        color: #6e7681;
        margin-right: 16px;
        user-select: none;
        width: 20px;
        display: inline-block;
        text-align: right;
    }

    /* Matrix Rain Effect */
    .matrix-rain {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
        overflow: hidden;
    }

    .matrix-column {
        position: absolute;
        top: -100%;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: #00ff41;
        animation: matrix-fall linear infinite;
        opacity: 0.6;
    }

    @keyframes matrix-fall {
        0% {
            transform: translateY(-100vh);
            opacity: 0;
        }
        10% {
            opacity: 0.6;
        }
        90% {
            opacity: 0.6;
        }
        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }

    /* Hero Area Styling */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #0d1117 0%, #161b22 50%, #21262d 100%);
    }

    .hero-area-3-inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        z-index: 2;
        padding-top: 120px;
    }

    /* Terminal-style Title */
    .terminal-title-main {
        font-family: 'JetBrains Mono', monospace;
        font-size: 48px;
        font-weight: 700;
        color: #58a6ff;
        text-shadow: 0 0 20px rgba(88, 166, 255, 0.5);
        margin-bottom: 20px;
        letter-spacing: 2px;
    }

    .terminal-subtitle {
        font-family: 'JetBrains Mono', monospace;
        font-size: 18px;
        color: #8b949e;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }

    /* Floating Code Elements */
    .floating-code {
        position: absolute;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: rgba(88, 166, 255, 0.3);
        animation: float-code 20s linear infinite;
        pointer-events: none;
    }

    @keyframes float-code {
        0% {
            transform: translateY(100vh) translateX(0);
            opacity: 0;
        }
        10% {
            opacity: 0.7;
        }
        90% {
            opacity: 0.7;
        }
        100% {
            transform: translateY(-100px) translateX(50px);
            opacity: 0;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .terminal-container {
            margin: 20px;
            max-width: calc(100% - 40px);
        }

        .terminal-body {
            padding: 16px;
            font-size: 12px;
        }

        .terminal-title-main {
            font-size: 32px;
        }

        .terminal-subtitle {
            font-size: 14px;
        }

        .hero-area-3-inner {
            padding-top: 80px;
        }
    }

    @media (max-width: 480px) {
        .terminal-title-main {
            font-size: 28px;
            letter-spacing: 1px;
        }

        .terminal-subtitle {
            font-size: 12px;
        }

        .terminal-body {
            font-size: 11px;
        }
    }

    /* Glitch Effect for Title */
    .glitch {
        position: relative;
        animation: glitch 2s infinite;
    }

    .glitch::before,
    .glitch::after {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .glitch::before {
        animation: glitch-1 0.5s infinite;
        color: #ff0000;
        z-index: -1;
    }

    .glitch::after {
        animation: glitch-2 0.5s infinite;
        color: #00ff00;
        z-index: -2;
    }

    @keyframes glitch {
        0%, 100% { transform: translate(0); }
        20% { transform: translate(-2px, 2px); }
        40% { transform: translate(-2px, -2px); }
        60% { transform: translate(2px, 2px); }
        80% { transform: translate(2px, -2px); }
    }

    @keyframes glitch-1 {
        0%, 100% { transform: translate(0); }
        20% { transform: translate(-1px, 1px); }
        40% { transform: translate(-1px, -1px); }
        60% { transform: translate(1px, 1px); }
        80% { transform: translate(1px, -1px); }
    }

    @keyframes glitch-2 {
        0%, 100% { transform: translate(0); }
        20% { transform: translate(1px, -1px); }
        40% { transform: translate(1px, 1px); }
        60% { transform: translate(-1px, -1px); }
        80% { transform: translate(-1px, 1px); }
    }

    /* Progress Bar */
    .progress-bar {
        width: 100%;
        height: 4px;
        background: #30363d;
        border-radius: 2px;
        overflow: hidden;
        margin: 16px 0;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #58a6ff, #7c3aed);
        border-radius: 2px;
        animation: progress 3s ease-in-out infinite;
    }

    @keyframes progress {
        0% { width: 0%; }
        50% { width: 100%; }
        100% { width: 0%; }
    }
</style>

<section class="hero-area-3">
    <!-- Matrix Rain Effect -->
    <div class="matrix-rain" id="matrix-rain"></div>

    <!-- Floating Code Elements -->
    <div class="floating-code" style="left: 10%; animation-delay: 0s;">const developer = 'Dawson';</div>
    <div class="floating-code" style="left: 20%; animation-delay: 2s;">function buildApp() {</div>
    <div class="floating-code" style="left: 30%; animation-delay: 4s;">return 'awesome';</div>
    <div class="floating-code" style="left: 40%; animation-delay: 6s;">}</div>
    <div class="floating-code" style="left: 50%; animation-delay: 8s;">npm install creativity</div>
    <div class="floating-code" style="left: 60%; animation-delay: 10s;">git commit -m "magic"</div>
    <div class="floating-code" style="left: 70%; animation-delay: 12s;">console.log('Hello World');</div>
    <div class="floating-code" style="left: 80%; animation-delay: 14s;">while(coding) { innovate(); }</div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h1 class="terminal-title-main glitch" data-text="CODES BY DAWSON">
                            CODES BY <span style="color: #f85149;">DAWSON</span>
                        </h1>
                        <p class="terminal-subtitle">
                            > Building High-Impact Web & App Products_
                        </p>
                    </div>
                </div>
            </div>

            <!-- Terminal Window -->
            <div class="terminal-container fade-anim" data-delay="0.3">
                <div class="terminal-header">
                    <div class="terminal-buttons">
                        <div class="terminal-button close"></div>
                        <div class="terminal-button minimize"></div>
                        <div class="terminal-button maximize"></div>
                    </div>
                    <div class="terminal-title">dawson@developer: ~/projects</div>
                </div>
                <div class="terminal-body">
                    <div class="code-line">
                        <span class="terminal-prompt">dawson@developer</span>:<span class="terminal-path">~/projects</span>$ <span class="terminal-command">whoami</span>
                    </div>
                    <div class="terminal-output">Full Stack Developer | Web & Mobile App Specialist</div>
                    
                    <div class="code-line">
                        <span class="terminal-prompt">dawson@developer</span>:<span class="terminal-path">~/projects</span>$ <span class="terminal-command">cat skills.json</span>
                    </div>
                    
                    <div class="code-block">
                        <div class="code-line">
                            <span class="line-number">1</span>{
                        </div>
                        <div class="code-line">
                            <span class="line-number">2</span>  <span class="terminal-string">"languages"</span>: [<span class="terminal-string">"PHP"</span>, <span class="terminal-string">"JavaScript"</span>, <span class="terminal-string">"TypeScript"</span>],
                        </div>
                        <div class="code-line">
                            <span class="line-number">3</span>  <span class="terminal-string">"frameworks"</span>: [<span class="terminal-string">"Laravel"</span>, <span class="terminal-string">"React"</span>, <span class="terminal-string">"Node.js"</span>],
                        </div>
                        <div class="code-line">
                            <span class="line-number">4</span>  <span class="terminal-string">"databases"</span>: [<span class="terminal-string">"MySQL"</span>, <span class="terminal-string">"MongoDB"</span>],
                        </div>
                        <div class="code-line">
                            <span class="line-number">5</span>  <span class="terminal-string">"experience"</span>: <span class="terminal-number">5</span>,
                        </div>
                        <div class="code-line">
                            <span class="line-number">6</span>  <span class="terminal-string">"passion"</span>: <span class="terminal-string">"∞"</span>
                        </div>
                        <div class="code-line">
                            <span class="line-number">7</span>}
                        </div>
                    </div>

                    <div class="code-line">
                        <span class="terminal-prompt">dawson@developer</span>:<span class="terminal-path">~/projects</span>$ <span class="terminal-command">ls -la completed_projects/</span>
                    </div>
                    <div class="terminal-output">
                        drwxr-xr-x  3 dawson  staff   96 Jan 15 2025 lavieflo_ecommerce/<br>
                        drwxr-xr-x  3 dawson  staff   96 Jan 15 2025 nzon_hiking_app/<br>
                        drwxr-xr-x  3 dawson  staff   96 Jan 15 2025 fatbear_admin_panel/<br>
                        <span class="terminal-comment"># And many more...</span>
                    </div>

                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>

                    <div class="code-line">
                        <span class="terminal-prompt">dawson@developer</span>:<span class="terminal-path">~/projects</span>$ <span class="terminal-command">echo</span> <span class="terminal-string">"Ready to build your next project!"</span>
                    </div>
                    <div class="terminal-output">Ready to build your next project!</div>
                    
                    <div class="code-line">
                        <span class="terminal-prompt">dawson@developer</span>:<span class="terminal-path">~/projects</span>$ <span class="typing-animation"></span>
                    </div>
                </div>
            </div>
        </div>
        
        <span class="empty-space hide-mobile" style="height: 100px"></span>
        <div class="image-wrapper parallax-view fade-anim">
            <video class="w-100" loop muted autoplay playsinline data-speed="0.5">
                <source src="assets/imgs/cbd/banner.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Matrix Rain Effect
    function createMatrixRain() {
        const matrixContainer = document.getElementById('matrix-rain');
        const characters = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン';
        
        function createColumn() {
            const column = document.createElement('div');
            column.className = 'matrix-column';
            column.style.left = Math.random() * 100 + '%';
            column.style.animationDuration = (Math.random() * 3 + 2) + 's';
            column.style.animationDelay = Math.random() * 2 + 's';
            
            let text = '';
            for (let i = 0; i < 20; i++) {
                text += characters.charAt(Math.floor(Math.random() * characters.length)) + '<br>';
            }
            column.innerHTML = text;
            
            matrixContainer.appendChild(column);
            
            setTimeout(() => {
                column.remove();
            }, 5000);
        }
        
        // Create initial columns
        for (let i = 0; i < 15; i++) {
            setTimeout(createColumn, i * 200);
        }
        
        // Continue creating columns
        setInterval(createColumn, 300);
    }
    
    // Start matrix rain
    createMatrixRain();
    
    // Typing animation for terminal cursor
    const typingElement = document.querySelector('.typing-animation');
    if (typingElement) {
        const commands = [
            'git status',
            'npm run build',
            'docker-compose up',
            'php artisan serve',
            'react-native run-android',
            'composer install'
        ];
        
        let commandIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        
        function typeCommand() {
            const currentCommand = commands[commandIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentCommand.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentCommand.substring(0, charIndex + 1);
                charIndex++;
            }
            
            if (!isDeleting && charIndex === currentCommand.length) {
                setTimeout(() => isDeleting = true, 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                commandIndex = (commandIndex + 1) % commands.length;
            }
            
            const speed = isDeleting ? 50 : 100;
            setTimeout(typeCommand, speed);
        }
        
        setTimeout(typeCommand, 1000);
    }
});
</script>
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <title>Free Glassmorphism Generator in CSS, SCSS, Tailwind, React - Steal Shadow
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href=" " />


    <meta name="description" content=" Create stunning frosted glass UI designs with the Free Glassmorphism Generator by Steal Shadow. Instantly generate CSS, SCSS, Tailwind, and React code with live preview. Modern, responsive, and copy-ready!
        " />

    <link rel="apple-touch-icon" sizes="180x180" href="img/fav.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">


    <style>
        body {

            font-family: "Oswald", sans-serif;
            -webkit-font-smoothing: antialiased;
            text-align: center;

        }


        header {
            display: flex;
            position: fixed;
            top: 50px;
            left: 0;
            padding: 0 9%;
            align-items: center;
            box-sizing: border-box;
            z-index: 999;
        }

        header.active {
            top: 0;
            left: 0;
            width: 100%;
            background: #fff;
            transition: all 250ms;
            z-index: 999;
            padding: 0 6%;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        }

        header.active .logo-wrapper img {
            width: 30px;
            height: 30px;
        }

        header.active a {
            display: initial;
        }

        header.active .button {
            display: inline-flex;
            height: 40px;
            font-size: 14px;
            padding: 0 25px;
            margin-right: 10px;
        }

        header.active a:last-child .button {
            margin-right: 0;
        }

        header a {
            display: none;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
        }

        .logo-wrapper img {
            width: 60px;
            height: 60px;
            margin-right: 1em;
        }


        header .buttons-wrapper {
            margin-left: auto;
            display: flex;
            align-items: center;
        }



        .lg-x {
            width: 200px;
            margin-top: 8px;
            margin-bottom: 5px;
        }

        .mt-50 {
            margin-top: 50px;
        }

        .code-content {
            text-align: left;
        }
    </style>


</head>

<body>

    <header class="active">

        <a href="index" class="no-underline" >
            <div class=" ">
                <img src="img/Steal-Shadow.png" class="lg-x" alt="Steal-Shadow">

            </div>
        </a>


        <div class="buttons-wrapper">
            <div class="header-controls">
                <button id="helpBtn" class="help-btn">?</button>
                <button id="galleryBtn" class="copy-btn">Examples</button>
                <div class="theme-toggle" id="themeToggle">
                    <div class="toggle-thumb"></div>
                </div>
            </div>
        </div>

    </header>

    <section>

        <div class="container mt-50">
            <div class="">
                <h1>Glassmorphism Playground</h1>

            </div>

            <main>

                <div class="controls">
                    <div class="preset-selector">
                        <div class="preset" data-preset="subtle">Subtle</div>
                        <div class="preset" data-preset="medium">Medium</div>
                        <div class="preset" data-preset="heavy">Heavy</div>
                        <div class="preset" data-preset="frosted">Frosted</div>
                        <div class="preset" data-preset="neon">Neon</div>
                    </div>

                    <div class="control-tabs">
                        <div class="control-tab active" data-tab="basic">Basic</div>
                        <div class="control-tab" data-tab="advanced">Advanced</div>
                        <div class="control-tab" data-tab="animation">Animation</div>
                        <div class="control-tab" data-tab="colors">Colors</div>
                    </div>

                    <div class="tab-content active" id="basicTab">
                        <div class="control-group">
                            <label>
                                Background Opacity
                                <span class="value" id="opacityValue">0.7</span>
                            </label>
                            <input type="range" id="opacity" min="0" max="1" step="0.05" value="0.7">
                        </div>
                        <div class="control-group">
                            <label>
                                Blur Effect
                                <span class="value" id="blurValue">10px</span>
                            </label>
                            <input type="range" id="blur" min="0" max="30" step="1" value="10">
                        </div>
                        <div class="control-group">
                            <label>
                                Border Width
                                <span class="value" id="borderValue">1px</span>
                            </label>
                            <input type="range" id="border" min="0" max="5" step="0.5" value="1">
                        </div>
                        <div class="control-group">
                            <label>
                                Border Radius
                                <span class="value" id="radiusValue">16px</span>
                            </label>
                            <input type="range" id="radius" min="0" max="32" step="1" value="16">
                        </div>
                    </div>

                    <div class="tab-content" id="advancedTab">
                        <div class="control-group">
                            <label>
                                Border Opacity
                                <span class="value" id="borderOpacityValue">0.1</span>
                            </label>
                            <input type="range" id="borderOpacity" min="0" max="1" step="0.05" value="0.1">
                        </div>
                        <div class="control-group">
                            <label>
                                Shadow Intensity
                                <span class="value" id="shadowValue">0.25</span>
                            </label>
                            <input type="range" id="shadow" min="0" max="1" step="0.05" value="0.25">
                        </div>
                        <div class="control-group">
                            <label>
                                Shadow Blur
                                <span class="value" id="shadowBlurValue">30px</span>
                            </label>
                            <input type="range" id="shadowBlur" min="0" max="100" step="1" value="30">
                        </div>
                        <div class="control-group">
                            <label>
                                Shadow Spread
                                <span class="value" id="shadowSpreadValue">0px</span>
                            </label>
                            <input type="range" id="shadowSpread" min="-20" max="20" step="1" value="0">
                        </div>
                    </div>

                    <div class="tab-content" id="animationTab">
                        <div class="control-group">
                            <label>
                                Hover Scale
                                <span class="value" id="hoverScaleValue">1.05</span>
                            </label>
                            <input type="range" id="hoverScale" min="1" max="1.2" step="0.01" value="1.05">
                        </div>
                        <div class="control-group">
                            <label>
                                Hover Opacity Change
                                <span class="value" id="hoverOpacityValue">0.1</span>
                            </label>
                            <input type="range" id="hoverOpacity" min="0" max="0.5" step="0.05" value="0.1">
                        </div>
                        <div class="control-group">
                            <label>
                                Transition Speed
                                <span class="value" id="transitionValue">0.3s</span>
                            </label>
                            <input type="range" id="transition" min="0" max="1" step="0.1" value="0.3">
                        </div>
                    </div>

                    <div class="tab-content" id="colorsTab">
                        <div class="control-group">
                            <label>Background Color</label>
                            <div class="color-picker-container">
                                <input type="color" id="bgColor" class="color-picker" value="#ffffff">
                                <span id="bgColorHex">#ffffff</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Border Color</label>
                            <div class="color-picker-container">
                                <input type="color" id="borderColor" class="color-picker" value="#ffffff">
                                <span id="borderColorHex">#ffffff</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label>Shadow Color</label>
                            <div class="color-picker-container">
                                <input type="color" id="shadowColor" class="color-picker" value="#000000">
                                <span id="shadowColorHex">#000000</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="preview-container" id="previewContainer">
                    <div class="background-controls">
                        <div class="bg-btn" style="background: linear-gradient(45deg, #3b82f6, #ec4899);"
                            data-bg="gradient1"></div>
                        <div class="bg-btn" style="background: linear-gradient(45deg, #10b981, #3b82f6);"
                            data-bg="gradient2"></div>
                        <div class="bg-btn" style="background: linear-gradient(45deg, #f59e0b, #ef4444);"
                            data-bg="gradient3"></div>
                    </div>

                    <div id="animationDemo" style="display: none;">Demo</div>
                    <div class="preview" id="preview">
                        Glassmorphism Effect
                    </div>

                    <div class="animation-controls">
                        <button class="animation-btn" id="floatBtn">Float</button>
                        <button class="animation-btn" id="pulseBtn">Pulse</button>
                        <button class="animation-btn" id="shakeBtn">Shake</button>
                    </div>
                </div>


                <div class="code-container">
                    <div class="code-tabs">
                        <div class="code-tab active" data-codetab="css">CSS</div>
                        <div class="code-tab" data-codetab="scss">SCSS</div>
                        <div class="code-tab" data-codetab="tailwind">Tailwind CSS</div>
                        <div class="code-tab" data-codetab="react">React</div>
                    </div>

                    <div class="code-content active" id="cssCode">
                        <pre><code class="language-css" id="cssSyntax"> 
.glass {
background: rgba(255, 255, 255, 0.7);
backdrop-filter: blur(10px);
-webkit-backdrop-filter: blur(10px);
border: 1px solid rgba(255, 255, 255, 0.1);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
}</code></pre>
                        <button class="copy-btn" id="copyCssBtn">Copy CSS</button>
                    </div>

                    <div class="code-content" id="scssCode">
                        <pre><code class="language-css" id="scssSyntax">// Glassmorphism mixin
@mixin glassmorphism(
$bg-opacity: 0.7,
$blur: 10px,
$border-width: 1px,
$border-opacity: 0.1,
$radius: 16px,
$shadow-opacity: 0.25,
$shadow-blur: 30px,
$shadow-spread: 0
) {
background: rgba(255, 255, 255, $bg-opacity);
backdrop-filter: blur($blur);
-webkit-backdrop-filter: blur($blur);
border: $border-width solid rgba(255, 255, 255, $border-opacity);
border-radius: $radius;
box-shadow: 0 4px $shadow-blur $shadow-spread rgba(0, 0, 0, $shadow-opacity);
}

.glass {
@include glassmorphism();
}</code></pre>
                        <button class="copy-btn" id="copyScssBtn">Copy SCSS</button>
                    </div>

                    <div class="code-content" id="tailwindCode">
                        <pre><code id="tailwindSyntax"><!-- Glassmorphism with Tailwind CSS -->
<div class="bg-white/70 backdrop-blur-md border border-white/10 rounded-2xl shadow-lg"></div></code></pre>
                        <button class="copy-btn" id="copyTailwindBtn">Copy Tailwind</button>
                    </div>

                    <div class="code-content" id="reactCode">
                        <pre><code class="language-css" id="reactSyntax">import React from 'react';

const GlassmorphicCard = ({ children, className = '' }) => {
return (
<div
  className={`
    bg-white/70 dark:bg-gray-800/70
    backdrop-blur-md
    border border-white/10 dark:border-gray-700/10
    rounded-2xl
    shadow-lg
    transition duration-300
    ${className}
  `}
>
  {children}
</div>
);
};

export default GlassmorphicCard;</code></pre>
                        <button class="copy-btn" id="copyReactBtn">Copy React</button>
                    </div>
                </div>
            </main>

        </div>

        <!-- Help Modal -->
        <div class="modal-overlay" id="helpModal">
            <div class="modal">
                <div class="modal-header">
                    <h2>How to Use the Glassmorphism Playground</h2>
                    <button class="close-modal" id="closeHelpModal">×</button>
                </div>
                <div style="text-align: left;">
                    <h3>What is Glassmorphism?</h3>
                    <p>Glassmorphism is a design trend that uses transparent or semi-transparent elements with blur
                        effects
                        to create a frosted glass appearance.</p>

                    <h3>Customize the Effect:</h3>
                    <ul>
                        <li>Use a background with gradient or colors to showcase the transparency</li>
                        <li>Don't use too much blur as it can reduce readability</li>
                        <li>Contrast is important - ensure text is readable against the backdrop</li>
                        <li>Subtle borders can enhance the glass effect</li>
                        <li>Browser compatibility: backdrop-filter is not supported in all browsers</li>
                    </ul>
                    <h3>View the Live Demo</h3>
                    <p>After Adjust if you want see the changes hover the Glassmorphism Box </p>
                </div>
            </div>
        </div>

        <!-- Gallery Modal -->
        <div class="modal-overlay" id="galleryModal">
            <div class="modal">
                <div class="modal-header">
                    <h2>Glassmorphism Examples</h2>
                    <button class="close-modal" id="closeGalleryModal">×</button>
                </div>
                <p>Click on any example to apply that style:</p>
                <div class="preview-gallery" id="exampleGallery">
                    <!-- Examples will be generated by JavaScript -->
                </div>
            </div>
        </div>

    </section>




    <footer>
        <section>
            <div class="">

                <div class="">
                    <img src="img/stea.png" class="lg-x" alt="Steal Shadow ">
                    <p class="mb-0"> <svg style="    position: absolute;
    left: 33%;
    margin-top: 5px; " width="24" height="24" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="32" cy="32" r="30" stroke="#28a745" stroke-width="4" />
                    <path d="M32 12A20 20 0 1 0 52 32H42A10 10 0 1 1 22 32H12A20 20 0 0 0 32 12Z" fill="#28a745" />
                </svg>
                Open Source</span>
                - Collected & Curated From Devs 💻❤️ | Want To Contribute <a href="" class="git-a" > <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 
                    0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 
                    1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 
                    0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.6 7.6 0 0 1 2-.27c.68 0 1.36.09 
                    2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 
                    0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 
                    0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg></a></p>
                </div>

            </div>
        </section>
    </footer>


    <style>
        .git-a{
            
          
            color:rgb(125, 125, 125);
        }
        .t-center {
            text-align: center;
        }

        .ft-txt {
            text-decoration: none;
        }
    </style>


    <script src="assets/js/app.js"></script>


</body>
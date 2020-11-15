<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Processing System</title>
    <meta name="description" content="A collection of decorative animated background shapes powered by WebGL and TweenMax." />
    <meta name="keywords" content="webgl, background, shape, web design, web development, tweenmax, gsap, animation" />
    <meta name="author" content="Louis Hoebregts for Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,500,700|Vidaloka" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/demo6.css" />
    <link rel="stylesheet" type="text/css" href="pater/pater.css" />
    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
</head>

<body class="demo-6">
    <svg class="hidden">


        <symbol id="icon-github" viewBox="0 0 32.6 31.8">
            <title>github</title>
            <path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z" />
        </symbol>
        <symbol id="icon-keyboard" viewBox="0 0 100 70">
            <title>keyboard</title>
            <!-- https://thenounproject.com/term/keyboard/783/ by Paul te Kortschot from the Noun Project -->
            <path d="M 60.94,1.83 39.22,1.83 C 36.71,1.83 34.67,3.86 34.67,6.376 L 34.67,28.1 C 34.67,30.61 36.71,32.65 39.22,32.65 L 60.94,32.65 C 63.45,32.65 65.5,30.61 65.5,28.1 L 65.5,6.376 C 65.5,3.86 63.45,1.83 60.94,1.83 Z M 44.79,18.63 50.08,11.74 55.37,18.63 Z" opacity="0.2" />
            <path d="M 60.86,36.75 39.14,36.75 C 36.63,36.75 34.59,38.79 34.59,41.3 L 34.59,63.02 C 34.59,65.53 36.63,67.57 39.14,67.57 L 60.86,67.57 C 63.38,67.57 65.41,65.53 65.41,63.02 L 65.41,41.3 C 65.42,38.79 63.38,36.75 60.86,36.75 Z M 50.08,57.45 44.79,50.55 55.37,50.55 Z" opacity="0.2" />
            <path d="M 95.45,36.75 73.73,36.75 C 71.22,36.75 69.18,38.79 69.18,41.3 L 69.18,63.02 C 69.18,65.53 71.22,67.57 73.73,67.57 L 95.45,67.57 C 97.97,67.57 100,65.53 100,63.02 L 100,41.3 C 100,38.79 97.97,36.75 95.45,36.75 Z M 83.4,57.45 83.4,46.86 90.3,52.16 Z" />
            <path d="M 26.27,36.75 4.55,36.75 C 2.037,36.75 0,38.79 0,41.3 L 0,63.02 C 0,65.53 2.037,67.57 4.55,67.57 L 26.27,67.57 C 28.78,67.57 30.82,65.53 30.82,63.02 L 30.82,41.3 C 30.82,38.79 28.78,36.75 26.27,36.75 Z M 16.69,57.45 9.79,52.16 16.69,46.86 Z" />
        </symbol>
    </svg>
    <main>
        <div class="content content--fixed">
            <header class="codrops-header">
                <!-- <div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/AnimatedFrameSlideshow/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=33168" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
					</div> -->
                <!-- <h1 class="codrops-header__title">EeSha</h1> -->
            </header>
            <a class="github" href="https://github.com/Rough22/RPMS" title="Find this project on GitHub"><svg class="icon icon--github">
                    <use xlink:href="#icon-github"></use>
                </svg></a>
            
        </div>
        <div class="content">
            <canvas class="scene scene--full" id="scene"></canvas>
            <div class="content__inner">
                <h2 class="content__title">Result Processing System</h2>
                <h2></h2>
                <h3 class="content__subtitle">
                    <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button" style="tab-size: 30;"> ADMIN </a>
                    <span style="display:inline-block; width: 15px;"> </span>
                    <a class="btn btn-success btn-lg" href="{{ route('teacher.login') }}" role="button"> TEACHER </a>
                    <span style="display:inline-block; width: 15px;"> </span>
                    <a class="btn btn-success btn-lg" href="{{ route('student.login') }}" role="button"> STUDENT </a>
            </div>
        </div>
    </main>
    <script src="js/demo.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/demo6.js"></script>
</body>

</html>